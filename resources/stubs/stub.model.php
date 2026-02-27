<?php

namespace {{ namespace }}\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class {{ class }} extends Model
{
    use HasFactory;

    /**
     * Table name
     * @var string
     */
    protected $table = '{{ table_name }}';

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected $fillable = [
        // Agrega aquí los campos que deseas que sean asignables en masa
        // 'name',
        // 'description',
    ];

    /**
     * The attributes that should be hidden for serialization
     * @var array
     */
    protected $hidden = [
        // 'password',
    ];

    /**
     * The attributes that should be cast
     * @var array
     */
    protected $casts = [
        // 'created_at' => 'datetime',
    ];
}
