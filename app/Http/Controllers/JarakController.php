<?php

namespace App\Http\Controllers;

use App\Models\jarak;
use App\Models\kecamatan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JarakController extends Controller
{
    public function index()
    {
        $data['title'] = 'jarak';
        $dtJarak = jarak::all();
        return view('jarak.index', compact('dtJarak'));
    }

    public function create()
    {
        $data['title'] = 'jarak';
        $data['kecamatan'] = kecamatan::all();
        $data['jarak'] = jarak::all();
        return view('jarak.create',$data);
    }

    public function store(Request $request)
    {
        $data=$request ->validate([
            'id_kecamatan_a' => 'required',
            'id_kecamatan_b' => 'required',
            'jarak' => 'required',
        ]);

        jarak::create($data);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }


    public function edit($id)
    {
        $data['id'] = $id;     
        $data['jarak'] = jarak::all();   
        $data['kecamatan'] = kecamatan::all();
        $data['data'] = jarak::where('id', $id)->first();
        return view('jarak.edit', $data);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'id_kecamatan_a' => 'required',
            'id_kecamatan_b' => 'required',
            'jarak' => 'required',
        ]);
        jarak::where('id', $request->id)->update($validateData);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function destroy(Request $request)
    {
        jarak::findOrFail($request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function DataTable()
    {
        $table = new jarak;
        return DataTables::of($table->AllData())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn_edit = '<button type="button" class="btn btn-sm btn-info" id="edit" data-id="' . $row->id . '"><i class="fas fa-edit"></i></button>';
                $btn_hapus = '<button type="button" class="btn btn-sm btn-danger" id="hapusData" data-id="' . $row->id . '" data-Text="' . $row->id_kecamatan_a . '" ><i class="fas fa-trash"></i></button>';

                $btn = '<div class="btn-group" role="group" aria-label="LihatData">' .
                    $btn_edit .
                    $btn_hapus .
                    '</div>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
