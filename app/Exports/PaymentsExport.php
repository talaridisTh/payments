<?php

namespace App\Exports;

use App\Models\Client;
use App\Models\Payment;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;

class PaymentsExport implements FromQuery, WithMapping {

    use Exportable;

    public function query()
    {
        return Client::getPayment();
    }

    /**
     * @param mixed $client
     * @return array
     */
    public function map($client): array
    {
        return [
            $client->name,
            $client->surname,
            $client->payments()->first()->amount,
            $client->payments()->first()->created_at,
        ];
    }

}
