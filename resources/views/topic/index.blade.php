@extends('layouts.master')
@section('menu')
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
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
        <div class="col-sm-9 col-md-9 col-lg-9">
            @if ($id != 0)
                @foreach ($blocks as $b)
                    <div>
                        <h2>{{ $b->title }}</h2>
                    </div>
                    <div class="d-flex flex-row">
                        @if ($b->imagesPath != '')
                            <a href="{{ url($b->imagesPath) }}" style="margin: 20px" class="wrap-image">
                                <img src={{ asset($b->imagesPath) }} height="150px" />
                            </a>
                        @endif
                        <pre class="">{{ $b->content }}</pre>
                    </div>
                    <div class="d-flex justify-content-end">
                        {!! Form::open(['route' => ['block.destroy', $b->id]]) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        <button class="btn btn-xs btn-danger " type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg>

                        </button>
                        {!! Form::close() !!}

                        {!! Form::model($b, ['route' => ['block.update', $b->id]]) !!}
                        {!! Form::hidden('_method', 'PUT') !!}
                        <a class="btn btn-xs btn-info" href={{ url('block/' . $b->id . '/edit') }}>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pen" viewBox="0 0 16 16">
                                <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg>

                        </a>
                        {!! Form::close() !!}
                    </div>
                    <br><br>
                @endforeach
            @endif
        </div>
    </div>
@endsection
