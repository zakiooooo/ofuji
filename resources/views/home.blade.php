@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">My Profile</div>

                <div class="panel-body col-xs-4">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => ['upload', $user->id], 'method' => 'post', 'files' => true ]) !!}

                    {{--成功時のメッセージ--}}
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    {{-- エラーメッセージ --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                    
                    <div class="form-group text-center thumbnail">
                        @if ($user->avatar_filename)
                        <div class="prof">
                            <p>
                                <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" alt="avatar" />
                            </p>
                        </div>
                        @endif
                        
                        {!! Form::label('file', 'プロフィール画像', ['class' => 'control-label']) !!}
                        @if($user->id == Auth::user()->id)
                        {!! Form::file('file') !!}
                        {!! Form::submit('アップロード', ['class' => 'btn btn-xs btn-primary']) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                    
    
                </div>
                <div class="user-name col-xs-8">
                    <h1>{{ $user->name }}</h1>
                    {{$user->prof}}
                    @if($user->id == Auth::user()->id)
                    <div>
                        <a href="{{ route('prof.edit', ['id' => $user->id]) }}">Edit Profile</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
