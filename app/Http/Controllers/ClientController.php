<?php

namespace App\Http\Controllers;

use App\Http\Requests\DateRequest;
use App\Models\Client;
use App\Models\Payment;
use Illuminate\Http\Request;

class ClientController extends Controller {

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('welcome', [
            "clients" => Client::all(),
            "payments" => Payment::all(),
        ]);
    }

    /**
     * @param DateRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function search(DateRequest $request)
    {

        return view('welcome', [
            'filters' => $request->all('from', 'to'),
            "clients" => Client::all(),
            "payments" => Payment::filter($request->only('from', 'to'))->get()
                ->unique("client_id")
                ->sortBy("id")
                ->values(),
        ]);
    }

}