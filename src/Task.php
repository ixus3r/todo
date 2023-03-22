<?php

namespace Yuliyandoev\Todo;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'yuliyandoev_tasks';
    public function category()
    {
        return $this->belongsTo('Yuliyandoev\Todo\Category');
    }
}
