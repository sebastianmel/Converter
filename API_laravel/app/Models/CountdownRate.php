<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CountdownRate extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['coutdown'];

    protected $searchableFields = ['*'];

    protected $table = 'countdown_rates';

    public function allRates()
    {
        return $this->hasMany(Rates::class);
    }
}
