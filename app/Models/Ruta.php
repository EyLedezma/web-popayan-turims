<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruta
 *
 * @property $id
 * @property $ubicasion
 * @property $horarios
 * @property $descripcion
 * @property $mapas_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Lugar[] $lugars
 * @property Mapa $mapa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ruta extends Model
{
    
    static $rules = [
		'ubicasion' => 'required',
		'horarios' => 'required',
		'descripcion' => 'required',
		'mapas_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ubicasion','horarios','descripcion','mapas_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugars()
    {
        return $this->hasMany('App\Models\Lugar', 'rutas_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mapa()
    {
        return $this->hasMany('App\Models\Mapa', 'id', 'mapas_id');
    }
    

}
