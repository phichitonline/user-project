<?php

namespace App\Http\Controllers;

use App\Models\slip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        // $slip_list = slip::groupBy('slips.datetran')
        // ->selectRaw('slips.datetran', 'cds.cddescription','customers.tname','SUM(slips.income) AS income','SUM(slips.expense) AS expense','SUM(slips.income) - SUM(slips.expense) AS totals')
        // ->leftJoin('cds', 'slips.cd', '=', 'cds.cd')
        // ->leftJoin('customers', 'slips.ofid', '=', 'customers.ofid')
        // ->where([
        //         ['customers.cid',$cid]
        //     ])
        // ->get();

        $slip_list2 = DB::connection('mysql')->select('
        SELECT DATE_FORMAT(s.datetran,"%Y-%m-%d") AS s_date,DATE_FORMAT(s.datetran,"%H:%m:%s") AS s_time,SUM(s.income) AS income,SUM(s.expense) AS expense,SUM(s.income) - SUM(s.expense) AS totals
        FROM slips s
        LEFT JOIN cds c ON s.cd = c.cd
        LEFT JOIN customers m ON s.ofid = m.ofid
        WHERE m.cid = "'.$cid.'"
        GROUP BY s.datetran
        ');

        return view('slip.index', [
            'moduletitle' => "Slip",
            'slip_list' => $slip_list,
            'slip_list2' => $slip_list2,
        ]);
    }

    public function slipweblogin()
    {
        return view('slip.slipweblogin', [
            'moduletitle' => "Slip web login",
        ]);
    }

    public function slipweb(Request $request)
    {
        $cid = $request->get('cid');
        $cid_encode = strtoupper(md5($request->get('cid')));
        
        $bdate = $request->get('password');
        $dd = substr($bdate,0,2);
        $mm = substr($bdate,2,2);
        $yyyy = substr($bdate,4,4)-543;
        $birthday = $yyyy."-".$mm."-".$dd;
        $birthday = trim($birthday);

        $check_hosuser = DB::connection('mysql_hos')->select('
        SELECT COUNT(*) AS userregist,cid FROM doctor
        WHERE active = "Y" AND cid = "'.$cid.'" AND birth_date = "'.$birthday.'"
        ');
        foreach($check_hosuser as $data){
            if ($data->userregist > 0) {
                session_start();
                ob_start();
                $_SESSION["username"] = $cid_encode;
                session_write_close();
                return redirect()->route('slip');
            } else {
                return redirect()->route('slipweblogin')->with('session-alert', 'เลขบัตรประชาชนหรือวันเกิดไม่ถูกต้อง');
            }
        }

        return view('slip.slipweb', [
            'moduletitle' => "Slip web",
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
