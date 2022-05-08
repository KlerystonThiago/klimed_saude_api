<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProcedureResource;
use App\Http\Requests\ProcedureRequest;
use App\Models\Procedure;

class ProceduresController extends Controller
{
    public function index()
    {
        $procedures = Procedure::all();
        return ProcedureResource::collection($procedures);
    }

    public function store(ProcedureRequest $request)
    {
        $data = $request->validated();

        $procedure = Procedure::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Procedimento cadastrado com sucesso!',
        ], 200);
    }

    public function show($id)
    {
        $procedure = Procedure::find($id);

        if(!$procedure){
            return response()->json([
                'status' => 'false',
                'message' => 'Procedimento não encontrado!',
            ], 404);
        }

        return new ProcedureResource($procedure);
    }

    public function update(ProcedureRequest $request, $id)
    {
        $validate = $request->validated();
        $procedure = Procedure::find($id);

        if(!$procedure){
            return response()->json([
                'status' => 'false',
                'message' => 'Procedimento não encontrado!',
            ], 404);
        }

        $procedure->update($validate);

        return response()->json([
            'status' => 'true',
            'message' => 'Procedimento alterado com sucesso!',
        ], 200);
    }

    public function destroy($id)
    {
        $procedure = Procedure::find($id);

        if(!$procedure){
            return response()->json([
                'status' => 'false',
                'message' => 'Procedimento não encontrado!',
            ], 404);
        }

        $procedure->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'Procedimento excluído com sucesso!',
        ], 200);
    }
}
