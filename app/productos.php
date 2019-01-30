<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = ['PR_COD','PR_NOM','PR_VAL_COS','PR_VAL_VEN','PR_DEPO',
    'PR_CANT','PR_CMIN','PR_CATEG','PR_UM'];

    protected $primarykey ='PR_COD';

    protected $table='productos';
}

