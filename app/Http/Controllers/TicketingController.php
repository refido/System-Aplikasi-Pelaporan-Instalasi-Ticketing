<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class TicketingController extends Controller
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
        ])->get('https://nakulasadewa.com/restapi/public/api/ticketings');

        $data = json_decode($response, true);
        return view('admin/dataticketing', ['data' => $data]);
    }

    public function indexteknisi()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/ticketings');

        $data = json_decode($response, true);
        return view('teknisi/ticketting', ['data' => $data]);
    }

    public function indexmnj()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/ticketings');

        $data = json_decode($response, true);
        return view('manager/lapticketing', ['data' => $data]);
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
        ])->post('https://nakulasadewa.com/restapi/public/api/ticketings', [
            'instance_name' => $request->instance_name,
            'address' => $request->address,
            'date_created' => $request->date_created,
            'date_complete' => $request->date_complete,
            'no_ticketing' => $request->no_ticketing,
            'component_id' => $request->component_id,
            'problem' => $request->problem,
            'status' => $request->status,
            'name_components' => $request->name_components
        ]);

        return redirect('/viewdatingadmin');
    }

    public function storeteknisi(Request $request)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->post('https://nakulasadewa.com/restapi/public/api/ticketings', [
            'instance_name' => $request->instance_name,
            'address' => $request->address,
            'date_created' => $request->date_created,
            'date_complete' => $request->date_complete,
            'no_ticketing' => $request->no_ticketing,
            'component_id' => $request->component_id,
            'problem' => $request->problem,
            'status' => $request->status,
            'name_components' => $request->name_components
        ]);

        return redirect('/viewtiketteknisi');
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
        ])->get('https://nakulasadewa.com/restapi/public/api/ticketings/' . $id);

        $data = json_decode($response, true);
        return view('admin/detailticketingadm', ['data' => $data]);
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
        ])->get('https://nakulasadewa.com/restapi/public/api/ticketings/' . $id);

        $data = json_decode($response, true);

        return view('admin/editdating', ['data' => $data]);
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
        ])->put('https://nakulasadewa.com/restapi/public/api/ticketings/' . $id, [
            'instance_name' => $request->instance_name,
            'address' => $request->address,
            'date_created' => $request->date_created,
            'date_complete' => $request->date_complete,
            'no_ticketing' => $request->no_ticketing,
            'component_id' => $request->component_id,
            'problem' => $request->problem,
            'status' => $request->status,
            'name_components' => $request->name_components
        ]);

        return redirect('/viewdatingadmin');
    }

    public function updateteknisi(Request $request, $id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->put('https://nakulasadewa.com/restapi/public/api/ticketings/' . $id, [
            'instance_name' => $request->instance_name,
            'address' => $request->address,
            'date_created' => $request->date_created,
            'date_complete' => $request->date_complete,
            'no_ticketing' => $request->no_ticketing,
            'component_id' => $request->component_id,
            'problem' => $request->problem,
            'status' => $request->status,
            'name_components' => $request->name_components
        ]);

        return redirect('/viewtiketteknisi');
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
        ])->delete('https://nakulasadewa.com/restapi/public/api/ticketings/' . $id);

        return redirect('/viewdatingadmin');
    }
}
