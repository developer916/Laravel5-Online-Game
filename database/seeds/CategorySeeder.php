<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\File\Models\Category::unguard();
        \Romuniverse\File\Models\Category::truncate();




        $num_created_categories = 4;
        for ($i = 1; $i <= $num_created_categories; $i++) {
            $faker = Faker\Factory::create();
            //Create admin user
            $category_data = array(
                'parent_id' => $category = \Romuniverse\File\Models\Category::orderByRaw("RAND()")->first() ? \Romuniverse\File\Models\Category::orderByRaw("RAND()")->first()->id : 0,
                'name' => $faker->word,
                'slug' => $faker->word,
                'description' => $faker->sentence,
                'meta_title' => $faker->sentence,
                'meta_description' => $faker->sentence,
            );

            \Romuniverse\File\Models\Category::create($category_data);

        }


        \Romuniverse\File\Models\Category::reguard();
    }
}
