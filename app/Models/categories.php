<?php

namespace App\Models;

use App\Models\coffeeModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categories extends Model
{
    public $table = "categories";
    use HasFactory;

    protected $guarded = ['id'];

    public function coffeeModel()
    {
        return $this->hasMany(coffeeModel::class);
    }
}
