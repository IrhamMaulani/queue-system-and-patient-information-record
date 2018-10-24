<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';

    public function prosesPendaftaran()
{
    return $this->belongsTo('App\ProsesPendaftaran','pasien_id');
}
}
