<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Rol[] $rols
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Permiso extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rols()
    {
        return $this->hasMany('App\Models\Rol', 'permisos_id', 'id');
    }
    

}
