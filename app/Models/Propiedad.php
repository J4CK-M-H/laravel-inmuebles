<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedades';

    protected $fillable = [
        'titulo',
        'precio',
        'foto',
        'descripcion',
        'user_id'
        // distrito
        // calle

    ];

    public function user()
    {
        return $this->belongsTo(User::class)->select('name','lastName','username');
    }
}
