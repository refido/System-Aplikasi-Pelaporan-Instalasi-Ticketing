<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function getAllAdmins()
    {
        $admins = Admin::get()->toJson(JSON_PRETTY_PRINT);
        return response($admins, 200);
    }

    public function createAdmin(Request $request)
    {
        $admin = new Admin;
        $admin->id = $request->id;
        $admin->user_id = $request->user_id;
        $admin->id_admin = $request->id_admin;
        $admin->name = $request->name;
        $admin->no_tlpn = $request->no_tlpn;
        $admin->status = $request->status;
        $admin->save();

        return response()->json([
            "message" => "admin record created"
        ], 200);
    }

    public function getAdmin($id)
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

    public function updateAdmin(Request $request, $id)
    {
        if (Admin::where('id', $id)->exists()) {
            $admin =Admin::find($id);
            // dd($request->name);
            $admin->id = is_null($request->id) ? $admin->id : $request->id;
            $admin->user_id = is_null($request->user_id) ? $admin->user_id : $request->user_id;
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

    public function deleteAdmin($id)
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
