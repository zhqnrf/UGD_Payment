<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Models\Maintain;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MaintainController extends Controller
{
    //


    public function index()
    {
        $maintains = Maintain::all();
        return view('admin.master.maintain', ['maintains' => $maintains]);
    }



    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric',
            'unit' => 'required'
        ]);
        try {
            //code...
            Maintain::create($data);
            Alert::success("Sukses", "Berhasil Menambahkan data tindakan");
            return redirect('maintain');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function edit($id)
    {
        $maintain = Maintain::find($id);
        if (!isset($maintain)) {
            throw new WebException("Ops, Data tindakan tidak ditemukan");
        }
        return view('admin.edit.e-maintain', ['maintain' => $maintain]);

    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric',
            'unit' => ['required', 'regex:/^\/.*/'] // Menambahkan aturan regex untuk memastikan dimulai dengan "/"
        ], [
            'unit.regex' => 'unit harus berawalan dengan /'
        ]);


        $maintain = Maintain::find($id);
        if (!isset($maintain)) {
            throw new WebException('Ops , Tindakan tidak ditemukan');
        }
        try {
            //code...
            $maintain->update($data);
            Alert::success("Sukses", "Berhasil Memperbarui Tindakan");
            return redirect('maintain');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }


    public function delete(Request $request)
    {


        $data = $this->validate($request, [
            'id' => 'required',
        ]);

        $maintain = Maintain::find($data['id']);
        if (!isset($maintain)) {
            throw new WebException('Ops , Tindakan tidak ditemukan');
        }
        try {
            //code...
            $maintain->delete();
            Alert::success("Sukses", "Berhasil menghapus Tindakan");
            return redirect('maintain');
        } catch (\Throwable $th) {

            throw new WebException($th->getMessage());
            //throw $th;
        }
    }

}
