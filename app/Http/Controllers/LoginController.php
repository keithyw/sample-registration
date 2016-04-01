<?php
/**
 * Created by PhpStorm.
 * User: keithwatanabe
 * Date: 3/31/16
 * Time: 4:58 PM
 */

namespace App\Http\Controllers;

use App\Http\Requests\Login as LoginRequest;
use App\Jobs\Login;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('home.login');
    }

    /**
     * @param Login $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function post(LoginRequest $request){
        if ($this->dispatch(new Login($request->input('email'), $request->input('password')))){
            return redirect('/dashboard');
        }
        else{
            return redirect('/login')
                ->withInput($request->only('email'))
                ->withErrors(['email' => 'Cannot find email/password']);
        }
    }
}
