<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Resources\PatientResource;
use App\Http\Requests\PatientRequest;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::with('appointments')->get();
        return PatientResource::collection($patients);
    }

    public function store(PatientRequest $request)
    {
        $patient = $request->validated();

        $patient = Patient::create($patient);

        if($request->health_plans){
            foreach($request->health_plans as $plan){
                $patient->health_plans()->attach($plan, ['contract_number' => rand(10000, 99999)]);
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'Paciente cadastrado com sucesso!',
        ], 200);
    }

    public function show($id)
    {
        $patient = Patient::find($id);

        if(!$patient){
            return response()->json([
                'status' => 'false',
                'message' => 'Paciente não encontrado!',
            ], 404);
        }

        return new PatientResource($patient);
    }

    public function update(PatientRequest $request, $id)
    {
        $validate = $request->validated();
        $patient = Patient::find($id);

        if(!$patient){
            return response()->json([
                'status' => 'false',
                'message' => 'Paciente não encontrado!',
            ], 404);
        }

        $patient->update($validate);

        if($request->health_plans){
            $patient->health_plans()->detach();
            foreach($request->health_plans as $plan){
                $patient->health_plans()->attach($plan, ['contract_number' => rand(10000, 99999)]);
            }
        }

        return response()->json([
            'status' => 'true',
            'message' => 'Paciente alterado com sucesso!',
        ], 200);
    }

    public function destroy($id)
    {
        $Patient = Patient::find($id);

        if(!$Patient){
            return response()->json([
                'status' => 'false',
                'message' => 'Paciente não encontrado!',
            ], 404);
        }

        $Patient->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'Paciente excluído com sucesso!',
        ], 200);
    }
}
