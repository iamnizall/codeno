<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    // use HasFactory;
    protected $guarded = [];
    
    // merelasikan tabel Invoice ke subInvoice
    public function subinvoice()
    {
        return $this->hasMany(subInvoice::class);
    }
    


}
