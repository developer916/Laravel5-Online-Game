<?php

use Illuminate\Database\Seeder;

class FileMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\File\Models\File::unguard();
        \DB::table('file_meta')->truncate();

        $faker = Faker\Factory::create();

        $files = \Romuniverse\File\Models\File::all();

        foreach ($files as $file) {

            $file->setMetaAttribute(['year' => $faker->numberBetween('1980','2015')]);
        }
        \Romuniverse\File\Models\File::reguard();
    }
}
