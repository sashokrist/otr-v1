<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Activities extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'name',
        'type',
        'date',
        'status',
        'admin',
        'sessions'
    ];

    protected $allowedFilters = [
        'name',
        'type',
        'date',
        'status',
        'admin',
        'sessions',
        'created_at',
        'deleted_at',
    ];

    /**
     * @var array
     */
    protected $allowedSorts = [
        'name',
        'type',
        'date',
        'status',
        'admin',
        'sessions',
        'created_at',
        'deleted_at',
    ];
}
