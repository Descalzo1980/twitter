@if($users->count())
    <div>
        Followed ({{ $users->count() }}):
        <ul>
            @foreach($users as $user)
                <li>
                    @include('users._link')
                </li>
            @endforeach
        </ul>
    </div>
@endif