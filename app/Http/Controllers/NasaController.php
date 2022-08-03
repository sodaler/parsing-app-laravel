<?php

namespace App\Http\Controllers;

use App\Components\ImportNasaHttp;
use App\Models\Card;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class NasaController extends BaseController
{
    public function index(){

        $data = Card::paginate(2);

        return view('posts', compact('data'));
    }
}
