<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Report_Component extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'report_id' => $this->report_id,
            'component_id' => $this->component_id,
        ];
    }
}
