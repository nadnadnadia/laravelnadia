<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

    use Illuminate\Http\Request;  
    use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = ['nama' => "Nadia", 'foto' =>'E020322106.jpg'];
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa.index', compact ('data', 'mahasiswa')); 
    }

    public function show($id)
    {

    }
}

