<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisponibilidadsTable extends Migration
{
    public $table_name = 'disponibilidades';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dia');
            $table->timestamp('hora_inicial')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('hora_final')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->text('intervalos');
            $table->bigInteger('prestacion_id')->unsigned();
            $table->boolean('disponible')->default(true);
            $table->softDeletes();
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('prestacion_id')->references('id')->on('prestaciones');
            $table->unique(['dia', 'prestacion_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table_name);
    }
}
