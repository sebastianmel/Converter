<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Currency extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = ['name', 'symbol', 'start_id', 'end_id'];

    protected $searchableFields = ['*'];

    public function start()
    {
        return $this->belongsTo(Rates::class, 'start_id');
    }

    public function end()
    {
        return $this->belongsTo(Rates::class, 'end_id');
    }
}
