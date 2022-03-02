<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReportComponent;

class ReportComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //HOW TO JOIN THIS???
        //HOW TO JOIN THIS???
        //HOW TO JOIN THIS???
        //HOW TO JOIN THIS???
        //HOW TO JOIN THIS???
        //HE SAYING MULTIPLE COMPONENT
        //HE SAYING MULTIPLE COMPONENT
        $techinstas = ReportComponent::get()->toJson(JSON_PRETTY_PRINT);
        return response($techinstas, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $techinsta = new ReportComponent;

        $techinsta->report_id = $request->report_id;
        $techinsta->component_id = $request->component_id;

        $techinsta->save();

        return response()->json([
            "message" => "Report Component record created"
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
        if (ReportComponent::where('id', $id)->exists()) {
            $techinsta = ReportComponent::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($techinsta, 200);
        } else {
            return response()->json([
                "message" => "Report Component not found"
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
        if (ReportComponent::where('id', $id)->exists()) {
            $techinsta = ReportComponent::find($id);

            $techinsta->report_id = is_null($request->report_id) ? $techinsta->report_id : $request->report_id;
            $techinsta->component_id = is_null($request->component_id) ? $techinsta->component_id : $request->component_id;

            $techinsta->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Report Component not found"
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
        if (ReportComponent::where('id', $id)->exists()) {
            $techinsta = ReportComponent::find($id);
            $techinsta->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Report Component not found"
            ], 404);
        }
    }
}
