<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view($title){
        $text = "Anda mengakses laman ";
        if($title == "marbel-edu-games"){
            $title = "Marbel Edu Games";
            $text .= $title;
        } else if ($title == "marbel-and-friends-kids-games"){
            $title = "Marbel and Friends Kids Games";
            $text .= $title;
        } else if ($title == "riri-story-books"){
            $title = "Riri Story Books";
            $text .= $title;
        } else if ($title == "kolak-kids-songs"){
            $title = "Kolak Kids Songs";
            $text .= $title;
        } else {
            $text = "Laman yang anda masukkan tidak ditemukan";
        }

        echo $text;
    }
}
