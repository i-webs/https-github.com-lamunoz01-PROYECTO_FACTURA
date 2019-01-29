<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UndMedidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('und_medidas',function (Blueprint $table){
            $table->string('UM_COD',7)->unique();//CODIGO DE LA U.M.
            $table->string('UM_NOM',50);//NOMBRE O DESCRIPCION DE LA UNIDAD DE MEDIDA.
            $table->primary(['UM_COD']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('und_medidas');
    }
}
