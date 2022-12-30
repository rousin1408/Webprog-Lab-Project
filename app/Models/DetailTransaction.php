<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;
    protected $table = "detail_transaction";
    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
        'total_price_all',
    ];
    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function transactionheader()
    {
        return $this->belongsTo(HeaderTransaction::class);
    }
}
