<?php declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_videos'        => $this->id_videos,
            'titulo_video'     => $this->titulo_video,
            'nome_video'       => $this->nome_video,
            'ativo'            => $this->ativo,
            'data_cadastro'    => $this->data_cadastro,
            'data_atualizacao' => $this->data_atualizacao,
            'perguntas'        => $this->whenLoaded('perguntas', PerguntaResource::collection($this->perguntas))
        ];
    }
}
