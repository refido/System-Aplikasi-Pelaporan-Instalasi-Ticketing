<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TechnicianInstallation;
use Illuminate\Support\Facades\DB;

class TechnicianInstallationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techinstas = DB::table('technician_installations')
            ->leftJoin('technicians', 'technicians.id_technician', '=', 'technician_installations.technician_id')
            ->leftJoin('installations', 'installations.id', '=', 'technician_installations.installation_id')
            ->get()
            ->toJson(JSON_PRETTY_PRINT);
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
        $techinsta = new TechnicianInstallation;

        $techinsta->technician_id = $request->technician_id;
        $techinsta->installation_id = $request->installation_id;

        $techinsta->save();

        return response()->json([
            "message" => "Technician Installation record created"
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
        if (TechnicianInstallation::where('id', $id)->exists()) {
            $techinsta = DB::table('technician_installations')
                ->leftJoin('technicians', 'technicians.id_technician', '=', 'technician_installations.technician_id')
                ->leftJoin('installations', 'installations.id', '=', 'technician_installations.installation_id')
                ->where('technician_installations.id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($techinsta, 200);
        } else {
            return response()->json([
                "message" => "Technician Installation not found"
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
        if (TechnicianInstallation::where('id', $id)->exists()) {
            $techinsta = TechnicianInstallation::find($id);

            $techinsta->technician_id = is_null($request->technician_id) ? $techinsta->technician_id : $request->technician_id;
            $techinsta->installation_id = is_null($request->installation_id) ? $techinsta->installation_id : $request->installation_id;

            $techinsta->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Technician Installation not found"
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
        if (TechnicianInstallation::where('id', $id)->exists()) {
            $techinsta = TechnicianInstallation::find($id);
            $techinsta->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Technician Installation not found"
            ], 404);
        }
    }
}
