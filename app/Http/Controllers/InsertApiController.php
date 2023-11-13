<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\{JsonResponse, Request};
use Illuminate\Validation\ValidationException;

class InsertApiController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'name'    => 'required|string',
                'number'  => 'required|string',
                'date'    => 'required|string',
                'status'  => 'required|string',
                'type'    => 'required|string',
                'subject' => 'required|string',
            ]);

            $data = Conversation::create($request->all());

            return response()->json(['message' => 'Dados inseridos com sucesso', 'data' => $data], 201);
        } catch (ValidationException $validationException) {
            return response()->json(['error' => 'Erro de validação', 'details' => $validationException->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro interno no servidor', 'details' => $e->getMessage()], 500);
        }
    }
}
