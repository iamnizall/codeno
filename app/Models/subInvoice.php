<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subInvoice extends Model
{
    // use HasFactory;
    public function invoice(){
        return $this->BelongsTo(Invoice::class,'invoice_id');
    }
}
