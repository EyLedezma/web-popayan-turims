<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $ubicasion
 * @property $horarios
 * @property $tiposervicios_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Lugar[] $lugars
 * @property Tiposervicio $tiposervicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'ubicasion' => 'required',
		'horarios' => 'required',
		'tiposervicios_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','ubicasion','horarios','tiposervicios_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugars()
    {
        return $this->hasMany('App\Models\Lugar', 'servicios_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiposervicio()
    {
        return $this->hasMany('App\Models\Tiposervicio', 'id', 'tiposervicios_id');
    }
    

}
