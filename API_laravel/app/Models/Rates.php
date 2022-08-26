<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rates extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['conversion_rate', 'countdown_rate_id'];

    protected $searchableFields = ['*'];

    public function currency_start()
    {
        return $this->hasMany(Currency::class, 'start_id');
    }

    public function currency_end()
    {
        return $this->hasMany(Currency::class, 'end_id');
    }

    public function countdownRate()
    {
        return $this->belongsTo(CountdownRate::class);
    }
}
