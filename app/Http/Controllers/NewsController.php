<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        echo "Anda mengakses laman utama dari News ";
    }

    public function view($param){
        $text = "Anda mengakses berita dengan judul ";
        if($param == "educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19"){
            $param = '"Educa Studio Berbagi untuk Warga Sekitar terdampak Covid-19"';
            $text .= $param;
        } else {
            $text = "Berita dengan judul tersebut tidak ditemukan";
        }

        echo $text;
    }
}
