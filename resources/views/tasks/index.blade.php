<!--ndex.blade.php -->

<ul>
    @foreach ($tasks as $task)
        <li>
            <a href="/MyFirstMVC/public/tasks/{{$task->id}}">
                {{ $task->body }}
            </a>
        </li>
    @endforeach
</ul>











