@extends('layouts.master')
@section('menu')
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 dleft">
            <h1>list of topics<h1>
            <ul style="list-style-type:none">
                @foreach ($topics as $t)
                    <li>
                        <a href="{{ url('topic/' . $t->id) }}">
                            {{ $t->topicname }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-9 col-md-9 col-lg-9 dright">
        </div>
    </div>
@endsection
