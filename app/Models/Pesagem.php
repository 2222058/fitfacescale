<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesagem extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}

protected $fillable = ['user_id', ',nome', 'data_pesagem', 'peso'];


}
