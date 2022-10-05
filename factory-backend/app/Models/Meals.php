<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Meals extends Model
{
    use HasFactory;

    public string $status = 'created';

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tags::class);
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredients::class);
    }

    public function title($lang = 'hr'){
        $translation = Translations::query()->where('table_name', 'meals')->where('resource_id',$this->id)->where('resource_name','title')->first();
        return $translation->$lang;
    }

    public function description($lang = 'hr'){
        $translation = Translations::query()->where('table_name', 'meals')->where('resource_id',$this->id)->where('resource_name','description')->first();
        return $translation->$lang;
    }
}
