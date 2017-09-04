<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Kejuruan extends Model
{
    //
    protected $table = 'sub_kejuruans';
    protected $fillable = ['Kd_sub_kejuruan','Nama_sub_kejuruan','Kd_kejuruan','Keterangan'];
    protected $visible = ['Kd_sub_kejuruan','Nama_sub_kejuruan','Kd_kejuruan','Keterangan'];
    public $timestamps = true;

    public function program()
    {
    	return $this->hasMany('App\program','id_sub_kejuruan');
    }
}
