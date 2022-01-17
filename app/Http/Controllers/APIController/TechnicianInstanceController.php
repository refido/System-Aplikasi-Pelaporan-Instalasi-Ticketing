<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\TechnicianInstanceSchedule;
use Illuminate\Http\Request;

class TechnicianInstanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technician_instance_schedules = TechnicianInstanceSchedule::get()->toJson(JSON_PRETTY_PRINT);
        return response($technician_instance_schedules, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $technician_instance_schedule = new TechnicianInstanceSchedule;
        $technician_instance_schedule->id = $request->id;
        $technician_instance_schedule->tecnician_id = $request->tecnician_id;
        $technician_instance_schedule->schedule_id = $request->schedule_id;
        $technician_instance_schedule->save();

        return response()->json([
            "message" => "Technician Instance Schedule record created"
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
        if (TechnicianInstanceSchedule::where('id', $id)->exists()) {
            $technician_instance_schedule = TechnicianInstanceSchedule::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($technician_instance_schedule, 200);
        } else {
            return response()->json([
                "message" => "TechnicianInstanceSchedule not found"
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
        if (TechnicianInstanceSchedule::where('id', $id)->exists()) {
            $technician_instance_schedule = TechnicianInstanceSchedule::find($id);
            $technician_instance_schedule->id = is_null($request->id) ? $technician_instance_schedule->id : $request->id;
            $technician_instance_schedule->tecnician_id = is_null($request->tecnician_id) ? $technician_instance_schedule->tecnician_id : $request->tecnician_id;
            $technician_instance_schedule->schedule_id = is_null($request->schedule_id) ? $technician_instance_schedule->schedule_id : $request->schedule_id;
            $technician_instance_schedule->save();

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
        if (TechnicianInstanceSchedule::where('id', $id)->exists()) {
            $technician_instance_schedule = TechnicianInstanceSchedule::find($id);
            $technician_instance_schedule->delete();

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
