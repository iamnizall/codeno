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
            $table->timestamp('date');        
            $table->string('no_po');
            $table->string('address');
            $table->string('mail');
            $table->string('client');
            $table->string('payment');
            $table->string('account');
            $table->string('job_desc');
            $table->integer('vol');
            $table->integer('unit');
            $table->integer('price');
            $table->string('notes');
            $table->string('signature');
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
