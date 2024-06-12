<?php
defined("BASEPATH") OR exit("No direct script access allowed");
class Penghuni_ruang extends MX_Controller{
    public function __construct(){

    }
    public function index(){
        $data = array(
            "namamodule" => "penghuni_ruang",
            "namafileview" => "V_penghuni", 
            "nama" => "Penghuni Ruang"
        );
        echo Modules::run("template/tampilCore", $data);
    }
}