<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = \Hash::make('password');

        \Romuniverse\User\Models\User::unguard();
        \Romuniverse\User\Models\User::truncate();

        $faker = Faker\Factory::create();
        //Create admin user
        $user_data = array(
            'slug' => 'admin',
            'role_id' => \Romuniverse\User\Models\Role::where('key','=','admin')->first()->id,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => 'admin@localhost',
            'email_verified' => 1,
            'email_token' => null,
            'email_token_expires' => null,
            'username' => 'admin',
            'password' => $password,
            'mobile' => $faker->phoneNumber,
            'phone' => $faker->phoneNumber,
            'gender' => array_rand(['Male', 'Female']),
            'DOB' => $faker->date('m/d/Y', 'now'),
            'nationality' => 'indian',
            'country' => 1,
            'state' => null,
            'city' => null,
            'zip' => null,
            'address' => null,
            'photo' => null,
            'active' => array_rand([1 => 1, 0 => 0]),
            'ip' => $faker->ipv4(),
            'last_login' => $faker->dateTime(),
            'tos' => array_rand([1, 0]),
            'last_action' => $faker->dateTime(),
            'user_type' => null,
            'points' => array_rand([0 => 0, $faker->numberBetween(0, 2000) => $faker->numberBetween(0, 2000)]),
        );
        \Romuniverse\User\Models\User::create($user_data);


        $num_created_users = 10;
        for ($i = 1; $i <= $num_created_users; $i++) {
            $faker = Faker\Factory::create();
            $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));

            $user_data = array(
                'slug' => $faker->firstName . $faker->lastName . $faker->word . rand(1, 100),
                'role_id' => \Romuniverse\User\Models\Role::where('key','=','member')->first()->id,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'email_verified' => array_rand([0, 1]),
                'email_token' => null,
                'email_token_expires' => null,
                'username' => $faker->lastName . rand(1, 100),
                'password' => $password,
                'mobile' => $faker->phoneNumber,
                'phone' => $faker->phoneNumber,
                'gender' => array_rand(['Male', 'Female']),
                'DOB' => $faker->date('m/d/Y', 'now'),
                'nationality' => 'indian',
                'country' => 1,
                'state' => null,
                'city' => null,
                'zip' => null,
                'address' => null,
                'photo' => null,
                'active' => array_rand([1 => 1, 0 => 0]),
                'ip' => $faker->ipv4(),
                'last_login' => $faker->dateTime(),
                'tos' => array_rand([1, 0]),
                'last_action' => $faker->dateTime(),
                'user_type' => null,
                'points' => array_rand([0 => 0, $faker->numberBetween(0, 2000) => $faker->numberBetween(0, 2000)]),
            );


            \Romuniverse\User\Models\User::create($user_data);

        }


        \Romuniverse\User\Models\User::reguard();

    }
}
