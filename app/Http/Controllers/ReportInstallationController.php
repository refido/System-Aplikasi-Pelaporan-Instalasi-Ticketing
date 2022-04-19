<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class ReportInstallationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // AMBIL TOKEN YANG DIDAPAT SETELAH LOGIN (PAKE IMPLODE)
    protected string $tokenku = 'HECCaVzAyws9BxGT8z0Fd2eyhENLf0BcZ175vZz1';
    protected string $tokenfix = 'Bearer ' . 'HECCaVzAyws9BxGT8z0Fd2eyhENLf0BcZ175vZz1';

    public function index()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/report_installations');

        $data = json_decode($response, true);
        return view('teknisi/laporaninstalasi', ['data' => $data]);
    }

    public function indexlapinprog()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/report_installations');

        $data = json_decode($response, true);
        return view('programmer/datapenginstalan', ['data' => $data]);
    }

    public function indexmnj()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/report_installations');

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
        ])->post('https://nakulasadewa.com/restapi/public/api/report_installations', [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->status
        ]);

        return redirect('/viewlapinteknisi');
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
        ])->get('https://nakulasadewa.com/restapi/public/api/report_installations/' . $id);

        $data = json_decode($response, true);
        return view('teknisi/detaillapin', ['data' => $data]);
    }

    public function showprog()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/report_installations/' . $id);

        $data = json_decode($response, true);
        return view('programmer/detaillapin', ['data' => $data]);
    }

    public function showmnj()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/report_installations/' . $id);

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
        //
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
        ])->put('https://nakulasadewa.com/restapi/public/api/report_installations/' . $id, [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->status
        ]);

        return redirect('/viewlapinteknisi');
    }

    public function updateteknisi(Request $request, $id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->put('https://nakulasadewa.com/restapi/public/api/report_installations/' . $id, [
            'installation_id' => $request->installation_id,
            'start_installation' => $request->start_installation,
            'start_training' => $request->start_training,
            'complete_training' => $request->complete_training,
            'completed_installation' => $request->completed_installation,
            'condition' => $request->condition,
            'problem' => $request->problem,
            'video' => $request->video,
            'anydesk_id' => $request->anydesk_id,
            'status' => $request->status
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
        ])->delete('https://nakulasadewa.com/restapi/public/api/report_installations/' . $id);

        return redirect('/viewlapinteknisi');
    }
}
?>