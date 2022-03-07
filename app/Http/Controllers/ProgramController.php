<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function view($title){
        $text = "Anda mengunjungi laman ";
        if($title == "karir"){
            $title = "Karir";
            $text .= $title;
        } else if ($title == "magang"){
            $title = "Magang";
            $text .= $title;
        } else if ($title == "kunjungan-industri"){
            $title = "kunjungan Industri";
            $text .= $title;
        } else {
            echo "Laman yang anda akses tidak ditemukan";
        }

        echo $text;
    }
}
