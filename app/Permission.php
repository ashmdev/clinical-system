<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description'
    ];
    
    // RELACIONES
    public function role()
    {   // Pertenece a uno (relacion muchos a uno)
        return $this->belongsTo('App\Role');
    }

    public function users()
    {   // Pertenece a muchos (relacion muchos a muchos)
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    // ALMACENAMIENTO
    
    // VALIDACION
    
    // RECUPERACION DE INFORMACION
    
    // OTRAS OPERACIONES
}


    // RELACIONES

    // ALMACENAMIENTO
    
    // VALIDACION
    
    // RECUPERACION DE INFORMACION
    
    // OTRAS OPERACIONES