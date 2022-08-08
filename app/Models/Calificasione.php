<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calificasione
 *
 * @property $id
 * @property $comentarios
 * @property $reseñas
 * @property $created_at
 * @property $updated_at
 *
 * @property Lugar[] $lugars
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calificasione extends Model
{
    
    static $rules = [
		'comentarios' => 'required',
		'reseñas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comentarios','reseñas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugars()
    {
        return $this->hasMany('App\Models\Lugar', 'calificasiones_id', 'id');
    }
    

}
