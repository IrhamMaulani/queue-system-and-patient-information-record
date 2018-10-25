<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProsesPendaftaran extends Model
{
    protected $table = 'proses_pendaftaran';

    public function pasien()
    {
        return $this->hasMany('App\Pasien','proses_pendaftaran_id');
    }
}
