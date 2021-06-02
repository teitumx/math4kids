<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
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
        $result = false;
        if(\Auth::attempt([
            'login' => $request->post('login'),
            'password' => $request->post('password'),
        ])) {
            $request->session()->regenerate();
            $result = true;
        }
        return $result;
    }

    public function register(RegisterRequest $request, User $user)
    {
        $result = false;
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
            $result = true;
        } catch (\Exception $exp) {
        }

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
