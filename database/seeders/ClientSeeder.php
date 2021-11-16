<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder {

    public function run()
    {
        //
        Client::create([
            "name" => "Taylor",
            "surname" => "Otwell",
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01'),
        ]);
        Client::create([
            'name' => 'Mohamed',
            'surname' => 'Said',
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01'),
        ]);
        Client::create([
            'name' => 'Jeffrey',
            'surname' => 'Way',
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01'),
        ]);
        Client::create([
            'name' => 'Phill',
            'surname' => 'Sparks',
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01'),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:01'),
        ]);

    }

}
