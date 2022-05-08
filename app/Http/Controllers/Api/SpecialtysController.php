<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SpecialtyResource;
use App\Http\Requests\SpecialtyRequest;
use App\Models\Specialty;

class SpecialtysController extends Controller
{
    public function index()
    {
        $specialtys = Specialty::all();
        return SpecialtyResource::collection($specialtys);
    }

    public function store(SpecialtyRequest $request)
    {
        $specialty = $request->validated();

        $specialty = Specialty::create($specialty);

        return response()->json([
            'status' => true,
            'message' => 'Especialidade cadastrado com sucesso!',
        ], 200);
    }

    public function show($id)
    {
        $specialty = Specialty::find($id);

        if(!$specialty){
            return response()->json([
                'status' => 'false',
                'message' => 'Especialidade não encontrada!',
            ], 404);
        }

        return new SpecialtyResource($specialty);
    }

    public function update(SpecialtyRequest $request, $id)
    {
        $validate = $request->validated();
        $specialty = Specialty::find($id);

        if(!$specialty){
            return response()->json([
                'status' => 'false',
                'message' => 'Especialidade não encontrada!',
            ], 404);
        }

        $specialty->update($validate);

        return response()->json([
            'status' => 'true',
            'message' => 'Especialidade alterada com sucesso!',
        ], 200);
    }

    public function destroy($id)
    {
        $specialty = Specialty::find($id);

        if(!$specialty){
            return response()->json([
                'status' => 'false',
                'message' => 'Especialidade não encontrada!',
            ], 404);
        }

        $specialty->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'Especialidade excluída com sucesso!',
        ], 200);
    }
}
