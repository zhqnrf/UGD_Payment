<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Models\Chairmain;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ChairmainController extends Controller
{
    //

    public function index()
    {
        $chairmains = Chairmain::all();
        return view('admin.master.chairmain', ['chairmains' => $chairmains]);
    }


    public function store(Request $request)
    {

        Chairmain::truncate();
        $data = $this->validate($request, [
            'name' => 'required',
            'nip' => 'required',
            'rank' => 'required'
        ]);
        try {
            //code...
            Chairmain::create($data);
            Alert::success("Sukses", "Berhasil Menambahkan Penangung jawab");
            return redirect('chairmain');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }


    public function detail($id)
    {

        $chairmain = Chairmain::find($id);

        if (!isset($chairmain)) {

            throw new WebException("Ops,Data penangung jawab tidak ditemukan");
        }
        return view('admin.edit.e-chairmain', ['chairmain' => $chairmain]);
    }


    public function update(Request $request, $id)
    {

        $data = $this->validate($request, [
            'name' => 'required',
            'nip' => 'required',
            'rank' => 'required'
        ]);

        $chairmain = Chairmain::find($id);
        if (!isset($chairmain)) {
            throw new WebException('Ops , Penanggung Jawab tidak ditemukan');
        }
        try {
            //code...
            $chairmain->update($data);
            Alert::success("Sukses", "Berhasil Memperbarui Penanggung Jawab");
            return redirect('chairmain');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function delete(Request $request)
    {
        $data = $this->validate($request, [
            'id' => 'required'
        ]);
        $chairmain =  Chairmain::find($data['id']);
        if(!isset($chairmain)){
            throw new WebException("Ops, Data penanggung jawab tidak ditemukan");
        }   
        try {
            //code...
            $chairmain->delete();
            Alert::success("Sukses", "Berhasil Menghapus Penanggung Jawab");
            return redirect('chairmain');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

}
