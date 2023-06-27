<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bid extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'path'];

    protected $searchableFields = ['*'];

    public function lineItems()
    {
        return $this->hasMany(LineItem::class);
    }
}
