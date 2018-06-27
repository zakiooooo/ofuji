@extends('layouts.app')

@section('content')
    @if (count($users) > 0)
    <ul class="media-list">
    @foreach ($users as $user)
        <div class="user-list">
            <li class="media col-lg-offset-5 col-lg-2 col-md-offset-4 col-md-4 col-xs-offset-2 col-xs-8">
                <div class="media-left">
                    <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" alt="avatar" />
                </div>
                <div class="media-body">
                    <div>
                        {{ $user->name }}
                    </div>
                    <div>
                        <p>{!! link_to_route('home', 'View profile', ['id' => $user->id]) !!}</p>
                    </div>
                </div>
            </li>
        </div>
    <! - Omission ->
    @endforeach
    </ul>
    {!! $users->render() !!}
    @endif
@endsection