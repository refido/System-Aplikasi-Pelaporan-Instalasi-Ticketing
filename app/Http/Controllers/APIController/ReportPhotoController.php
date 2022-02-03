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

        // MOVE UPLOADED FILE TO PUBLIC
        $array_image = array();
        $filesimageku = \Request::file('image');
        if (@sizeof($request->file('image')) <= 0) {
            return response()->json([
                "message" => "Please insert images"
            ], 500);
        } else {
            for ($i = 0; $i < @sizeof($request->file('image')); $i++) {
                $waktu = date('ymdhis');
                $name_file = $waktu . '_' . $filesimageku[$i]->getClientOriginalName();
                $filesimageku[$i]->storeAs(
                    'Images',
                    $name_file,
                    'public'
                );
                array_push($array_image, $name_file);
            }


            $fiximage = implode("|", $array_image);
            $reportPhoto->photos = @$fiximage;
        }

        // MOVE UPLOADED FILE TO PUBLIC

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

            $totalkesimpen = explode("|", $reportPhoto->photos);
            for ($x = 0; $x < @sizeof($totalkesimpen); $x++) {
                Storage::disk('public')->delete('Images/' . $totalkesimpen[$x]);
            }

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
    public function update_report_photo(Request $request)
    {
        if (ReportPhoto::where('id', $request->id)->exists()) {
            $reportPhoto = ReportPhoto::find($request->id);
            $reportPhoto->report_id = is_null($request->report_id) ? $reportPhoto->report_id : $request->report_id;

            $array_image = array();
            $filesimageku = \Request::file('image');
            if (!@empty($filesimageku)) {

                $totalkesimpen = explode("|", $reportPhoto->photos);
                for ($x = 0; $x < @sizeof($totalkesimpen); $x++) {
                    Storage::disk('public')->delete('Images/' . $totalkesimpen[$x]);
                }

                for ($i = 0; $i < @sizeof($request->file('image')); $i++) {
                    $waktu = date('ymdhis');
                    $name_file = $waktu . '_' . $filesimageku[$i]->getClientOriginalName();
                    $filesimageku[$i]->storeAs(
                        'Images',
                        $name_file,
                        'public'
                    );
                    array_push($array_image, $name_file);
                }


                $fiximage = implode("|", $array_image);
                $reportPhoto->photos = @$fiximage;
            } else {
                $reportPhoto->photos = $reportPhoto->photos;
            }

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
}
