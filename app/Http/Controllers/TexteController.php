<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TexteController extends Controller
{
    public function index() {
        // get the texts to type in json file
        $jsonContent = File::get(public_path('data.json'));

        $datas = json_decode($jsonContent, true);

        return view('client.acceuil', ['datas' => $datas]);
    }

    public function success() {
        return view('client.test-complete');
    }
}
