<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable=[
       'task',
       'description',
       'completed',
         'user_id'
    ];

    // public function getlist()
    // {
    //     return $this->all();
    // }

    

    public function updateTask($data){
        $this->task = $data['todo'];
        $this->description = $data['description'];
        // $this->user_id = $data['user_id'];
        $this->save();

        return $this;
    }
   
}