<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCachorroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cachorro', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('nome');
            $table->text('raca');
            $table->integer('idade');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->time('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cachorro');
    }
}
