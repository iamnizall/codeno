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
            $table->id(); //id
            $table->string('type'); //type invoice
            $table->string('p_name'); //project name
            $table->string('no_inv'); //nomor invoice
            $table->string('s_code'); //swift code
            $table->string('date');        //due date
            $table->string('no_po'); //nomor po
            $table->string('address'); //alamat
            $table->string('mail'); //mail client
            $table->string('client'); //name client
            $table->string('payment')->nullable(); //payment
            $table->string('tax'); //pajak
            $table->string('indate'); //date create
            $table->string('norek'); //nomor rekening
            $table->integer('totalcost')->nullable(); // cost total
            $table->integer('totaltax')->nullable(); // tax total
            $table->integer('stotal')->nullable(); // grand total
            $table->string('notes')->nullable(); //note
            $table->string('signature')->nullable(); //signature
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
