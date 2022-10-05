<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;

    public function meals(){
        return $this->belongsToMany(Meals::class);
    }

    public function title($lang = 'hr'){
        $translation = Translations::query()->where('table_name', 'ingredients')->where('resource_id',$this->id)->where('resource_name','title')->first();
        if($translation){
            return $translation->$lang;
        }else{
            return '';
        }
    }
}
