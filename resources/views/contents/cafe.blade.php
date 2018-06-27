@extends('layouts.app')

@section('content')
<?php
$user = Auth::user();
?>
@if($user->id == 5)
{!! Form::open(['route' => ['cafe.post', $user->id], 'files' => true]) !!}

    <div class="form-group">
        {!! Form::label('cafe_menu', 'Cafeteria-Menu追加', ['class' => 'control-label']) !!}
        {!! Form::file('cafe_menu') !!}
        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}
@endif
@endsection