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
         'user_id',
         'language'
    ];

    // public function getlist()
    // {
    //     return $this->all();
    // }

    

    public function updateTask($data){
        $this->task = $data['todo'];
        $this->description = $data['description'];
        $this->language = json_encode($data['language']);
        // $this->user_id = $data['user_id'];
        $this->save();

        return $this;
    }
   
}