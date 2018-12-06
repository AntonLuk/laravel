<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    function position() {
        return $this->belongsTo("App/Positions", "positions_id");
    }
}


$worker = Worker::selectRaw('id as `Номер`, positions.Name as Должность')
    ->where('id', ...)
    ->leftJoin()

 $workers = Worker::paginate(10);
$workers->map(function ($worker) {
   $position = $worker->position;
   $worker = $worker-toArray();
   $worker['position_name'] = $position->Name;
   unset($worker->positions_id);
   return $worker;
});
