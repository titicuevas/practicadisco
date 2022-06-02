<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Grammars\Grammar;
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
        Grammar::macro('typeInterval', function () {
            return 'interval';
        });

        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->year('anyo');
            $table->addColumn('interval', 'duracion');

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
        Schema::dropIfExists('temas');
    }
};
