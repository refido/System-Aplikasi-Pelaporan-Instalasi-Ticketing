<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Report_Component as RComponentResource;
use App\Http\Resources\Report_Installation as RInstallationResource;
use App\Models\Report_component;
use App\Models\Report_installation;
use App\Models\Report_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Null_;

class Report_InstallationController extends BaseController
{
    public function index()
    {
        $rinstallation = Report_installation::all();
        return $this->sendResponse(RInstallationResource::collection($rinstallation), 'Tampil data berhasil!');
    }

    public function show($id)
    {
        $rinstallation = Report_installation::find($id);
        if (is_null($rinstallation)) {
            return $this->sendError('Data tidak ditemukan!');
        }
        return $this->sendResponse(new RInstallationResource($rinstallation), 'Tampil data berhasil!');
    }

    public function store(Request $request, $id = null)
    {
        if (empty($id)) {
            $input = $request->all();
            $input['status'] = 1;
            $validator = Validator::make($input, [
                'installation_id' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError($validator->errors());
            }
            $rinstallation = Report_installation::create($input);
            return $this->sendResponse(new RInstallationResource($rinstallation), 'Input data Instalasi berhasil!');
        } else {
            $input = $request->all();
            $rinstallation = Report_installation::find($id);

            $input['start_installation'] = (empty($input['start_installation'])) ? $rinstallation['start_installation'] : $input['start_installation'];

            $input['completed_installation'] = (empty($input['completed_installation'])) ? $rinstallation['completed_installation'] : $input['completed_installation'];

            $input['start_training'] = (empty($input['start_training'])) ? $rinstallation['start_training'] : $input['start_training'];

            $input['complete_training'] = (empty($input['complete_training'])) ? $rinstallation['complete_training'] : $input['complete_training'];

            $input['condition'] = (empty($input['condition'])) ? $rinstallation['condition'] : $input['condition'];

            $input['problem'] = (empty($input['problem'])) ? $rinstallation['problem'] : $input['problem'];

            $input['status'] = (empty($input['status'])) ? $rinstallation['status'] : $input['status'];

            $input['anydesk_id'] = (empty($input['anydesk_id'])) ? $rinstallation['anydesk_id'] : $input['anydesk_id'];

            $rinstallation->start_installation = $input['start_installation'];
            $rinstallation->completed_installation = $input['completed_installation'];
            $rinstallation->start_training = $input['start_training'];
            $rinstallation->complete_training = $input['complete_training'];
            $rinstallation->condition = $input['condition'];
            $rinstallation->problem = $input['problem'];
            $rinstallation->status = $input['status'];
            $rinstallation->anydesk_id = $input['anydesk_id'];
            $rinstallation->save();

            return $this->sendResponse(new RInstallationResource($rinstallation), 'Input data Instalasi berhasil!');
        }
    }

    public function destroy($id)
    {
        $rinstallation = Report_installation::find($id);
        $rinstallation->delete();

        return $this->sendResponse([], 'Hapus data berhasil!');
    }

    public function uploadVideo(Request $request, $id)
    {
        $video = $request->file('video');

        $mime = new \finfo(FILEINFO_MIME_TYPE);

        if (strstr($mime->file($video), "video/")) {
            $rinstallation = Report_installation::find($id);
            if (is_null($rinstallation)) {
                return $this->sendError('Data tidak ditemukan!');
            }
            $rinstallation->video = $video->store('ReportVideos');
            $rinstallation->save();
            return $this->sendResponse(new RInstallationResource($rinstallation), 'Input data Instalasi berhasil!');
        } else {
            return $this->sendError([], 'File bukan video', 201);
        }
    }

    public function uploadFoto(Request $request, $id)
    {
        $photos = $request->file('photos');

        $mime = new \finfo(FILEINFO_MIME_TYPE);

        if (strstr($mime->file($photos), "image/")) {
            $rinstallation = Report_installation::find($id);
            if (is_null($rinstallation)) {
                return $this->sendError('Data tidak ditemukan!');
            }
            $return = Report_photo::create([
                'report_id' => $id,
                'photos' => $photos->store('ReportPhotos'),
            ]);
            return $this->sendResponse($return, 'Input data Instalasi berhasil!');
        } else {
            return $this->sendError([], 'File bukan photo', 201);
        }
    }

    public function componentCheckbox(Request $request, $id)
    {
        $input = $request->all();
        $rinstallation = Report_installation::find($id);
        if (is_null($rinstallation)) {
            return $this->sendError('Data tidak ditemukan!');
        }

        $set = array();

        if (isset($input['ticketing'])) {
            array_push($set, "1");
        } else {
            Report_component::where('report_id', $id)->where('component_id', '1')->delete();
        }
        if (isset($input['caller'])) {
            array_push($set, "2");
        } else {
            Report_component::where('report_id', $id)->where('component_id', '2')->delete();
        }
        if (isset($input['digital_signame'])) {
            array_push($set, "3");
        } else {
            Report_component::where('report_id', $id)->where('component_id', '3')->delete();
        }
        if (isset($input['hardware'])) {
            array_push($set, "4");
        } else {
            Report_component::where('report_id', $id)->where('component_id', '4')->delete();
        }
        if (isset($input['jaringan'])) {
            array_push($set, "5");
        } else {
            Report_component::where('report_id', $id)->where('component_id', '5')->delete();
        }

        foreach ($set as $data) {

            $cek = Report_component::where('report_id', $id)->where('component_id', $data)->count();

            if ($cek < 1) {
                Report_component::create([
                    'report_id' => $id,
                    'component_id' => $data,
                ]);
            }
        }
        return $this->sendResponse([], 'Berhasil menambahkan komponen!');
    }

    public function showComp($id, $comp_id)
    {
        $rcomp = Report_component::where('report_id', $id)->where('component_id', $comp_id)->get();
        if ($rcomp->count() == 0) {
            return $this->sendError('Data tidak ditemukan!');
        }
        return $this->sendResponse($rcomp, 'Data component ada!');
    }
}
