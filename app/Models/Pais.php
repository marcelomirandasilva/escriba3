<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "paises";

    protected $primaryKey = 'id';

    protected $fillable =[
        'no_pais',
        'no_continente'
    ];

    /**
     * Relacionamentos!
     */

    public function enderecos()
    {
    	return $this->hasMany('App\Models\Endereco');
    }
}
