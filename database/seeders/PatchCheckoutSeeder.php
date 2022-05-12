<?php

namespace Database\Seeders;

use App\Models\Checkout;
use Illuminate\Database\Seeder;

class PatchCheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $checkouts = Checkout::where('total', 0)->get();

        foreach ($checkouts as $checkout) {
            $checkout->update([
                'total' => $checkout->camp->price
            ]);
        }
    }
}
