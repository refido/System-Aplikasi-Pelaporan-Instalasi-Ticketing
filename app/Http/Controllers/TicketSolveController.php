<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class TicketSolveController extends Controller
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
        ])->get('https://nakulasadewa.com/restapi/public/api/ticket_solves');

        $data = json_decode($response, true);
        return view('teknisi/riwayat', ['data' => $data]);
    }

    public function indexmnj()
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->get('https://nakulasadewa.com/restapi/public/api/ticket_solves');

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
        ])->post('https://nakulasadewa.com/restapi/public/api/ticket_solves', [
            'client_name' => $request->client_name,
            'problem' => $request->problem,
            'solving' => $request->solving,
            'no_ticketing' => $request->no_ticketing
        ]);

        return redirect('/viewriwayat');
    }

    public function storemnj(Request $request)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->post('https://nakulasadewa.com/restapi/public/api/ticket_solves', [
            'client_name' => $request->client_name,
            'problem' => $request->problem,
            'solving' => $request->solving,
            'no_ticketing' => $request->no_ticketing
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
        ])->get('https://nakulasadewa.com/restapi/public/api/ticket_solves/' . $id);

        $data = json_decode($response, true);
        return view('teknisi/riwayat', ['data' => $data]);
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
        ])->put('https://nakulasadewa.com/restapi/public/api/ticket_solves/' . $id, [
            'client_name' => $request->client_name,
            'problem' => $request->problem,
            'solving' => $request->solving,
            'no_ticketing' => $request->no_ticketing
        ]);

        return redirect('/viewtiketteknisi');
    }

    public function updateteknisi(Request $request, $id)
    {
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => $this->tokenfix
        ])->put('https://nakulasadewa.com/restapi/public/api/ticket_solves/' . $id, [
            'client_name' => $request->client_name,
            'problem' => $request->problem,
            'solving' => $request->solving,
            'no_ticketing' => $request->no_ticketing
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
        ])->delete('https://nakulasadewa.com/restapi/public/api/ticket_solves/' . $id);

        return redirect('/viewtiketteknisi');
    }
}
