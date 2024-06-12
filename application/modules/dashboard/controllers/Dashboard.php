<?php
defined("BASEPATH") OR exit("No direct script access allowed");
class Dashboard extends MX_Controller
{
    function __construct() {
        
    }
    public function index()
    {
        $data = array(
            "namamodule" => "dashboard",
            "namafileview" => "V_dashboard",
            "nama" => "Dashboard"
        );
        echo Modules::run("template/tampilCore", $data);
    }
}
