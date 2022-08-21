<?php

namespace App\Http\Controllers;

use App\Models\penilaian;
use App\Models\kecamatan;
use App\Models\subkriteria;
use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class MapController extends Controller
{
    public function index()
    {
        $data['kecamatan'] = kecamatan::all();
        return view('map.index', $data);
    }
}
