<?php

use Illuminate\Database\Seeder;

class BalanceTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\Product\Models\Transaction::truncate();
        \Romuniverse\File\Models\Download::truncate();


        $num_created_transactions = 0;
        for ($i = 1; $i <= $num_created_transactions; $i++) {
            $user = Romuniverse\User\Models\User::orderByRaw("RAND()")->firstOrFail();
//            $user = Romuniverse\User\Models\User::where('id','=','14')->firstOrFail();

            //Only if the user has a balance to play with
            if ($user->balances->first()) {
                $faker = Faker\Factory::create();
                $balance = Romuniverse\Product\Models\Balance::where('user_id', '=', $user->id)->orderByRaw("RAND()")->first();
                //Get Random File create download
                $file = \Romuniverse\File\Models\File::orderByRaw("RAND()")->firstOrFail();
                $download = Romuniverse\File\Models\Download::getModel();
                //Set the file id and user id for the download
                $download->file_id = $file->id;
                $download->user_id = $user->id;
                $download->save();
                //Create the transaction based on the created download
                $download->transact();
            }
        }
    }
}
