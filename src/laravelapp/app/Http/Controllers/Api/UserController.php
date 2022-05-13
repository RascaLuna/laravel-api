<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json([
            'message' => 'SUCCESS',
            'data' => $users
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'message' => 'SUCCESS',
            'data' => $user
        ], 200, []);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json([
                    'message' => 'SUCCESS',
                    'data' => $user
                ], 200, []);
        } else {
            return response()->json([
                'message' => 'FAILED',
            ], 404);
        }
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
        $update = [
            'name' => $request->name,
            'sex' => $request->sex,
            'email' => $request->email,
            'prefecture' => $request->prefecture,
            'birthday' => $request->birthday,
            'password' => $request->password,
        ];
        $user = User::where('id', $id)->update($update);
        if ($user) {
            return response()->json([
                'message' => 'SUCCESS',
            ], 200);
        } else {
            return response()->json([
                'message' => 'FAILED',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->delete();
        if ($user) {
            return response()->json([
                'message' => 'SUCCESS',
            ], 200);
        } else {
            return response()->json([
                'message' => 'FAILED',
            ], 404);
        }
    }
}
