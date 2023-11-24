<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    protected $fillable = [
        "id",
        "user_id",
        "date",
        "status",
        "payment_method",
        "created_at",
        "updated_at",
    ];
}
