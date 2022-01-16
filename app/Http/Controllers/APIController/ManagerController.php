<?php

namespace App\Http\Controllers\APIContoller;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = Manager::get()->toJson(JSON_PRETTY_PRINT);
        return response($managers, 200);
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
        $manager = new Manager;
        $manager->id_manager = $request->id_manager;
        $manager->name = $request->name;
        $manager->no_tlpn = $request->no_tlpn;
        $manager->status = $request->status;
        $manager->save();

        return response()->json([
            "message" => "manager record created"
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
        if (Manager::where('id', $id)->exists()) {
            $manager = Manager::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($manager, 200);
        } else {
            return response()->json([
                "message" => "Manager not found"
            ], 404);
        }
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Manager::where('id', $id)->exists()) {
            $manager = Manager::find($id);
            $manager->id_manager = is_null($request->id_manager) ? $manager->id_manager : $request->id_manager;
            $manager->name = is_null($request->name) ? $manager->name : $request->name;
            $manager->no_tlpn = is_null($request->no_tlpn) ? $manager->no_tlpn : $request->no_tlpn;
            $manager->status = is_null($request->status) ? $manager->status : $request->status;
            $manager->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Manager not found"
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
        if (Manager::where('id', $id)->exists()) {
            $manager = Manager::find($id);
            $manager->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Manager not found"
            ], 404);
        }
    }
}
