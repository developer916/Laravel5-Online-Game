<?php

use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Romuniverse\Purchase\Models\Purchase::truncate();
        \Romuniverse\Purchase\Models\Invoice::truncate();
        \Romuniverse\Purchase\Models\LineItem::truncate();
        \Romuniverse\Purchase\Models\Card::truncate();
        \Romuniverse\Product\Models\Balance::truncate();
        \Romuniverse\Product\Models\Transaction::truncate();


        $num_created_purchases = 20;
        for ($i = 1; $i <= $num_created_purchases; $i++) {
            $faker = Faker\Factory::create();


            $user = Romuniverse\User\Models\User::orderByRaw("RAND()")->firstOrFail();

            $purchase = new \Romuniverse\Purchase\Models\Purchase();
            $invoice = new \Romuniverse\Purchase\Models\Invoice();


            $purchase->user_id = $user->id;
            $purchase->save();

            //Associate invoice with purchase
            $purchase->invoice()->save($invoice);


            //Select a random product
            $product = Romuniverse\Product\Models\Product::orderByRaw("RAND()")->firstOrFail();
            $lineItem = new \Romuniverse\Purchase\Models\LineItem();


            $lineItem = new \Romuniverse\Purchase\Models\LineItem();
                $line_item_data = [
                  'invoice_id' =>  $purchase->invoice->id,
                  'product_id' => $product->id,
                  'original_price' => $product->price,
                  'original_description' => $product->title,
                ];

            $lineItem->fill($line_item_data);
            $lineItem->save();

            $invoice = $purchase->invoice;

            $invoice->lineItems()->saveMany([$lineItem]);


            //associate a card to the invoice to emulate payment
            $credit_card = new \Romuniverse\Purchase\Models\Card();
            $credit_card->number = '44444444444444444';
            $card_data = [];

            $credit_card->fill($card_data);
            $credit_card->user_id = $user->id;
            $credit_card->save();
            $credit_card->invoice()->save($invoice);

            //Complete the order
            $invoice->complete();

        }
    }
}
