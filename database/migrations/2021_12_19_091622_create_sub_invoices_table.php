<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id');
            $table->string('job_desc');
            $table->string('manager')->nullable();
            $table->string('starnum')->nullable();
            $table->integer('vol');
            $table->string('unit')->nullable();
            $table->integer('price');
            $table->integer('total');
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
        Schema::dropIfExists('sub_invoices');
    }
}
