<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{

    public function __construct(){
        $this->middleware('AccessTokenCheck');
    }
// We can also put the middle are in __construct yeadi route ma chuto vana
//\\ Bec. yo page construct hunu vanda paila middleware saga token khojxa

    public function index(){
        return "<h1>You can only see this after authorize</h1>";
    }
}
