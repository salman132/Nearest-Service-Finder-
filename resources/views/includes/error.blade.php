<ul class="list-group py-5">
    @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">
            {{$error}}
        </li>

    @endforeach
</ul>