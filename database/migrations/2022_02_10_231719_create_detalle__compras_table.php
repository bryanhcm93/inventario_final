<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__compras', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_disponible');
            $table->date('fecha');
            $table->string('descripcion',100);
            $table->integer('precio');
            $table->foreignId('id_producto')->constrained('productos');
            $table->foreignId('id_empleado')->constrained('empleados');


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
        Schema::dropIfExists('detalle__compras');
    }
};
