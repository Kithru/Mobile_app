<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function about()
    {
        return view('about'); 
    }
    public function login()
    {
        return view('login'); 
    }
    public function admin()
    {
        return view('admin'); 
    }
    public function product()
    {
        return view('product'); 
    }
    public function customer()
    {
        return view('customer'); 
    }

}
