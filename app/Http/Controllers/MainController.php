<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        session_start();
        if (isset($_SESSION["username"])) {

            $username = $_SESSION["username"];

            $check_opduser = DB::connection('mysql_hos')->select('
            SELECT COUNT(*) AS user_active,d.cid,d.code AS doctor_code,d.name AS doctor_name,d.pname,d.fname,d.lname,dp.name AS position_name,pt.provider_type_name
            FROM doctor d
            LEFT JOIN doctor_position dp ON d.position_id = dp.id
            LEFT JOIN provider_type pt ON d.provider_type_code = pt.provider_type_code
            WHERE d.active = "Y" AND UPPER(MD5(d.cid)) = "'.$username.'"
            ');
            foreach($check_opduser as $data){
                if ($data->user_active > 0) {
                    $view_page = "main";
                    $entryposition = $data->position_name;
                    $groupname = $data->provider_type_name;
                    $pname = $data->pname.$data->fname."  ".$data->lname;
                } else {
                    $view_page = "error_close_app";
                    $entryposition = "";
                    $groupname = "";
                    $pname = "";
                }
            }
            $lineid = $_SESSION["lineid"];
            $tel = $_SESSION["tel"];
            $email = $_SESSION["useremail"];
        } else {
            $view_page = "error_close_app";
            $username = "";
            $lineid = "";
            $pname = "";
            $tel = "";
            $email = "";
            $entryposition = "";
            $groupname = "";
        }

        return view($view_page, [
            'moduletitle' => "Main",
            'username' => $username,
            'lineid' => $lineid,
            'pname' => $pname,
            'tel' => $tel,
            'email' => $email,
            'entryposition' => $entryposition,
            'groupname' => $groupname,
            // 'ssalert' => session('session-alert'),
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
