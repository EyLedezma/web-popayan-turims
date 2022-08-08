<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 *
 * @property $id
 * @property $nombre
 * @property $permisos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Permiso $permiso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rol extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'permisos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','permisos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function permiso()
    {
        return $this->hasMany('App\Models\Permiso', 'id', 'permisos_id');
    }
    
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

}
