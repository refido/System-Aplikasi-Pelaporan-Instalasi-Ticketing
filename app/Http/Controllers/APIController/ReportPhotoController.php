<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\ReportPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ReportPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportPhotos = ReportPhoto::get()->toJson(JSON_PRETTY_PRINT);
        return response($reportPhotos, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reportPhoto = new ReportPhoto;
        $reportPhoto->report_id = $request->report_id;
        $reportPhoto->photos = $request->photos;
        $reportPhoto->save();

        return response()->json([
            "message" => "reportPhoto record created"
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
        if (ReportPhoto::where('id', $id)->exists()) {
            $reportPhoto = ReportPhoto::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($reportPhoto, 200);
        } else {
            return response()->json([
                "message" => "ReportPhoto not found"
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
        if (ReportPhoto::where('id', $id)->exists()) {
            $reportPhoto = ReportPhoto::find($id);
            $reportPhoto->report_id = is_null($request->report_id) ? $reportPhoto->report_id : $request->report_id;
            $reportPhoto->photos = is_null($request->photos) ? $reportPhoto->photos : $request->photos;
            $reportPhoto->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "ReportPhoto not found"
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
        if (ReportPhoto::where('id', $id)->exists()) {
            $reportPhoto = ReportPhoto::find($id);
            $reportPhoto->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "ReportPhoto not found"
            ], 404);
        }
    }
}
