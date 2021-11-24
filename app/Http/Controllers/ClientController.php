<?php

namespace App\Http\Controllers;

use App\Http\Requests\DateRequest;
use App\Models\Client;
use App\Models\Payment;
use Illuminate\Http\Request;

class ClientController extends Controller {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome', [
            "payments" => Payment::withWhereHas("client")->get(),
        ]);
    }

    /**
     * @param DateRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function search(DateRequest $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome', [
            'filters' => $request->all('from', 'to'),
            "clients" => Client::withWhereHasCallback("lastPayment", fn($payment) => $payment->filter(request()->all('from', 'to')))->get(),
        ]);
    }

}