<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priviledge extends Model
{
    protected $table = 'priviledges';
    protected $primarykey = 'id';

    protected $fillable= [
    	'priviledge_name', 'updated_at', 'created_at'
    ];

}
