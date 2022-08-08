<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gastronomia
 *
 * @property $id
 * @property $ubicasion
 * @property $descripcion
 * @property $horarios
 * @property $tipoplato_id
 *
 * @property Lugar[] $lugars
 * @property Tipoplato $tipoplato
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gastronomia extends Model
{
    
    static $rules = [
		'ubicasion' => 'required',
		'descripcion' => 'required',
		'horarios' => 'required',
		'tipoplato_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ubicasion','descripcion','horarios','tipoplato_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugars()
    {
        return $this->hasMany('App\Models\Lugar', 'gastronomia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoplato()
    {
        return $this->hasMany('App\Models\Tipoplato', 'id', 'tipoplato_id');
    }
    

}
