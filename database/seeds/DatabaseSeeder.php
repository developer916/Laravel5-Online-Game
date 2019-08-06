<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(FileSeeder::class);
        $this->call(FileCategoriesSeeder::class);
        $this->call(CommentSeeder::class);
//        $this->call(PurchaseSeeder::class); // Only activate after product added
//        $this->call(BalanceTransactionSeeder::class); //Only activate after product added
        $this->call(CmsPagesSeeder::class);


    }
}
