<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\Product\Models\Product::unguard();
        \Romuniverse\Product\Models\Product::truncate();

        $faker = Faker\Factory::create();
        //Create admin user
        $num_created_products = 4;
        for ($i = 1; $i <= $num_created_products; $i++) {
            $faker = Faker\Factory::create();
            $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));

            $product_data = array(
                'price' => $faker->numberBetween(1,99),
                'description' => $faker->sentence(),
                'title' => $faker->sentence(),
                'visibility_level' => $faker->numberBetween(0,3),
                'download_level' => $faker->numberBetween(0,3),
                'balance_expiration' => $faker->numberBetween(0,30),
                'membership_expiration' => $faker->numberBetween(0,30)
            );


            \Romuniverse\Product\Models\Product::create($product_data);

        }

    }
}
