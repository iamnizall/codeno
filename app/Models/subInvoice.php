<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subInvoice extends Model
{
    // relasi tabel pada subInvoice
    public function invoice(){
        return $this->BelongsTo(Invoice::class,'invoice_id');
    }
}
