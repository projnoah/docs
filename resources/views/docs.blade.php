@extends('layouts.base')

@section('title', $title)

@section('content')
    <div class="docs-container container">
        <aside class="sidebar">
            {!! $index !!}
        </aside>
        <article>
            {!! $content !!}
        </article>
    </div>
@stop