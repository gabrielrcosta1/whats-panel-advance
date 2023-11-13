<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\{JsonResponse, Request};

class InsertApiController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name'    => 'required|string',
            'number'  => 'required|string',
            'date'    => 'required|date',
            'status'  => 'required|string',
            'type'    => 'required|string',
            'subject' => 'required|string',
        ]);

        $data = Conversation::create($request->all());

        return response()->json(['message' => 'Dados inseridos com sucesso', 'data' => $data], 201);
    }
}
