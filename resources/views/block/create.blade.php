@extends('layouts.app')
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
    {{-- , 'files' => true, 'class' => 'form' --}}
    {!! Form::model($block, ['route' => 'blockcreate', 'files' => true, 'class' => 'form']) !!}
    <div class='form-group'>
        {!! Form::label('topicid', 'Select Topic', ['class' => 'col-md-2']) !!}
        {!! Form::select('topicid', $topics, ['class' => 'col-md-8']) !!}
        <a href="{{ url('topic/create') }}" class="btn btn-sm btn-info col-md-2" type="submit">Add new topic</a>
    </div>
    <div class="form-group">
        {!! Form::label('blocktitle', 'Block Title', ['class' => 'col-md-2']) !!}
        {!! Form::text('title', '', ['class' => 'col-md-10']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Add Block content', ['class' => 'col-md-2']) !!}
        {!! Form::textarea('content', '', ['class' => 'col-md-10', 'cols' => '', 'rows' => '']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('imagepath', 'Add Image', ['class' => 'col-md-2']) !!}
        {!! Form::file('imagepath', ['class' => 'col-md-10']) !!}
    </div>
    <button class="btn btn-success" type="submit">Add Block</button>
    {!! Form::close() !!}
@endsection
