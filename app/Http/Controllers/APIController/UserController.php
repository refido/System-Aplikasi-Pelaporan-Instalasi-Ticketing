<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        $data = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User;
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();

        return response()->json([
            "message" => "user record created"
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (User::where('id', $id)->exists()) {
            $data = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($data, 200);
        } else {
            return response()->json([
                "message" => "user not found"
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
        if (User::where('id', $id)->exists()) {
            $data = User::find($id);
            // dd($request->name);

            $data->role = is_null($request->role) ? $data->role : $request->role;
            $data->name = is_null($request->name) ? $data->name : $request->name;
            $data->email = is_null($request->email) ? $data->email : $request->email;
            $data->password = is_null($request->password) ? $data->password : Hash::make($request->password);
            $data->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "user not found"
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
        if (User::where('id', $id)->exists()) {
            $data = User::find($id);
            $data->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "user not found"
            ], 404);
        }
    }
}
