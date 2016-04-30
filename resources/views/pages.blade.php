@extends('layouts.base')

@section('title', $title)

@section('content')
    <div class="docs-container container">
        <div class="col-xs-10 col-xs-offset-1">
            <div style="padding: 40px 10px; margin: 20px 0">
                {!! $content !!}
            </div>
        </div>
    </div>
@stop