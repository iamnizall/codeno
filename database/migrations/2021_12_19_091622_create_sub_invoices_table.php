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
        // cerate tabel sub_invoices
        Schema::create('sub_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices')->onDelete('cascade')->onUpdate('cascade'); //invoice_id
            $table->string('job_desc'); //job description
            $table->string('manager')->nullable(); //manager
            $table->string('starnum')->nullable(); //star number
            $table->integer('vol')->nullable(); //volume
            $table->string('unit')->nullable(); //unit
            $table->integer('price')->nullable(); //price
            $table->integer('total'); //total
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
