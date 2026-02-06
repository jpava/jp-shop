<?php

namespace App\DTOs;

use App\Http\Requests\CompanyRequest;

class CompanyData
{
    /**
     * Create a new class instance.
     */
    public function __construct(
          public string $name,
        public ?string $description,
        public string $email,
        public ?string $website,
        public ?string $phone,
        public ?string $address,
        public mixed $logo_path=null,
        public ?string $primary_color,
        public ?string $secondary_color,
        public ?string $font,
        public ?string $font_color,        
        public ?string $timezone,
        public ?string $footer_text,
    )
    {}
    /**
     * Summary of fromRequest
     * @param CompanyRequest $request
     * @return CompanyData
     */
    public static function fromRequest(CompanyRequest $request): self
    {
        return new self(
            name: $request->input('name'),
            description: $request->input('description'),
            email: $request->input('email'),
            website: $request->input('website'),
            phone: $request->input('phone'),
            address: $request->input('address'),
            logo_path: $request->input('logo_path'),
            primary_color: $request->input('primary_color'),
            secondary_color: $request->input('secondary_color'),
            font: $request->input('font'),
            font_color: $request->input('font_color'),
            timezone: $request->input('timezone'),
            footer_text: $request->input('footer_text'),
        );
    }   
}
