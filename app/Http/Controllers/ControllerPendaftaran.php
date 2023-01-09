<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class ControllerPendaftaran extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $pendaftaran = Pendaftaran::create($data);
        
        return response()->json($pendaftaran);
    }

    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return response()->json($pendaftaran);
    }

    public function detail($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return response()->json($pendaftaran);
    }

    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::whereId($id)->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'tanggal_lahir'     => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'agama' => $request->input('agama'),
            'no_tlp' => $request->input('no_tlp'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
            'fakultas_satu' => $request->input('fakultas_satu'),
            'program_studisatu' => $request->input('program_studisatu'),
            'fakultas_dua' => $request->input('fakultas_dua'),
            'program_studidua' => $request->input('program_studidua'),
            'email' => $request->input('email'),
            'nama_ayah' => $request->input('nama_ayah'),
            'nama_ibu' => $request->input('nama_ibu'),
            'alamat_orangtua' => $request->input('alamat_orangtua'),
            'no_tlpnortu' => $request->input('no_tlpnortu'),
            'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
            'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
        ]);

        if($pendaftaran){
            return response()->json([
                'success'  => true,
                'message'  => 'Data berhasil diupdate',
                'data'     => $pendaftaran
            ],201);
        }else{
            return response()->json([
                'success'  => false,
                'message'  => 'Data Gagal diupdate',
            ],400);
        }
    }

    public function delete($id)
    {
        $pendaftaran = Pendaftaran::whereId($id)->first();
        $pendaftaran->delete();

        if($pendaftaran)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil dihapus'
            ],200);
        }
    }
}