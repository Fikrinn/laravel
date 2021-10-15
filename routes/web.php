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

Route::get('/', function () {
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

Route::get('mino/{mini?}', function ($hal = 2) {
    return "Halaman <b>$hal</b>";
});

Route::get('pesanan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null,$minuman = null,$cemilan = null) {
    if ($makanan == null && $minuman == null && $cemilan == null) {
        $aceng = "<center><b><br><br><h2>Anda Tidak Pesan, Silahkan Pulang</h2></b></center>";
    }
            if ($makanan != null ) {
            $aceng = "<center><br><br><h2>Pesanan <br>"
            . "Makanan : $makanan </h2></center><br>";
        }
        if ($makanan != null && $minuman != null ) {
            $aceng = "<center><br><br><h2><b>Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman </b></h2></center><br>";
        }

        if ($makanan != null && $minuman != null && $cemilan != null) {
            $aceng = "<center><br><br><h2><b>Pesanan <br>"
            . "Makanan : $makanan <br>"
            . "Minuman : $minuman <br>"
            . "Cemilan : $cemilan </b></h2></center>";
}

    return "$aceng";
});


route::get('profile', function () {
    $nama = "Fikri";
    return view('profile', compact('nama'));
});

route::get('biodata', function () {
    $nama = "Fikri";
    $umur = "17";
    $sekolah ="Smk Assalam";
    $alamat = "Sukamenak";

    return view('biodata', compact('nama', 'umur', 'sekolah', 'alamat'));
});

Route::get('blog', function () {
    $pilih = [
        ['id' => '1', 'name' => 'Fikri Nurfaizi',
            'username' => 'Fikri_Nurfaizi',
            'email' => 'fikri@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Fisika',
                'mapel3' => 'Kimia',

            ],
        ],
        ['id' => '2', 'name' => 'Altaf',
            'username' => 'Altaf-dot',
            'email' => 'altaf@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Indonesia',
                'mapel2' => 'Fisika',
                'mapel3' => 'Matematika',

            ],
        ],
        ['id' => '3', 'name' => 'Ikhsan',
            'username' => 'ikhsan-dot',
            'email' => 'ikhsan@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Inggris',
                'mapel3' => 'Kimia',

            ],
        ],

        ['id' => '4', 'name' => 'Firman',
            'username' => 'firman-dot',
            'email' => 'firman@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'inggris',
                'mapel2' => 'Fisika',
                'mapel3' => 'olahraga',

            ],
        ],

        ['id' => '5', 'name' => 'Genta',
            'username' => 'genta-dot',
            'email' => 'genta@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Seni Budaya',
                'mapel3' => 'sunda',

            ],
        ],
    ];
    return view('blog', compact('pilih'));
});
