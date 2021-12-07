<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('no_inv');
            $table->string('s_code');
            $table->string('date');        
            $table->string('no_po');
            $table->string('address');
            $table->string('mail');
            $table->string('client');
            $table->string('payment')->nullable();
            $table->string('tax');
            $table->string('indate');
            $table->string('norek');
            $table->string('job_desc');
            $table->integer('vol');
            $table->string('unit')->nullable();
            $table->integer('price');
            $table->integer('stotal');
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
        Schema::dropIfExists('invoices');
    }
}
