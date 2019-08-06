<?php

use Illuminate\Database\Seeder;

class FileCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\File\Models\File::unguard();
        \DB::table('category_file')->truncate();

        $faker = Faker\Factory::create();

        $files = \Romuniverse\File\Models\File::all();

        foreach ($files as $file) {
            $file_category = Romuniverse\File\Models\Category::orderByRaw("RAND()")->firstOrFail();
            $file_category->files()->attach($file);
        }
        \Romuniverse\File\Models\File::reguard();
    }
}
