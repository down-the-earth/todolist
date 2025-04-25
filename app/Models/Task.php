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

    public function updateTask($data){
        $this->task = $data['todo'];
        $this->description = $data['description'];
        $this->save();

        return $this;
    }
   
}