<?php
/**
 * Created by PhpStorm.
 * User: keithwatanabe
 * Date: 3/31/16
 * Time: 4:12 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('home.dashboard', ['user' => Auth::user()]);
    }
}