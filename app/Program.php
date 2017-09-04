<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $table = 'programs';
    protected $fillable = ['Kd_program','Kd_sub_kejuruan','Nama_sub_kejuruan','Kd_kejuruan','Keterangan'];
    protected $visible = ['Kd_program','Kd_sub_kejuruan','Nama_sub_kejuruan','Kd_kejuruan','Keterangan'];
    public $timestamps = true;

    public function kejuruan()
    {
    	return $this->belongsTo('App\kejuruan','id_kejuruan');
    }
    public function sub_kejuruan()
    {
    	return $this->belongsTo('App\Sub_kejuruan','id_sub_kejuruan');
    }
}
