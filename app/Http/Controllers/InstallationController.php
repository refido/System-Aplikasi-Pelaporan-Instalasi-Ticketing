<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class InstallationController extends Controller
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
        ])->get('https://nakulasadewa.com/restapi/public/api/installations');

        $data = json_decode($response, true);
        return view('admin/datainstalasi', ['data' => $data]);
    }

    public function indexteknisi()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/installations');

        $data = json_decode($response, true);
        return view('teknisi/instalasi', ['data' => $data]);
    }

    public function indexlapinteknisi()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/installations');

        $data = json_decode($response, true);
        return view('teknisi/laporaninstalasi', ['data' => $data]);
    }

    public function indexlapinprog()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/installations');

        $data = json_decode($response, true);
        return view('programmer/datapenginstalan', ['data' => $data]);
    }

    public function indexlapinmnj()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/installations');

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
        ])->post('https://nakulasadewa.com/restapi/public/api/installations', [
            'code' => $request->code,
            'number_of_technicians' => $request->number_of_technicians,
            'category_instansi' => $request->category_instansi,
            'technician_id' => $request->technician_id,
            'date_instalation' => $request->date_instalation,
            'pic_name' => $request->pic_name,
            'pic_phone' => $request->pic_phone,
            'status' => $request->status
        ]);

        return redirect('/viewdataladmin');
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
        ])->get('https://nakulasadewa.com/restapi/public/api/installations/' . $id);

        $data = json_decode($response, true);
        
        return view('admin/detaildatal', ['data' => $data]);
    }

    public function showteknisi()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/installations/');

        $data = json_decode($response, true);
        
        return view('teknisi/detaildataltns', ['data' => $data]);
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
        ])->get('https://nakulasadewa.com/restapi/public/api/installations/' . $id);

        $data = json_decode($response, true);

        return view('admin.editdatal', ['data' => $data]);
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
        ])->put('https://nakulasadewa.com/restapi/public/api/installations/' . $id, [
            'code' => $request->code,
            'number_of_technicians' => $request->number_of_technicians,
            'category_instansi' => $request->category_instansi,
            'technician_id' => $request->technician_id,
            'date_instalation' => $request->date_instalation,
            'pic_name' => $request->pic_name,
            'pic_phone' => $request->pic_phone,
            'status' => $request->status
        ]);

        return redirect('/viewdataladmin');
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
        ])->delete('https://nakulasadewa.com/restapi/public/api/installations/' . $id);

        return redirect('/viewdataladmin');
    }
}
