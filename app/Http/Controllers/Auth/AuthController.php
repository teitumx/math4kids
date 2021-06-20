<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function viewLogin()
    {
//        TODO Надо изменить шаблон
        return view('auth.login');
    }

    public function viewRegister()
    {
//        TODO Надо изменить шаблон
        return view('auth.register');
    }

    public function login(Request $request)
    {
        if(\Auth::attempt([
            'login' => $request->post('login'),
            'password' => $request->post('password'),
        ])) {
            $request->session()->regenerate();
            return \Auth::user();
        }
        return false;
    }

    public function register(RegisterRequest $request, User $user)
    {
        try {
            $user->fill([
                'first_name' => $request->post('first_name'),
                'last_name' => $request->post('last_name'),
                'login' => $request->post('login'),
                'password' => \Hash::make($request->post('password')),
                'birthday' => $request->post('birthday')
            ]);

            $user->save();
            \Auth::login($user);
            return \Auth::user();

        } catch (\Exception $exp) {
        }

        return false;
    }


    public function getUser()
    {
        if(!Auth::check()) {
            return false;
        }

        return Auth::user();
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
