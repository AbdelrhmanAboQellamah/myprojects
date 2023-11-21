<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','slug','description','image_path','user_id'
    ];

    //انت كدا بتقوله ان دي الحجات اللي بتتملي

    public function user(){
        return $this->belongsTo(User::class);
    }
    //كدا انت بتقوله ان البوست ميقدر يستخدم الا نوع واحد من التيبول زي اليوزر للبوست الواحد 
    //يعني بتعمل امبورت للكلاس اللي في مودل اليوزر بس  بالبراميتر اللي انت اديتها اللي هي بيلونجس تو بتقولانك تاخد حاجه واحده باين
}
