<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [        
        'name','position','date','time','endtime','user_id','slot_no', 'faculty',
    ];
}
