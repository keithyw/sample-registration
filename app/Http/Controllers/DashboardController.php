<?php
/**
 * Created by PhpStorm.
 * User: keithwatanabe
 * Date: 3/31/16
 * Time: 4:12 PM
 */

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return 'dashboard';
    }
}