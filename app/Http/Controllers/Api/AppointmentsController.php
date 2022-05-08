<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Http\Resources\AppointmentResource;
use App\Http\Requests\AppointmentRequest;

class AppointmentsController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('patient')->get();
        return AppointmentResource::collection($appointments);
    }

    public function store(AppointmentRequest $request)
    {
        $appointment = $request->validated();

        $appointment = Appointment::create($appointment);

        return response()->json([
            'status' => true,
            'message' => 'Consulta cadastrada com sucesso!',
        ], 200);
    }

    public function show($id)
    {
        $appointment = Appointment::find($id);

        if(!$appointment){
            return response()->json([
                'status' => 'false',
                'message' => 'Consulta não encontrado!',
            ], 404);
        }

        return new AppointmentResource($appointment);
    }

    public function update(AppointmentRequest $request, $id)
    {
        $validate = $request->validated();
        $appointment = Appointment::find($id);

        if(!$appointment){
            return response()->json([
                'status' => 'false',
                'message' => 'Consulta não encontrado!',
            ], 404);
        }

        $appointment->update($validate);

        return response()->json([
            'status' => 'true',
            'message' => 'Consulta alterada com sucesso!',
        ], 200);
    }

    public function destroy($id)
    {
        $appointment = Appointment::find($id);

        if(!$appointment){
            return response()->json([
                'status' => 'false',
                'message' => 'Consulta não encontrada!',
            ], 404);
        }

        $appointment->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'Consulta excluída com sucesso!',
        ], 200);
    }
}
