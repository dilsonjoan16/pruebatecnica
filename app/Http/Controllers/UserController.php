<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::paginate(10);

        return view('inicio', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inicio_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'user' => 'required|string|max:20|unique:users,user',
        //     'password' => 'required|string|max:20',
        //     'state' => 'required|string|max:2',
        //     'profile' => 'required|integer|max:2'
        // ]);

        $usuario = new User;
        $usuario->user = $request->get('user');
        $usuario->password = Hash::make($request->get('password'));
        $usuario->state = $request->get('state');
        $usuario->profile = $request->get('profile');
        $usuario->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);

        return view('inicio_edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'user' => 'required|string|max:20|unique:users,user',
        //     'password' => 'required|string|max:20',
        //     'state' => 'required|string|max:2',
        //     'profile' => 'required|integer|max:2'
        // ]);

        $usuario = User::find($id);
        $usuario->user = $request->get('user');
        $usuario->password = Hash::make($request->get('password'));
        $usuario->state = $request->get('state');
        $usuario->profile = $request->get('profile');
        $usuario->update();


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
    }

}
