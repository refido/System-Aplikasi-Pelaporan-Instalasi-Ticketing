<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
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
        ])->get('https://nakulasadewa.com/restapi/public/api/admins');

        $data = json_decode($response, true);
        return view('administrator/administrator', ['data' => $data]);
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
        ])->post('https://nakulasadewa.com/restapi/public/api/admins', [
            'name' => $request->name,
            'id_admin' => $request->id_admin,
            'role' => $request->role,
            'no_tlpn' => $request->no_tlpn,
            'status' => $request->status
        ]);

        return redirect('/viewadmtr');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        ])->get('https://nakulasadewa.com/restapi/public/api/admins/' . $id);

        $data = json_decode($response, true);

        return view('administrator.editadministrator', ['data' => $data]);
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
        ])->put('https://nakulasadewa.com/restapi/public/api/admins/' . $id, [
            'name' => $request->name,
            'id_admin' => $request->id_admin,
            'role' => $request->role,
            'no_tlpn' => $request->no_tlpn,
            'status' => $request->status
        ]);

        return redirect('/viewadmtr');
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
        ])->delete('https://nakulasadewa.com/restapi/public/api/admins/' . $id);

        return redirect('/viewadmtr');
    }
}
