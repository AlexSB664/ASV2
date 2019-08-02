<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class GiftExchange extends Model
{
    
    //use RecordsActivity;

    protected $table='gift_exchange';
    protected $guarded = [];

    public function path()
    {
        return "/{$this->name}";
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(){
        return 'name';
    }

    public function friends()
    {
        return $this->hasMany(Friend::class,'ge_id','id');
    }

    public function setClave_PrivadaAttribute($value)
    {
        $this->attributes['clave_privada'] = Crypt::encode($value);
    }
}
