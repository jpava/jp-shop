<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory, SoftDeletes;


    /**
     * Database connection name
     * @var string
     */
    //protected $connection ='sqlite';
    /**
     * Table name
     * @var string
     */
    protected $table = 'companies';

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'email',
        'website',
        'phone',
        'address',
        'logo_path',
        'primary_color',
        'secondary_color',
        'font',
        'font_color',
        'timezone',
        'footer_text',
    ];

    /**
     * Summary of attributes
     * @var array
     */
    protected $attributes = [
        'primary_color' => '#3490dc', // Azul Laravel por defecto
        'font_color' => '#212529',    // Gris oscuro por defecto
        'font' => 'Arial, sans-serif',
    ];

    /**
     * Logo default
     * @return string
     */
    function getLogoPathAttribute():string
    {
        return $this->logo_path ?? 'images/default-logo.png';
    }

}
