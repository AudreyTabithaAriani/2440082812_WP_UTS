<?php

namespace App\Models;

use App\Models\categories;
use App\Models\transactionModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class coffeeModel extends Model
{
    public $table = "coffee";
    use HasFactory;
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }

    public function transactionModel()
    {
        return $this->hasMany(transactionModel::class);
    }
}
