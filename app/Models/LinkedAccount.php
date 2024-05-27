<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkedAccount extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'LinkedAccounts';

    // Clave primaria personalizada
    protected $primaryKey = 'IdLinkA';

    
    protected $fillable = ['IdLink', 'data'];

    // Relación con LinkedType
    public function linkedType()
    {
        return $this->belongsTo(LinkedType::class, 'IdLink', 'IdLink');
    }
}
