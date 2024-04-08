<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *             $table->bigInteger('user_id');
     */
    public function up(): void
    {
        Schema::table('chirps', function(Blueprint $table){
            //$table->bigInteger('user_id');
            $table->bigInteger('user_id')->unsigned()->after('message'); // Agrega la columna después de 'message'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Define la clave foránea
            //$table->foreignId('user_id')->constrained()->cascadeOnDelete(); OTRA OPCIÓN!!!!!!!!
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chirps', function (Blueprint $table) {
            $table->dropForeign('chirps_user_id_foreign'); // Elimina la restricción de clave foránea (nombre generado)
            $table->dropColumn('user_id');
        });
    }
};
