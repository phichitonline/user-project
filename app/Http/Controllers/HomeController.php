<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (isset($_GET["userId"])) {

            $userid = $_GET["userId"];
            $useremail = $_GET["decodedIDToken2"];

            $check_register = DB::connection('mysql')->select('
            SELECT COUNT(*) AS countregist,username,tel,email FROM smartusers WHERE lineid = "'.$userid.'"
            ');

            foreach($check_register as $data){
                if ($data->countregist > 0) {
                    $view_page = "home";
                    $userid = $_GET["userId"];
                    $useremail = $data->email;
                    session_start();
                    ob_start();
                    $_SESSION["lineid"] = $_GET["userId"];
                    $_SESSION["useremail"] = $data->email;
                    $_SESSION["username"] = $data->username;
                    $_SESSION["tel"] = $data->tel;
                    session_write_close();
                } else {
                    $view_page = "register";
                    $userid = $_GET["userId"];
                    $useremail = $_GET["decodedIDToken2"];
                }
            }

        } else {
            $view_page = "error_close_app";
            $userid = "";
            $useremail = "";
        }

        return view($view_page, [
            'moduletitle' => "Home",
            'userid' => $userid,
            'useremail' => $useremail,
            'ssalert' => session('regist-alert'),
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
