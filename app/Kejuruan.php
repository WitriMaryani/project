<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kejuruan extends Model
{
    //
    protected $table = 'kejuruans';
    protected $fillable = ['Kd_kejuruan','Nama_kejuruan','Keterangan'];
    protected $visible = ['Kd_kejuruan','Nama_kejuruan','Keterangan'];
    public $timestamps = true;

    public function sub_kejuruan()
    {
    	return $this->hasMany('App\Sub_kejuruan','id_kejuruan');
    }
    public function program()
    {
    	return $this->hasMany('App\program','id_kejuruan');
    }
}
