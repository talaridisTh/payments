<?php

namespace Database\Seeders;

use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder {

    public function run()
    {
        Payment::create([
            'client_id' => 1,
            'amount' => 500,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 17:25:52'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-03-01 17:25:52'),
        ]);
        Payment::create([
            'client_id' => 1,
            'amount' => 1000,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-02 17:25:52'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-03-02 17:25:52'),
        ]);
        Payment::create([
            'client_id' => 2,
            'amount' => 1500,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-02-01 17:25:52'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-03-01 17:25:52'),
        ]);
        Payment::create([
            'client_id' => 2,
            'amount' => 2000,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-02-02 17:25:52'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-03-02 17:25:52'),
        ]);
        Payment::create([
            'client_id' => 3,
            'amount' => 2500,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-03-01 17:25:52'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-03-01 17:25:52'),
        ]);
        Payment::create([
            'client_id' => 3,
            'amount' => 3000,
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-03-02 17:25:52'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-03-02 17:25:52'),
        ]);
    }

}
