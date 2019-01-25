<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table){
			$table->string('PR_COD',10)->unique();
			$table->string('PR_NOM',80);
			$table->double('PR_VAL_COS',17,2);	//VALOR COSTO (PROVEEDOR)		
			$table->double('PR_VAL_VENT',17,2); //PRECIO DE VENTA 
			$table->double('PR_DEPO',17,2); //VALOR DE DEPOSITO
			$table->double('PR_CANT',10); //CANTIDAD O EXISTENCIA DE PRODUCTOS
			$table->double('PR_CMIN',10); //CANTIDAD MINIMA QUE DEBE EXISTIR DEL PRODUCTO
			$table->string('PR_CATEG',20); //CATEGORIA DEL PRODUCTO
			$table->string('PR_UM',7); //UNIDAD DE MEDIDA DEL PRODUCTO
			$table->primary(['PR_COD']);
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
        Schema::dropIfExists('productos');
    }
}
