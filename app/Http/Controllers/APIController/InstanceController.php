<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instance;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class InstanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Instance::get()->toJson(JSON_PRETTY_PRINT);
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
        $data = new Instance;
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->no_tlpn_pic = $request->no_tlpn_pic;
        $data->address = $request->address;
        $data->pic_name = $request->pic_name;
        // MOVE UPLOADED FILE TO PUBLIC
        $waktu = date('ymdhis');
        $name_file = $waktu . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs(
            'InstanceImages',
            $name_file,
            'public'
        );
        $data->image = @$name_file;
        // MOVE UPLOADED FILE TO PUBLIC
        $data->save();

        return response()->json([
            "message" => "instance record created"
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
        if (Instance::where('id', $id)->exists()) {
            $data = Instance::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($data, 200);
        } else {
            return response()->json([
                "message" => "instance not found"
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
        if (Instance::where('id', $id)->exists()) {
            $data = Instance::find($id);
            // dd($request->name);

            $data->category_id = is_null($request->category_id) ? $data->category_id : $request->category_id;
            $data->name = is_null($request->name) ? $data->name : $request->name;
            $data->no_tlpn_pic = is_null($request->no_tlpn_pic) ? $data->no_tlpn_pic : $request->no_tlpn_pic;
            $data->address = is_null($request->address) ? $data->address : $request->address;
            $data->pic_name = is_null($request->pic_name) ? $data->pic_name : $request->pic_name;
            // $file = $request->file('image');

            // if (!empty($file)) {

            //     if (!empty($data->image)) {
            //         Storage::disk('public')->delete('InstanceImages/' . $data->image);
            //     }

            //     $waktu = date('ymdhis');
            //     $name_file = $waktu . '_' . $request->file('image')->getClientOriginalName();
            //     $request->file('image')->storeAs(
            //         'InstanceImages',
            //         $name_file,
            //         'public'
            //     );
            //     $data->image = @$name_file;
            // } else {
            //     $data->image = $data->image;
            // }

            // MOVE UPLOADED FILE TO PUBLIC
            // MOVE UPLOADED FILE TO PUBLIC
            // MOVE UPLOADED FILE TO PUBLIC

            $data->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "instance not found"
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
        if (Instance::where('id', $id)->exists()) {
            $data = Instance::find($id);

            if (!@empty($data->image)) {
                Storage::disk('public')->delete('InstanceImages/' . $data->image);
            }

            $data->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "instance not found"
            ], 404);
        }
        // Delete UPLOADED FILE on PUBLIC
        // Delete UPLOADED FILE on PUBLIC
        // Delete UPLOADED FILE on PUBLIC
    }

    public function update_instance(Request $request)
    {
        if (Instance::where('id', $request->id)->exists()) {
            $data = Instance::find($request->id);
            // dd($request->name);

            $data->category_id = is_null($request->category_id) ? $data->category_id : $request->category_id;
            $data->name = is_null($request->name) ? $data->name : $request->name;
            $data->no_tlpn_pic = is_null($request->no_tlpn_pic) ? $data->no_tlpn_pic : $request->no_tlpn_pic;
            $data->address = is_null($request->address) ? $data->address : $request->address;
            $data->pic_name = is_null($request->pic_name) ? $data->pic_name : $request->pic_name;
            $file = $request->file('image');

            if (!empty($file)) {

                if (!empty($data->image)) {
                    Storage::disk('public')->delete('InstanceImages/' . $data->image);
                }

                $waktu = date('ymdhis');
                $name_file = $waktu . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs(
                    'InstanceImages',
                    $name_file,
                    'public'
                );
                $data->image = @$name_file;
            } else {
                $data->image = $data->image;
            }

            // MOVE UPLOADED FILE TO PUBLIC
            // MOVE UPLOADED FILE TO PUBLIC
            // MOVE UPLOADED FILE TO PUBLIC

            $data->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "instance not found"
            ], 404);
        }
    }
}
