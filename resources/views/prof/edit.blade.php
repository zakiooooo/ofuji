@extends('layouts.app')

@section('content')

<div>
      <h1>{{$user->name}}のプロフィール文編集したいのか！？</h1>
</div>
<div>
      {{$user->prof}}
</div>
{!! Form::open(['route' => ['prof.post', $user->id]]) !!}
      <div class="form-group">
          {!! Form::textarea('prof', old('prof'), ['class' => 'form-control', 'rows' => '2']) !!}
          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
      </div>
{!! Form::close() !!}

@endsection