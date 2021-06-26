<div>
   <div class="main_div">
        <div class="container">
            <h2 class="text-center"> my name is : {{$name}}</h2>
            <h3 class="text-center">{{$newtask}}</h3>
        </div>
        <div>

            <button class="btn btn-success mx-1" wire:click="addNewTask">افزودن</button>
            <input type="text" class="from-control mx-1" wire:model="newtask">
        </div>
        <ul>
            @foreach ($task_Array as $task)
                <li class="list-task"> {{$task}}</li>
            @endforeach

        </ul>
       </div>
   </div>

</div>
