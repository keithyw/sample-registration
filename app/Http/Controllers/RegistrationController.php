<?php
/**
 * Created by PhpStorm.
 * User: keithwatanabe
 * Date: 3/31/16
 * Time: 3:06 PM
 */

namespace App\Http\Controllers;

use App\Http\Requests\Registration;
use App\Jobs\Register;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    /**
     * @param Registration $request
     * @return \Illuminate\Http\Response
     */
    public function post(Registration $request){
        $user = $this->dispatch(new Register($request->input('email'), $request->input('name'), $request->input('password')));
        return redirect($user ? '/dashboard' : '/');
    }
}