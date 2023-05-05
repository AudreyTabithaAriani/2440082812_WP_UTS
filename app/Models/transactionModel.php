<?php

namespace App\Models;

use App\Models\userModel;
use App\Models\coffeeModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class transactionModel extends Model
{
    public $table = "transaction";
    use HasFactory;
    protected $guarded = ['id'];

    public function userModel()
    {
        return $this->belongsTo(userModel::class, 'user_id');
    }

    public function coffeeModel()
    {
        return $this->belongsTo(coffeeModel::class, 'coffee_id');
    }
}
