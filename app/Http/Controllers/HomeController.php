<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
         $users = User::All();
         $users_list = array('' =>'');
         foreach ($users as $item) {
             $users_list[$item->id]=$item->name;
         }
         return [
             'users_list' => $users_list
         ];
     }
    public function index()
    {
        return view('home', self::getViewModel());
    }
}
