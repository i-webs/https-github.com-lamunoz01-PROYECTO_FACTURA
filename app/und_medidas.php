<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class und_medidas extends Model
{
    protected $fillable = ['UM_COD','UM_NOM'];

    protected $primarykey = 'UM_COD';

    protected $table = 'und_medidas';
}
