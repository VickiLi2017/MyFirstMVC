@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ str_replace_first('body','Task title',$error) }}</li>
            @endforeach
        </ul>
    </div><br />
@endif