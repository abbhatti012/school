<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request){
        $data = $request->all();
        unset($data['_token']);
        $rule=array(
          'email'=>'required|email',
          'password'=> 'required',
        );
      
        $validator=Validator::make($data,$rule);
        if($validator->fails()){
      
        }else{
          if(Auth::attempt($data)){
              $uid =  Auth::User()->id;

              $role= DB::table('role_user')
              ->where('role_user.user_id','=',$uid)
              ->join('roles', 'role_user.role_id', '=', 'roles.id')
              ->select('roles.name as name')
              ->first();

            if ($role->name=='SUPER_ADMIN') {
                return redirect('admin-dashboard');
            } elseif($role->name=='ADMIN') {
                return redirect('admin-dashboard');
            } elseif($role->name=='TEACHER') {
                return redirect('teacher-dashboard');
            } elseif($role->name=='STUDENT') {
                return redirect('student-dashboard');
            } 
          }
        }  
    }
}
