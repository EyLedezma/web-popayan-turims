<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Convenio
 *
 * @property $id
 * @property $fecha
 * @property $direccion
 * @property $telefono
 * @property $correo
 * @property $tipconvenios_id
 * @property $lugares_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Lugar $lugar
 * @property Tipconvenio $tipconvenio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Convenio extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'tipconvenios_id' => 'required',
		'lugares_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','direccion','telefono','correo','tipconvenios_id','lugares_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lugar()
    {
        return $this->hasOne('App\Models\Lugar', 'id', 'lugares_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipconvenio()
    {
        return $this->hasMany('App\Models\Tipconvenio', 'id', 'tipconvenios_id');
    }
    

}
