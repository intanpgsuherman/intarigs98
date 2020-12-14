<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\Mahasiswa;
// use App\Models\Organization;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // 

    public function MyInformation()
    {
        return view('MyInformation');
    }

    public function index()
    {
        return view('dashboard');
    }
    
    public function detail()
    {
        return view('detail');
    }

    public function list()
    {
        $mahasiswa = Mahasiswa::all();
    // dd($mahasiswa);
        return view('list', compact('mahasiswa'));
    }
    
  //menampilkan hasil tinker  
    // public function Dosen()
    // {
    //     $dosen = dosen::all();
    // dd($dosen);
    //     return view('dosen');
    // }

    // public function index()
    // {
    //     return view('detail');
    // }

    // public function detail()
    // {
    //     return view('dashboard');
    // }


    //menampilkan hasil tinker 
    // public function list()
    // {
    //     $mahasiswa = Mahasiswa::all();
    //     dd($mahasiswa);
    //     return view('list');
    // }


    //Menampilkan data dosen dengan tabel nya
    public function Dosen()
    {
        $dosen = dosen::all();
        //dd('$dosen');
        return view('dosen', compact('dosen'));
    }
    // public function organization()
    // {
    //     $organization = Organization::all();
    //      dd($organization);
    // }
}
