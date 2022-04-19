<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class InstanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // AMBIL TOKEN YANG DIDAPAT SETELAH LOGIN (PAKE IMPLODE)
    protected string $tokenku = 'SOOMY6qpBuK4XVtW5eTevcpo06rY1yREnozRgEp1';
    protected string $tokenfix = 'Bearer ' . 'HECCaVzAyws9BxGT8z0Fd2eyhENLf0BcZ175vZz1';

    public function index()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        return view('admin/datainstalasi', ['data' => $data]);
    }

    public function indexteknisi()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        return view('teknisi/instalasi', ['data' => $data]);
    }

    public function indexlapinteknisi()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        return view('teknisi/laporaninstalasi', ['data' => $data]);
    }

    public function indexlapinprog()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        return view('programmer/datapenginstalan', ['data' => $data]);
    }

    public function indexlapinmnj()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        return view('manager/datapenginstalan', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createlapin()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->post('http://206.189.87.220/api/instances', [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->image
        ]);

        return redirect('/viewdataladmin');
    }

    public function storeteknisi(Request $request)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->post('http://206.189.87.220/api/instances', [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->image
        ]);

        return redirect('/viewdatalteknisi');
    }

    public function storelapinteknisi(Request $request)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->post('http://206.189.87.220/api/instances', [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->image
        ]);

        return redirect('/viewlapinteknisi');
    }

    public function storelapinprog(Request $request)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->post('http://206.189.87.220/api/instances', [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->image
        ]);

        return redirect('/viewlapinprogrammer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        
        return view('admin/detaildataladmin', ['data' => $data]);
    }

    public function showteknisi($id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        
        return view('teknisi/detaildataltns', ['data' => $data]);
    }

    public function showlapinteknisi($id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        
        return view('teknisi/detaillapin', ['data' => $data]);
    }

    public function showlapinprog($id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        
        return view('programmer/detaillapin', ['data' => $data]);
    }
    public function showlapinmnj($id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances');

        $data = json_decode($response, true);
        
        return view('manager/detaillapin', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('http://206.189.87.220/api/instances/' . $id);

        $data = json_decode($response, true);

        return view('admin/editdatal', ['data' => $data]);
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
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->put('http://206.189.87.220/api/instances/' . $id, [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->image
        ]);

        return redirect('/viewdataladmin');
    }

    public function updateteknisi(Request $request, $id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->put('http://206.189.87.220/api/instances/' . $id, [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->image
        ]);

        return redirect('/viewdatalteknisi');
    }

    public function updatelapinteknisi(Request $request, $id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->put('http://206.189.87.220/api/instances/' . $id, [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->image
        ]);

        return redirect('/viewlapinteknisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->delete('http://206.189.87.220/api/report_instalationss/' . $id);

        return redirect('/viewdataladmin');
    }

    public function destroyteknisi($id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->delete('http://206.189.87.220/api/report_instalationss/' . $id);

        return redirect('/viewdatalteknisi');
    }
}
?>