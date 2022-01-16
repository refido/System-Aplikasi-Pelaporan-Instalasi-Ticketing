<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InstallationSchedule;

class InstallationScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = InstallationSchedule::get()->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new InstallationSchedule;
        $data->code = $request->code;
        $data->number_of_technicians = $request->number_of_technicians;
        $data->instance_id = $request->instance_id;
        $data->technician_id = $request->technician_id;
        $data->date_instalation = $request->date_instalation;
        $data->status = $request->status;
        $data->save();

        return response()->json([
            "message" => "installation schedule record created"
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
        if (InstallationSchedule::where('id', $id)->exists()) {
            $data = InstallationSchedule::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($data, 200);
        } else {
            return response()->json([
                "message" => "installation schedule not found"
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
        if (InstallationSchedule::where('id', $id)->exists()) {
            $data = InstallationSchedule::find($id);
            // dd($request->name);

            $data->code = is_null($request->code) ? $data->code : $request->code;
            $data->number_of_technicians = is_null($request->number_of_technicians) ? $data->number_of_technicians : $request->number_of_technicians;
            $data->instance_id = is_null($request->instance_id) ? $data->instance_id : $request->instance_id;
            $data->technician_id = is_null($request->technician_id) ? $data->technician_id : $request->technician_id;
            $data->date_instalation = is_null($request->date_instalation) ? $data->date_instalation : $request->date_instalation;
            $data->status = is_null($request->status) ? $data->status : $request->status;
            $data->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "installation schedule not found"
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
        if (InstallationSchedule::where('id', $id)->exists()) {
            $data = InstallationSchedule::find($id);
            $data->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "installation schedule not found"
            ], 404);
        }
    }
}
