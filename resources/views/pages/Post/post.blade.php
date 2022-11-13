@extends('layouts.singlepageLayout')
@section('title', __('Blog'))
@section('body')
    @livewire('post.post')
@endsection
