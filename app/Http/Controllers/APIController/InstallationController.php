<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Installation;
use Illuminate\Support\Facades\DB;

class InstallationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('installations')
            ->select('installations.*', 'technicians.name', 'technicians.no_telpn', 'technicians.status')
            ->leftJoin('technicians', 'technicians.id_technician', '=', 'installations.technician_id')
            ->get()
            ->toJson(JSON_PRETTY_PRINT);
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
        $data = new Installation;
        $data->code = $request->code;
        $data->number_of_technicians = $request->number_of_technicians;
        $data->category_instansi = $request->category_instansi;
        $data->technician_id = $request->technician_id;
        $data->date_instalation = $request->date_instalation;
        $data->pic_name = $request->pic_name;
        $data->pic_phone = $request->pic_phone;
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
        if (Installation::where('id', $id)->exists()) {
            $data = DB::table('installations')
                ->select('installations.*', 'technicians.name', 'technicians.no_telpn', 'technicians.status')
                ->leftJoin('technicians', 'technicians.id_technician', '=', 'installations.technician_id')
                ->where('installations.id', $id)->get()->toJson(JSON_PRETTY_PRINT);
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
        if (Installation::where('id', $id)->exists()) {
            $data = Installation::find($id);
            // dd($request->name);

            $data->code = is_null($request->code) ? $data->code : $request->code;
            $data->number_of_technicians = is_null($request->number_of_technicians) ? $data->number_of_technicians : $request->number_of_technicians;
            $data->category_instansi = is_null($request->category_instansi) ? $data->category_instansi : $request->category_instansi;
            $data->technician_id = is_null($request->technician_id) ? $data->technician_id : $request->technician_id;
            $data->date_instalation = is_null($request->date_instalation) ? $data->date_instalation : $request->date_instalation;
            $data->pic_name = is_null($request->pic_name) ? $data->pic_name : $request->pic_name;
            $data->pic_phone = is_null($request->pic_phone) ? $data->pic_phone : $request->pic_phone;
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
        if (Installation::where('id', $id)->exists()) {
            $data = Installation::find($id);
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
