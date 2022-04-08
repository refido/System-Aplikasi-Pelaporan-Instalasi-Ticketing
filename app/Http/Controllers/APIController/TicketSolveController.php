<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TicketSolve;
use Illuminate\Support\Facades\DB;

class TicketSolveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketings = DB::table('ticket_solves')
            ->select('ticket_solves.*', 'ticketings.*')
            ->leftJoin('ticketings', 'ticketings.no_ticketing', '=', 'ticket_solves.no_ticketing')
            ->get()
            ->toJson(JSON_PRETTY_PRINT);
        return response($ticketings, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticketing = new TicketSolve;

        $ticketing->client_name = $request->client_name;
        $ticketing->problem = $request->problem;
        $ticketing->solving = $request->solving;
        $ticketing->no_ticketing = $request->no_ticketing;

        $ticketing->save();

        return response()->json([
            "message" => "Ticketing solve record created"
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
        if (TicketSolve::where('id', $id)->exists()) {
            $ticketing = DB::table('ticket_solves')
                ->select('ticket_solves.*', 'ticketings.*')
                ->leftJoin('ticketings', 'ticketings.no_ticketing', '=', 'ticket_solves.no_ticketing')
                ->where('ticket_solves.id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($ticketing, 200);
        } else {
            return response()->json([
                "message" => "Ticketing not found"
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
        if (TicketSolve::where('id', $id)->exists()) {
            $ticketing = TicketSolve::find($id);

            $ticketing->client_name = is_null($request->client_name) ? $ticketing->client_name : $request->client_name;
            $ticketing->problem = is_null($request->problem) ? $ticketing->problem : $request->problem;
            $ticketing->solving = is_null($request->solving) ? $ticketing->solving : $request->solving;
            $ticketing->no_ticketing = is_null($request->no_ticketing) ? $ticketing->no_ticketing : $request->no_ticketing;

            $ticketing->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Ticketing solve not found"
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
        if (TicketSolve::where('id', $id)->exists()) {
            $ticketing = TicketSolve::find($id);
            $ticketing->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Ticketing solve not found"
            ], 404);
        }
    }
}
