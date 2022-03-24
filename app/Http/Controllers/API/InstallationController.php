<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\Installation as InstallationResource;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Installation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstallationController extends BaseController
{
    public function index()
    {
        $installations = Installation::all();
        return $this->sendResponse(InstallationResource::collection($installations), 'Tampil data berhasil!');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['code'] = strtoupper(substr(md5(time()), 0, 5));
        $input['status'] = 1;
        $validator = Validator::make($input, [
            'number_of_technicians' => 'required',
            'category_instansi' => 'required',
            'technician_id' => 'required',
            'date_instalation' => 'required|date',
            'pic_name' => 'required',
            'pic_phone' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }
        $installation = Installation::create($input);
        return $this->sendResponse(new InstallationResource($installation), 'Input data Instalasi berhasil!');
    }

    public function show($id)
    {
        $installation = Installation::find($id);
        if (is_null($installation)) {
            return $this->sendError('Data instalasi tidak ditemukan!');
        }
        return $this->sendResponse(new InstallationResource($installation), 'Data Instalasi ada!');
    }

    public function update(Request $request, $id)
    {
        $installation = Installation::find($id);
        $input = $request->all();
        $validator = Validator::make($input, [
            'number_of_technicians' => 'required',
            'category_instansi' => 'required',
            'technician_id' => 'required',
            'date_instalation' => 'required|date',
            'status' => 'required',
            'pic_name' => 'required',
            'pic_phone' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $installation->number_of_technicians = $input['number_of_technicians'];
        $installation->category_instansi = $input['category_instansi'];
        $installation->technician_id = $input['technician_id'];
        $installation->date_instalation = $input['date_instalation'];
        $installation->pic_name = $input['pic_name'];
        $installation->pic_phone = $input['pic_phone'];
        $installation->status = $input['status'];
        $installation->save();

        return $this->sendResponse(new InstallationResource($installation), 'Update Data Instalasi berhasil!');
    }

    public function destroy($id)
    {
        $installation = Installation::find($id);
        $installation->delete();
        return $this->sendResponse([], 'Hapus Data Instalasi berhasil!');
    }
}
