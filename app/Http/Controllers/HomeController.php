<?php
/**
 * Created by PhpStorm.
 * User: keithwatanabe
 * Date: 3/31/16
 * Time: 12:03 PM
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('home.index');
    }
}