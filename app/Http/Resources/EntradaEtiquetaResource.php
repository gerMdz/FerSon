<?php

namespace App\Http\Resources;

use App\Models\EntradaEtiqueta;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin EntradaEtiqueta */
class EntradaEtiquetaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'entrada_id' => $this->entrada_id,
            'etiqueta_id' => $this->etiqueta_id,

            'etiqueta' => new EtiquetaResource($this->whenLoaded('etiqueta')),
        ];
    }
}
