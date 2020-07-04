<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['amount', 'budget', 'ministry_id', 'warrant', 'remark', 'description', 'attachment']; 
}
