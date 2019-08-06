<?php

use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\File\Models\File::unguard();
        \Romuniverse\File\Models\File::truncate();
        $faker = Faker\Factory::create();
        $num_created_files = 200;
        for ($i = 1; $i <= $num_created_files; $i++) {
            $upload_user = Romuniverse\User\Models\User::orderByRaw("RAND()")->firstOrFail();

            $file_data = [
                'uploaded_user_id' => $upload_user->id,
                'title' => implode('', $faker->words(3)),
                'size' => 1,
                'path' => 'G:\gitscripts\run\storage\files\filesTest.zip',
                'description' => implode('', $faker->sentences('3')),
                'allow_comment' => 1,
                'status' => 1,
                'visibility_level' => $faker->numberBetween(1, 3),
                'download_level' => $faker->numberBetween(1, 3),
                'slug' => $this->generateRandomString(10),
            ];

            $file = Romuniverse\File\Models\File::getModel();
            $file->fill($file_data);
            $file->save();

        }
        \Romuniverse\File\Models\File::reguard();

    }
}
