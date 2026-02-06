<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'email' => $this->email,
            'website' => $this->website,
            'phone' => $this->phone,
            'address' => $this->address,
            'logo_url' => $this->logo_path,
            'primary_color' => $this->primary_color,
            'secondary_color' => $this->secondary_color,
            'font' => $this->font,
            'font_color' => $this->font_color,
            'timezone' => $this->timezone,
            'footer_text' => $this->footer_text,
        ];
    }
}
