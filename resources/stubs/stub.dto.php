<?php

namespace {{ namespace }}\DTOs;

use {{ namespace }}\Requests\{{ class }}Request;

class {{ class }}Data
{
    /**
     * Create a new DTO instance
     */
    public function __construct(
        // Agrega aquí las propiedades de tu DTO
        // public string $name,
        // public ?string $description = null,
    )
    {}

    /**
     * Create a DTO from a request
     */
    public static function fromRequest({{ class }}Request $request): self
    {
        return new self(
            // Mapea aquí los datos del request
            // name: $request->input('name'),
            // description: $request->input('description'),
        );
    }
}
