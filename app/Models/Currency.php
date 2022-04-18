<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'currencies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'short_name',
        'symbol',
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
