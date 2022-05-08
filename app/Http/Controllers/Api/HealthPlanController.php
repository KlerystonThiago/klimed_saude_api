<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Healthplan;
use App\Http\Resources\HealthPlanResource;
use App\Http\Requests\HealthPlanRequest;

class HealthPlanController extends Controller
{
    public function index()
    {
        $healthPlans = Healthplan::all();
        return HealthPlanResource::collection($healthPlans);
    }

    public function store(HealthPlanRequest $request)
    {
        $healthPlan = $request->validated();

        $healthPlan = Healthplan::create($healthPlan);

        return response()->json([
            'status' => true,
            'message' => 'Plano de saúde cadastrado com sucesso!',
        ], 200);
    }

    public function show($id)
    {
        $healthPlan = Healthplan::find($id);

        if(!$healthPlan){
            return response()->json([
                'status' => 'false',
                'message' => 'Plano de saúde não encontrado!',
            ], 404);
        }

        return new HealthPlanResource($healthPlan);
    }

    public function update(HealthPlanRequest $request, $id)
    {
        $validate = $request->validated();
        $healthPlan = Healthplan::find($id);

        if(!$healthPlan){
            return response()->json([
                'status' => 'false',
                'message' => 'Plano de saúde não encontrado!',
            ], 404);
        }

        $healthPlan->update($validate);

        return response()->json([
            'status' => 'true',
            'message' => 'Plano de saúde alterado com sucesso!',
        ], 200);
    }

    public function destroy($id)
    {
        $healthPlan = Healthplan::find($id);

        if(!$healthPlan){
            return response()->json([
                'status' => 'false',
                'message' => 'Plano de saúde não encontrado!',
            ], 404);
        }

        $healthPlan->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'Plano de saúde excluído com sucesso!',
        ], 200);
    }
}
