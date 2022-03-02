<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\Technician;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technicians = Technician::get()->toJson(JSON_PRETTY_PRINT);
        return response($technicians, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $technician = new Technician;
        // $technician->id = $request->id;
        $technician->id_technician = $request->id_technician;
        $technician->name = $request->name;
        $technician->no_tlpn = $request->no_tlpn;
        $technician->status = $request->status;
        $technician->save();

        return response()->json([
            "message" => "technician record created"
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
        if (Technician::where('id', $id)->exists()) {
            $technician = Technician::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($technician, 200);
        } else {
            return response()->json([
                "message" => "Technician not found"
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
        if (Technician::where('id', $id)->exists()) {
            $technician = Technician::find($id);
            $technician->id = is_null($request->id) ? $technician->id : $request->id;
            $technician->user_id = is_null($request->id_technician) ? $technician->id_technician : $request->id_technician;
            $technician->name = is_null($request->name) ? $technician->name : $request->name;
            $technician->no_tlpn = is_null($request->no_tlpn) ? $technician->no_tlpn : $request->no_tlpn;
            $technician->status = is_null($request->status) ? $technician->status : $request->status;
            $technician->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Technician not found"
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
        if (Technician::where('id', $id)->exists()) {
            $technician = Technician::find($id);
            $technician->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Technician not found"
            ], 404);
        }
    }
}
