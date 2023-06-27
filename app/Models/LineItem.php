<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LineItem extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'quantity',
        'description',
        'bid_id',
        'category',
        'unit',
        'unit_price_excl_vat',
        'discount_excl_vat',
        'sub_total_excl_vat',
        'vat_percentage',
        'sub_total_incl_vat',
        'currency',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'line_items';

    public function bid()
    {
        return $this->belongsTo(Bid::class);
    }
}
