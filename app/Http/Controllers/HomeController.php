<?php

namespace App\Http\Controllers;

use App\Models\ApiRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $api;
    public function __construct(ApiRequest $api)
    {
        $this->api = $api;
    }

    public function index(){
        return view('home');
    }
}
