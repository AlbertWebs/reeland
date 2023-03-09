<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BinaryCats\Sku\HasSku;

class Product extends Model
{
    use HasFactory;
    use HasSku;

    public function skuOptions() : SkuOptions
    {
        return SkuOptions::make()
            ->using('-')
            ->forceUnique(false)
            ->generateOnCreate(true)
            ->refreshOnUpdate(false);
    }
}
