<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = Component::get()->toJson(JSON_PRETTY_PRINT);
        return response($components, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $component = new Component;
        $component->code = $request->code;
        $component->name = $request->name;
        $component->save();

        return response()->json([
            "message" => "component record created"
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
        if (Component::where('id', $id)->exists()) {
            $component = Component::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($component, 200);
        } else {
            return response()->json([
                "message" => "Component not found"
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
        if (Component::where('id', $id)->exists()) {
            $component = Component::find($id);
            $component->code = is_null($request->code) ? $component->code : $request->code;
            $component->name = is_null($request->name) ? $component->name : $request->name;
            $component->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Component not found"
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
        if (Component::where('id', $id)->exists()) {
            $component = Component::find($id);
            $component->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Component not found"
            ], 404);
        }
    }
}
