<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'descriptiom'
    ];

    // RELACIONES
    public function permissions()
    {   // Un rol tiene mucho permisos
        return $this->hasMany('App\Permission');
    }
    public function users()
    {   // pertenece a muchos usuarios
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    // ALMACENAMIENTO
    
    // VALIDACION
    
    // RECUPERACION DE INFORMACION
    
    // OTRAS OPERACIONES

}
