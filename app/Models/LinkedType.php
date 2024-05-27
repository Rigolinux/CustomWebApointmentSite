<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkedType extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'LinkedTypes';

    // Clave primaria personalizada
    protected $primaryKey = 'IdLink';

    // Relación con LinkedAccount
    public function linkedAccounts()
    {
        return $this->hasMany(LinkedAccount::class, 'IdLink', 'IdLink');
    }
}
