@extends('layouts.app')
@section('menu')
    @parent
@endsection
@section('content')
    {{-- <div class="d-flex justify-content-centr align-items-centr"> --}}
    {{ Form::model($block, ['route' => ['block.update', $block->id], 'method' => 'PUT', 'files' => true]) }}
    <div class='form-group'>
        {!! Form::label('topicid', 'Select Topic', ['class' => 'col-md-2']) !!}
        {!! Form::select('topicid', $topics, null, ['id' => 'topicid', 'class' => 'col-md-8', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('blocktitle', 'Block Title', ['class' => 'col-md-2']) !!}
        {!! Form::text('title', $block->title, ['class' => 'col-md-10']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Add Block content', ['class' => 'col-md-2']) !!}
        {!! Form::textarea('content', $block->content, ['class' => 'col-md-10', 'cols' => '', 'rows' => '']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('imagepath', 'Add Image', ['class' => 'col-md-2']) !!}
        {!! Form::file('imagepath', ['class' => 'col-md-10']) !!}
    </div>
    {{ Form::submit('Save Block', ['class' => 'btn btn-success']) }}

    {!! Form::close() !!}
    {{-- </div> --}}
@endsection
