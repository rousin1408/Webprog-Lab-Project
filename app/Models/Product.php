<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = [
        'name',
        'category_id',
        'detail',
        'price',
        'photo',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function transactiondetail()
    {
        return $this->belongsTo(DetailTransaction::class);
    }
}
