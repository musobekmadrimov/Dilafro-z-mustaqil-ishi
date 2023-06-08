<?php

namespace App\Http\Controllers;

use App\Models\Greenhouse;
use Illuminate\Http\Request;

class ClientViewController extends Controller
{
    public function greenhouses()
    {
        $greenhouses = Greenhouse::latest()->paginate(8);
        return view('client.greenhouses', compact(['greenhouses']));
    }
}
