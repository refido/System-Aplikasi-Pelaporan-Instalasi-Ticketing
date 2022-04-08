<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\Ticketing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketings = DB::table('ticketings')
            ->select('ticketings.*', 'components.name as name_components', 'components.code', 'ticket_solves.client_name', 'ticket_solves.problem', 'ticket_solves.solving')
            ->leftJoin('components', 'components.id', '=', 'ticketings.component_id')
            ->leftJoin('ticket_solves', 'ticket_solves.no_ticketing', '=', 'ticketings.no_ticketing')
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
        $ticketing = new Ticketing;
        // $ticketing->id = $request->id;
        $ticketing->instance_name = $request->instance_name;
        $ticketing->address = $request->address;
        $ticketing->date_created = $request->date_created;
        $ticketing->date_complete = $request->date_complete;
        $ticketing->no_ticketing = $request->no_ticketing;
        $ticketing->component_id = $request->component_id;
        $ticketing->problem = $request->problem;
        // $ticketing->solving = $request->solving;
        $ticketing->status = $request->status;
        $ticketing->save();

        return response()->json([
            "message" => "Ticketing record created"
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
        if (Ticketing::where('id', $id)->exists()) {
            $ticketing = DB::table('ticketings')
                ->select('ticketings.*', 'components.name as name_components', 'components.code', 'ticket_solves.client_name', 'ticket_solves.problem', 'ticket_solves.solving')
                ->leftJoin('components', 'components.id', '=', 'ticketings.component_id')
                ->leftJoin('ticket_solves', 'ticket_solves.no_ticketing', '=', 'ticketings.no_ticketing')
                ->where('ticketings.id', $id)->get()->toJson(JSON_PRETTY_PRINT);
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
        if (Ticketing::where('id', $id)->exists()) {
            $ticketing = Ticketing::find($id);
            $ticketing->id = is_null($request->id) ? $ticketing->id : $request->id;
            $ticketing->instance_name = is_null($request->instance_name) ? $ticketing->instance_name : $request->instance_name;
            $ticketing->address = is_null($request->address) ? $ticketing->address : $request->address;
            $ticketing->date_created = is_null($request->date_created) ? $ticketing->date_created : $request->date_created;
            $ticketing->date_complete = is_null($request->date_complete) ? $ticketing->date_complete : $request->date_complete;
            $ticketing->no_ticketing = is_null($request->no_ticketing) ? $ticketing->no_ticketing : $request->no_ticketing;
            $ticketing->component_id = is_null($request->component_id) ? $ticketing->component_id : $request->component_id;
            $ticketing->problem = is_null($request->problem) ? $ticketing->problem : $request->problem;
            // $ticketing->solving = is_null($request->solving) ? $ticketing->solving : $request->solving;
            $ticketing->status = is_null($request->status) ? $ticketing->status : $request->status;
            $ticketing->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Ticketing not found"
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
        if (Ticketing::where('id', $id)->exists()) {
            $ticketing = Ticketing::find($id);
            $ticketing->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Ticketing not found"
            ], 404);
        }
    }
}
