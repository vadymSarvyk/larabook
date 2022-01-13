@extends('layouts.master')
@section('menu')
    @parent
@endsection
@section('content')

    <div class="label label-info">{{ $page }}</div>
    @if (session('errors'))
        <div class="alert alert-danger">
            @foreach (session('errors')->all() as $er)
                {{ $er }}<br />
            @endforeach
        </div>
    @endif
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {!! Form::model($block, ['action' => 'BlockController@store', 'files' => true, 'class' => 'form']) !!}
    <div>

    </div>
    {!! Form::close() !!}
@endsection
