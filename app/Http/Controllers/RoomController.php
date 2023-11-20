<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Models\Room;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{
    //
    public function index()
    {
        $rooms = Room::all();
        return view('admin.master.room', ['rooms' => $rooms]);

    }
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
        ]);
        try {
            //code...
            Room::create($data);
            Alert::success("Sukses", "Berhasil Menambahkan Kamar");
            return redirect('room');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function edit($id)
    {
        $room = Room::find($id);
        if (!isset($room)) {
            throw new WebException('Ops , Kamar tidak ditemukan');
        }
        return view('admin.edit.e-room', ['room' => $room]);
    }

    public function delete(Request $request)
    {
       

        $data = $this->validate($request, [
            'id' => 'required',
        ]);

        $room = Room::find($data['id']);
        if (!isset($room)) {
            throw new WebException('Ops , Kamar tidak ditemukan');
        }
        try {
            //code...
            $room->delete();
            Alert::success("Sukses", "Berhasil menghapus kamar");
            return redirect('room');
        } catch (\Throwable $th) {

            throw new WebException($th->getMessage());
            //throw $th;
        }
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $room = Room::find($id);
        if (!isset($room)) {
            throw new WebException('Ops , Kamar tidak ditemukan');
        }
        try {
            //code...
            $room->update($data);
            Alert::success("Sukses", "Berhasil Memperbarui Kamar");
            return redirect('room');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }
}
