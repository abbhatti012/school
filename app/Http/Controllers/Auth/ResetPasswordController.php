<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo() {
        $uid = Auth::User()->id;
        $role= DB::table('role_user')
        ->where('role_user.user_id','=',$uid)
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->select('roles.name as name')
        ->first();
    
        if ($role->name=='SUPER_ADMIN') {
            return '/admin-dashboard';
        } elseif($role->name=='ADMIN') {
            return '/admin-dashboard';
        } elseif($role->name=='TEACHER') {
            return '/teacher-dashboard';
        } elseif($role->name=='STUDENT') {
            return '/student-gifts';
        }
    }
}
