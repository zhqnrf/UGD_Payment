<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Models\Maintain;
use App\Models\Patient;
use App\Models\Room;
use App\Models\UgdPayment;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class UgdPaymentController extends Controller
{
    //


    public function create()
    {
        $patients = Patient::all();
        $registrationNumber = $this->registrationNumber();
        $rooms = Room::all();
        $maintain = Maintain::all();
        if (sizeof($patients) == 0) {
            return redirect('patient')->withErrors('Ops, Kamu Harus menambahkan pasien terlebih dahulu');
        }
        if (sizeof($rooms) == 0) {
            return redirect('room')->withErrors('Ops, Kamu Harus menambahkan Kamar terlebih dahulu');
        }
        return view('admin.add.a-pay', ['patients' => $patients, 'rooms' => $rooms, 'maintains' => $maintain, 'registrationNumber' => $registrationNumber]);
    }

    public function store(Request $request)
    {
       
        dd($request->all());
    }


    private function registrationNumber()
    {
        $count = UgdPayment::count() + 1;
        $number = "13120201";
        $month = date('m');
        $date = date('d');

        return $number . "/" . $month . "/" . $date . "/" . $count;
    }

}
