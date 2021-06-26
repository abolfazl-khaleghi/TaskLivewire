<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Taskcomponet extends Component
{
    public $name;
    public $newtask;
    public $task_Array=["task1","task2"];

    public function addNewTask()
    {
        array_push($this->task_Array,$this->newtask);
    }

    public function mount($name){
        $this->name =$name;
    }
    public function render()
    {
        return view('livewire.taskcomponet');
    }
}
