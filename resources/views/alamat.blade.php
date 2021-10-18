<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alamat</title>
</head>
<body>
    <center><br><br><br><br><br><br><b>Rumah Saya Ber alamatkan Di<br>Rancamanyar
    </center>
</body>
</html>





Route::get('lapar/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null,$minuman = null,$cemilan = null) {
    if ($makanan == null && $minuman == null && $cemilan == null) {
        $sa = "Anda Tidak Pesan, Silahkan Pulang";
    }
            if ($makanan != null ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>";
        }
        if ($makanan != null && $minuman != null ) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>";
        }

        if ($makanan != null && $minuman != null && $cemilan != null) {
            $sa = "Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>"
            . "Cemilan : $cemilan";
}

    return "$sa";
});






<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/mobil', function () {
    return view('welcome');
});

Route::get('/motor', function () {
    return '<h1>Halo</h1>' .
    'Selamat datanag di webapp saya<br>'
    .'Laravel, emang keren';
});

Route::get('/alamat', function () {
    return view('alamat');
});

Route::get('/hobi', function () {
    return view('hobi');
});

Route::get('/nama', function () {
    return view('nama');
});

Route::get('/teman', function () {
    return view('teman');
});

Route::get('/tanggal', function () {
    return view('tanggal');
});

Route::get('/index', function () {
    return view('index');
});

route::get('page/{page?}', function ($hal = 2) {
    return "Halaman <b>$hal</b>";
});

route::get('mino/{mini?}', function ($hal = 2) {
    return "Halaman <b>$hal</b>";
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if($makanan && $minuman && $cemilan != null){
        return "Anda Memesan Makanan = $makanan <br>
                Anda Memesan Minuman = $minuman <br>
                Anda Memesan Cemilan = $cemilan";
    }else if($makanan && $minuman != null){
        return "Anda Memesan Makanan = $makanan <br>
                Anda Memesan Minuman = $minuman";
    }else if($makanan || $minuman != null){
        return $makanan != null ? "<center><h2><b><br><br>Anda Memesan Makanan : $makanan" : "Anda memesan minuman : $minuman</b></h2></center>";
    }else {
        return "<center><br><br><b><h2>Anda Tidak Memesan Silahkan Pulang</h2></b></center>";
    }

});
