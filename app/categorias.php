<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $fillable = ['CTG_COD','CTG_NOM'];

    protected $primarykey = 'CTG_COD';

    protected $table='categorias';

}
