<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceServices extends Model
{
    use HasFactory;

    protected $table = 'finance_services';
    protected $guarded = array();
}
