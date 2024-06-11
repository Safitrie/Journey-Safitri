<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'place';

    public $timestamps = false;

    protected $fillable = [
        'nama_tempat', 'alamat', 'image',
    ];
    protected $primaryKey = 'id';
}
