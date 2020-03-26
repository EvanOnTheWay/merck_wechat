<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    public function index()
    {
        $member = DB::select('SELECT * FROM Member');

        dd($member);
    }
}
