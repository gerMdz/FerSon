<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioRequest;
use App\Http\Resources\ComentarioResource;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function index()
    {
        return ComentarioResource::collection(Comentario::all());
    }

    public function store(ComentarioRequest $request)
    {
        return new ComentarioResource(Comentario::create($request->validated()));
    }

    public function show(Comentario $comentario)
    {
        return new ComentarioResource($comentario);
    }

    public function update(ComentarioRequest $request, Comentario $comentario)
    {
        $comentario->update($request->validated());

        return new ComentarioResource($comentario);
    }

    public function destroy(Comentario $comentario)
    {
        $comentario->delete();

        return response()->json();
    }
}
