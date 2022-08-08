<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipolugar
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Lugar[] $lugars
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipolugar extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugars()
    {
        return $this->hasMany('App\Models\Lugar', 'tipolugar_id', 'id');
    }
    

}
