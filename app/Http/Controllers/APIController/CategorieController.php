<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::get()->toJson(JSON_PRETTY_PRINT);
        return response($categories, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new Categorie;
        $categorie->code = $request->code;
        $categorie->name = $request->name;
        $categorie->save();

        return response()->json([
            "message" => "categorie record created"
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
        if (Categorie::where('id', $id)->exists()) {
            $categorie = Categorie::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($categorie, 200);
        } else {
            return response()->json([
                "message" => "Categorie not found"
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
        if (Categorie::where('id', $id)->exists()) {
            $categorie = Categorie::find($id);
            $categorie->code = is_null($request->code) ? $categorie->code : $request->code;
            $categorie->name = is_null($request->name) ? $categorie->name : $request->name;
            $categorie->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Categorie not found"
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
        if (Categorie::where('id', $id)->exists()) {
            $categorie = Categorie::find($id);
            $categorie->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Categorie not found"
            ], 404);
        }
    }
}
