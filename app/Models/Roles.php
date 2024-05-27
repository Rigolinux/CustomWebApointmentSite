<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;


    protected $table = 'Roles';

    protected $primaryKey = 'IdRole';

    public function users()
    {
        return $this->hasMany(User::class, 'IdRole', 'IdRole');
    }
}
