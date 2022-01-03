<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basts', function (Blueprint $table) {
            $table->id();
            $table->string('no_bast');
            $table->string('t_work');
            $table->string('date');        
            $table->string('no_inv');
            $table->string('Pname');
            $table->string('pClient');
            $table->string('perihal');
            $table->string('Cname');
            $table->string('mail');
            $table->string('item');
            $table->integer('Quan');
            $table->string('unit');
            $table->string('status')->nullable();
            $table->string('notes')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('basts');
    }
}
