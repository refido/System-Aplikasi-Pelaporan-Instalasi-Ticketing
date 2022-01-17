<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\ReportInstallation;
use Illuminate\Http\Request;

class ReportInstallationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportInstallations = ReportInstallation::get()->toJson(JSON_PRETTY_PRINT);
        return response($reportInstallations, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reportInstallation = new ReportInstallation;
        $reportInstallation->start_installation = $request->start_installation;
        $reportInstallation->start_training = $request->start_training;
        $reportInstallation->completed_training = $request->completed_training;
        $reportInstallation->completed_installation = $request->completed_installation;
        $reportInstallation->component_id = $request->component_id;
        $reportInstallation->status = $request->status;
        $reportInstallation->jumlah_caller = $request->jumlah_caller;
        $reportInstallation->save();

        return response()->json([
            "message" => "reportInstallation record created"
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
        if (ReportInstallation::where('id', $id)->exists()) {
            $reportInstallation = ReportInstallation::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($reportInstallation, 200);
        } else {
            return response()->json([
                "message" => "ReportInstallation not found"
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
        if (ReportInstallation::where('id', $id)->exists()) {
            $reportInstallation = ReportInstallation::find($id);
            $reportInstallation->start_installation = is_null($request->start_installation) ? $reportInstallation->start_installation : $request->start_installation;
            $reportInstallation->start_training = is_null($request->start_training) ? $reportInstallation->start_training : $request->start_training;
            $reportInstallation->completed_training = is_null($request->completed_training) ? $reportInstallation->completed_training : $request->completed_training;
            $reportInstallation->completed_installation = is_null($request->completed_installation) ? $reportInstallation->completed_installation : $request->completed_installation;
            $reportInstallation->component_id = is_null($request->component_id) ? $reportInstallation->component_id : $request->component_id;
            $reportInstallation->status = is_null($request->status) ? $reportInstallation->status : $request->status;
            $reportInstallation->jumlah_caller = is_null($request->jumlah_caller) ? $reportInstallation->jumlah_caller : $request->jumlah_caller;
            $reportInstallation->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "ReportInstallation not found"
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
        if (ReportInstallation::where('id', $id)->exists()) {
            $reportInstallation = ReportInstallation::find($id);
            $reportInstallation->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "ReportInstallation not found"
            ], 404);
        }
    }
}
