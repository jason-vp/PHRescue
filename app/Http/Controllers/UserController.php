<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserMeInfo;
use App\Http\Requests\UpdateUserMePassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     * The user can only update himself for now
     *
     * @param UpdateUserMeInfo $request
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     * @internal param int $id
     */
    public function update(UpdateUserMeInfo $request, User $user)
    {
        $user->user_name = $request->user_name;
        $user->person->entity->name = $request->input('person.entity.name');
        $user->person->entity->phone = $request->input('person.entity.phone');
        $user->person->entity->email = $request->input('person.entity.email');
        $user->person->entity->save();
        $user->save();
        return response($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changePassword(UpdateUserMePassword $request, User $user) {

        $user->password = Hash::make($request->new_password);
        $user->save();

        return response($user, 200);
    }
}
