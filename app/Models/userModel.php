<?php

namespace App\Models;

use App\Models\transactionModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class userModel extends Model
{
    public $table = "user";
    use HasFactory;
    protected $guarded = ['id'];

    public function transactionModel()
    {
        return $this->hasMany(transactionModel::class);
    }
}
