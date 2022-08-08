<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipoplato
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Gastronomia[] $gastronomias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipoplato extends Model
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
    public function gastronomias()
    {
        return $this->hasMany('App\Models\Gastronomia', 'tipoplato_id', 'id');
    }
    

}
