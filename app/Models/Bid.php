<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    /** @use HasFactory<\Database\Factories\BidFactory> */
    use HasFactory;

    protected $fillable = ['auction_item_id', 'user_id', 'amount',];
    public function auctionItem()
    {
        return $this->belongsTo(Product::class, 'auction_item_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
