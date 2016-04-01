<?php
/**
 * Created by PhpStorm.
 * User: keithwatanabe
 * Date: 4/1/16
 * Time: 12:38 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}