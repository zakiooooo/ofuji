@extends('layouts.app')

@section('content')
    @foreach ($cafemenus as $cafemenu)
        <div class="text-center">
            <img src="{{ asset('storage/avatar/' . $cafemenu->cafe_menu) }}" alt="aaaa" />
        </div>
        <div class="text-center">
            {{ $cafemenu->content }}
            <div class="btn-group" role="group">
                @if (Auth::user()->id == $cafemenu->user_id)
                    {!! Form::open(['route' => ['cafe.destroy', $cafemenu->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                    <?php echo $cafemenu->id; ?>
                @endif
            </div>
        </div>
    @endforeach
    <div>
        <a href="{{ route('cafe.add', ['id' => Auth::user()->id]) }}">Add Cafe-Menu</a>
    </div>
@endsection