<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mapa
 *
 * @property $id
 * @property $gps
 * @property $ubicacion
 * @property $multimedia
 * @property $created_at
 * @property $updated_at
 *
 * @property Ruta[] $rutas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mapa extends Model
{
    
    static $rules = [
		'gps' => 'required',
		'ubicacion' => 'required',
		'multimedia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['gps','ubicacion','multimedia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rutas()
    {
        return $this->hasMany('App\Models\Ruta', 'mapas_id', 'id');
    }
    

}
