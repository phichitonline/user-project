<?php

namespace App\Http\Controllers;

use App\Models\smartuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SessionregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('error_close_app', [
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
    public function store(Request $request, smartuser $model)
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
                $_SESSION["lineid"] = $request->get('lineid');
                $_SESSION["username"] = $cid_encode;
                $_SESSION["useremail"] = $request->get('email');
                $_SESSION["tel"] = $request->get('tel');
                session_write_close();
                $model->create($request->merge(['username' => $cid_encode, 'password' => Hash::make($request->get('password'))])->all());
                return redirect()->route('main')->with('session-alert', 'คุณลงทะเบียนเจ้าหน้าที่เรียบร้อยแล้ว');
            } else {
                return redirect()->route('home')->with('session-alert', 'เลขบัตรประชาชนหรือวันเกิดไม่ถูกต้อง');
            }
        }
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
