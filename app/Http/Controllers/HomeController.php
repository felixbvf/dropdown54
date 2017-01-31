<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Unit;
use App\Position;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function getViewModel() {
         $units = Unit::All();
         $units_list = array('' =>'');
         foreach ($units as $item) {
             $units_list[$item->id]=$item->name;
         }
         return [
             'units_list' => $units_list
         ];
     }
    public function index()
    {
        return view('home', self::getViewModel());
    }
}
