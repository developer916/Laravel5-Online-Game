<?php
use Romuniverse\File\Models\File;
use Romuniverse\User\Models\User;
use Romuniverse\File\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = \Hash::make('password');

        \Romuniverse\File\Models\Comment::unguard();
        \Romuniverse\File\Models\Comment::truncate();

        $faker = Faker\Factory::create();

        $num_created_comments = 400;
        for ($i = 1; $i <= $num_created_comments; $i++) {
            $faker = Faker\Factory::create();
            $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));

            $file = File::orderByRaw("RAND()")->firstOrFail();
            $user = User::orderByRaw("RAND()")->firstOrFail();

            //@todo ajw emulate a parent child relationship
            $comment_data = array(
                'user_id' => $user->id,
                'parent_id' => null,
                'file_id' => $file->id,
                'subject' => $faker->sentence(),
                'author' => $faker->name(),
                'value' => $faker->numberBetween(1, 25),
                'body' => $faker->sentence(),
                'type' => $faker->numberBetween(1, 5),
                'is_locked' => $faker->numberBetween(0, 1),

            );


            \Romuniverse\File\Models\Comment::create($comment_data);
        }
    }
}
