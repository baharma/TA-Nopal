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

    public function ApiPost(Request $request){
        $data = $request->all();
        $this->api->create($data);
        return response()->json(['message' => 'API request created successfully']);
    }

    public function getAllApi(){
        $data =  $this->api->latest('created_at')->first();
        return response()->json($data);
    }

}
