<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DormitoryRoomCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];


    public function dormitory_category()
    {
        return $this->belongsTo(DormitoryCategory::class);
    }
}
