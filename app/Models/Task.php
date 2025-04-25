<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=[
       'task',
       'description',
       'completed'
    ];

    public function getlist()
    {
        return $this->all();
    }

    // public function delete($id){
        
    // }

    // public function update($id,$data){
    //     $task =Task::find($id);
    //     if($task){
    //         $task->task = $data['todo'];
    //         $task->description = $data['description'];
    //         $task->completed = $data['completed'];
    //         $task->save();
    //     }
    //     return $task;
    // }
   
}