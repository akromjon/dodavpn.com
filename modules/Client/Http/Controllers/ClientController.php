<?php

namespace Modules\Client\Http\Controllers;

use Modules\Client\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients=Client::select('id','name','address')->get();

        return response()->json($clients);
    }

    public function show(string $clientId)
    {
        $client=Client::findOrFail($clientId);

        return response()->json($client);
    }

}
