<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderTransaction extends Model
{
    use HasFactory;
    protected $table = "header_transaction";
    protected $fillable = [
        'user_id',
        'date',
        'total_price',
        'total_product',
    ];
    public function transactiondetail()
    {
        return $this->hasMany(DetailTransaction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
