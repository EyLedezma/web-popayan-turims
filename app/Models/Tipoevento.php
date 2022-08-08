<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipoevento
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento[] $eventos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipoevento extends Model
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
    public function eventos()
    {
        return $this->hasMany('App\Models\Evento', 'tipoeventos_id', 'id');
    }
    

}
