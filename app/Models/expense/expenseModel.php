<?php

namespace App\Models\expense;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expenseModel extends Model
{
    use HasFactory;

    protected $connection = 'mysqlEXMS';
    protected $table = 'expense';
    protected $fillable = [
        'expense_id',
        'expense_date',
        'expense_item',
        'expense_price',
        'expense_remark',
        'updated_at',
        'created_at',
    ];
}
