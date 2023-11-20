<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatientController extends Controller
{
    //

    public function index()
    {
        $data = Patient::all();
        return view('admin.master.patient', ['patients' => $data]);
    }



    public function create()
    {

    }

    public function delete(Request $request)
    {
        $data = $this->validate($request, [
            'id' => 'required',
        ]);
        $patient = Patient::find($data['id']);
        if (!isset($patient)) {
            throw new WebException('Ops , pasien tidak ditemukan');
        }
        try {
            //code...
            $patient->delete();
            Alert::success("Sukses", "Berhasil menghapus Pasien");
            return redirect('patient');
        } catch (\Throwable $th) {
            throw new WebException($th->getMessage());
            //throw $th;
        }
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required'
        ]);
        // dd($data);
        try {
            //code...
            Patient::create($data);
            Alert::success("Sukses", "Berhasil Menambahkan Pasien");
            return redirect('patient');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function edit($id)
    {
        $patient = Patient::find($id);
        if (!isset($patient)) {
            throw new WebException('Ops , pasien tidak ditemukan');
        }
        return view('admin.edit.e-patient', ['patient' => $patient]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required'
        ]);

        $patient = Patient::find($id);
        if (!isset($patient)) {
            throw new WebException('Ops , pasien tidak ditemukan');
        }
        try {
            //code...
            $patient->update($data);
            Alert::success("Sukses", "Berhasil Memperbarui Pasien");
            return redirect('patient');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

}
