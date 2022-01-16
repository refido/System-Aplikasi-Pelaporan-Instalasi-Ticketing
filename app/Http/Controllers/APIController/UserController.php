<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::get()->toJson(JSON_PRETTY_PRINT);
        return response($admins, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->id_admin = $request->id_admin;
        $admin->name = $request->name;
        $admin->no_tlpn = $request->no_tlpn;
        $admin->status = $request->status;
        $admin->save();

        return response()->json([
            "message" => "admin record created"
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
        if (Admin::where('id', $id)->exists()) {
            $admin = Admin::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($admin, 200);
        } else {
            return response()->json([
                "message" => "Admin not found"
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
        if (Admin::where('id', $id)->exists()) {
            $admin = Admin::find($id);
            // dd($request->name);

            $admin->id_admin = is_null($request->id_admin) ? $admin->id_admin : $request->id_admin;
            $admin->name = is_null($request->name) ? $admin->name : $request->name;
            $admin->no_tlpn = is_null($request->no_tlpn) ? $admin->no_tlpn : $request->no_tlpn;
            $admin->status = is_null($request->status) ? $admin->status : $request->status;
            $admin->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Admin not found"
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
        if (Admin::where('id', $id)->exists()) {
            $admin = Admin::find($id);
            $admin->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Admin not found"
            ], 404);
        }
    }
}
