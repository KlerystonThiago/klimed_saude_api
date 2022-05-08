<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Resources\DoctorResource;
use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Models\Specialty;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return DoctorResource::collection($doctors);
    }

    public function store(DoctorRequest $request)
    {
        $data = $request->validated();

        $doctor = Doctor::create($data);

        $doctor->specialtys()->attach($data['specialty']);

        return response()->json([
            'status' => true,
            'message' => 'Médico cadastrado com sucesso!',
        ], 200);
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);

        if(!$doctor){
            return response()->json([
                'status' => 'false',
                'message' => 'Médico não encontrado!',
            ], 404);
        }

        return new DoctorResource($doctor);
    }

    public function update(DoctorRequest $request, $id)
    {
        $validate = $request->validated();
        $doctor = Doctor::find($id);

        if(!$doctor){
            return response()->json([
                'status' => 'false',
                'message' => 'Médico não encontrado!',
            ], 404);
        }

        $doctor->update($validate);

        if($request->specialty){
            $doctor->specialtys()->detach();
            $doctor->specialtys()->attach($request->specialty);
        }


        return response()->json([
            'status' => 'true',
            'message' => 'Médico alterado com sucesso!',
        ], 200);
    }

    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if(!$doctor){
            return response()->json([
                'status' => 'false',
                'message' => 'Médico não encontrado!',
            ], 404);
        }

        $doctor->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'Médico excluído com sucesso!',
        ], 200);
    }
}
