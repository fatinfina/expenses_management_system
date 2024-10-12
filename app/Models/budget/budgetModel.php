<?php

namespace App\Models\budget;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class budgetModel extends Model
{
    use HasFactory;

    protected $connection = 'mysqlEXMS';
    protected $table = 'budget';
    protected $fillable = [
        'budget_id',
        'budget_expect',
        'budget_month',
        'created_at',
        'updated_at',
    ];
}
