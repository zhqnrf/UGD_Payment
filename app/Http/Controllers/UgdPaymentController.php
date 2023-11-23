<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Models\Ambulance;
use App\Models\Care;
use App\Models\IvInsertion;
use App\Models\Laboratorium;
use App\Models\Maintain;
use App\Models\Medicines;
use App\Models\MedicinesDevice;
use App\Models\Nutrition;
use App\Models\Others;
use App\Models\Patient;
use App\Models\Registration;
use App\Models\Room;
use App\Models\RoomDetail;
use App\Models\UgdAction;
use App\Models\UgdPayment;
use App\Models\VisiteDoctor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

        $this->validate($request, [
            'start' => 'required|date',
            'end' => 'required|date',
        ]);
        $registrationNumber = $request->input('registration_number');
        $patient = $request->input('patient');
        $registration = $this->validateInput($request->input('registration'));
        $room = $this->validateInput($request->input('room'));
        $iv = $this->validateInput($request->input('iv'));
        $doctor = $this->validateInput($request->input('doctor'));
        $care = $this->validateInput($request->input('care'));
        $ugd = $this->validateInput($request->input('ugd'));
        $nutrition = $this->validateInput($request->input('nutrition'));
        $ambulance = $this->validateInput($request->input('ambulance'));
        $lab = $this->validateInput($request->input('lab'));
        $medicines = $this->validateInput($request->input('medicines'));
        $medicalDevice = $this->validateInput($request->input('medical_device'));


        $others = $request->input('other');



        // Validate if each array is not empty before including in the return statement
        $dataRequest = compact(
            'patient',
            'registration',
            'room',
            'iv',
            'doctor',
            'care',
            'ugd',
            'nutrition',
            'ambulance',
            'lab',
            'medicines',
            'medicalDevice'
        );


        // Filter out empty arrays
        $dataRequest = array_filter($dataRequest, function ($value) {
            return !empty($value);
        });
        $dataToStore = [
            'patient_id' => $patient['id'],
            'umur' => $patient['age'],
            'start_treating' => Carbon::parse($request->input('start')),
            'end_treating' => Carbon::parse($request->input('end')),
            'days_treated' => $request->input('days_treated'),
            'registration_number' => $registrationNumber,
            'status' => $request->input('status')
        ];

        try {
            //code...
            $ugdPayment = UgdPayment::create($dataToStore);
            if (isset($dataRequest['registration'])) {
                $registrationRequest = $dataRequest['registration'];
                $registrationRequest['ugd_payment_id'] = $ugdPayment->id;
                Registration::create($registrationRequest);
            }

            if (isset($dataRequest['iv'])) {
                $ivRequest = $dataRequest['iv'];
                $ivRequest['ugd_payment_id'] = $ugdPayment->id;
                IvInsertion::create($ivRequest);
            }

            if (isset($dataRequest['doctor'])) {
                $doctorRequest = $dataRequest['doctor'];
                $doctorRequest['ugd_payment_id'] = $ugdPayment->id;
                VisiteDoctor::create($doctorRequest);
            }

            if (isset($dataRequest['care'])) {
                $careRequest = $dataRequest['care'];
                $careRequest['ugd_payment_id'] = $ugdPayment->id;
                Care::create($careRequest);
            }

            if (isset($dataRequest['ugd'])) {
                $ugdRequest = $dataRequest['ugd'];
                $ugdRequest['ugd_payment_id'] = $ugdPayment->id;
                UgdAction::create($ugdRequest);
            }

            if (isset($dataRequest['nutrition'])) {
                $nutritionRequest = $dataRequest['nutrition'];
                $nutritionRequest['ugd_payment_id'] = $ugdPayment->id;
                Nutrition::create($nutritionRequest);
            }

            if (isset($dataRequest['ambulance'])) {
                $ambulanceRequest = $dataRequest['ambulance'];
                $ambulanceRequest['ugd_payment_id'] = $ugdPayment->id;
                Ambulance::create($ambulanceRequest);
            }


            if (isset($dataRequest['lab'])) {
                $labRequest = $dataRequest['lab'];
                $labRequest['ugd_payment_id'] = $ugdPayment->id;
                Laboratorium::create($labRequest);
            }

            if (isset($dataRequest['medicines'])) {
                $medicinesRequest = $dataRequest['medicines'];
                $medicinesRequest['ugd_payment_id'] = $ugdPayment->id;
                Medicines::create($medicinesRequest);
            }

            if (isset($dataRequest['medicalDevice'])) {
                $medicalDevice = $dataRequest['medicalDevice'];
                $medicalDevice['ugd_payment_id'] = $ugdPayment->id;
                MedicinesDevice::create($medicalDevice);
            }

            if (isset($dataRequest['room'])) {
                $medicalDevice = $dataRequest['room'];
                $medicalDevice['ugd_payment_id'] = $ugdPayment->id;
                RoomDetail::create($medicalDevice);
            }


            if (isset($others)) {
                foreach ($others as $value) {
                    # code...
                    $value['ugd_payment_id'] = $ugdPayment->id;
                    Others::create($value);
                }
            }


            Alert::success("Sukses", "Berhasil Menambahkan Payment");
            return redirect('statuspay');
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function index()
    {
        $data = UgdPayment::with('patient', 'others', 'ambulance', 'care', 'iv', 'laboratorium', 'medicines', 'device', 'nutrition', 'registration', 'roomDetail', 'ugdAction')->orderBy('created_at', 'asc')->get()->toArray();
        return view('admin.status', ['data' => $data]);
    }


    private function validateInput($array)
    {
        if (isset($array['check'])) {
            unset($array['check']);
            return $array;
        }
        return [];
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
