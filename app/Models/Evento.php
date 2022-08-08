<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id
 * @property $nombre
 * @property $ubucasion
 * @property $horarios
 * @property $fecha de inicio
 * @property $fecha fin
 * @property $created_at
 * @property $updated_at
 * @property $tipoeventos_id
 *
 * @property Lugar[] $lugars
 * @property Tipoevento $tipoevento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ubucasion' => 'required',
		'horarios' => 'required',
		'fecha de inicio' => 'required',
		'fecha fin' => 'required',
		'tipoeventos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ubucasion','horarios','fecha de inicio','fecha fin','tipoeventos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugars()
    {
        return $this->hasMany('App\Models\Lugar', 'evento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoevento()
    {
        return $this->hasOne('App\Models\Tipoevento', 'id', 'tipoeventos_id');
    }
    

}
