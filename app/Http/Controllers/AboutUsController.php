<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function view(){
        echo "Company Name : Educastudio <br>
                Email : cs@educastudio.com <br>
                Alamat : Jalan Abdul Jalil No 2 Batu, Jawa Timur"; 
    }
}
