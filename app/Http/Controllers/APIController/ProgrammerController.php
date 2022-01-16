<?php

namespace App\Http\Controllers\APIContoller;

use App\Http\Controllers\Controller;
use App\Models\Programmer;
use Illuminate\Http\Request;

class ProgrammerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmers = Programmer::get()->toJson(JSON_PRETTY_PRINT);
        return response($programmers, 200);
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
        $programmer = new Programmer;
        $programmer->id_programmer = $request->id_programmer;
        $programmer->name = $request->name;
        $programmer->no_tlpn = $request->no_tlpn;
        $programmer->status = $request->status;
        $programmer->save();

        return response()->json([
            "message" => "programmer record created"
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
        if (Programmer::where('id', $id)->exists()) {
            $programmer = Programmer::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($programmer, 200);
        } else {
            return response()->json([
                "message" => "Programmer not found"
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
        if (Programmer::where('id', $id)->exists()) {
            $programmer = Programmer::find($id);
            $programmer->id_programmer = is_null($request->id_programmer) ? $programmer->id_programmer : $request->id_programmer;
            $programmer->name = is_null($request->name) ? $programmer->name : $request->name;
            $programmer->no_tlpn = is_null($request->no_tlpn) ? $programmer->no_tlpn : $request->no_tlpn;
            $programmer->status = is_null($request->status) ? $programmer->status : $request->status;
            $programmer->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Programmer not found"
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
        if (Programmer::where('id', $id)->exists()) {
            $programmer = Programmer::find($id);
            $programmer->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Programmer not found"
            ], 404);
        }
    }
}
