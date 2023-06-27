<?php

namespace App\Http\Controllers;

use App\Models\slip;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class SlipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        session_start();
        $cid = $_SESSION["username"];

        $slip_list = slip::select('slips.*', 'cds.cddescription','customers.tname')
        ->leftJoin('cds', 'slips.cd', '=', 'cds.cd')
        ->leftJoin('customers', 'slips.ofid', '=', 'customers.ofid')
        ->where([
                ['customers.cid',$cid]
            ])
        ->get();

        return view('slip.index', [
            'moduletitle' => "Slip",
            'slip_list' => $slip_list,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
