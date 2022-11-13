@extends('layouts.singlepageLayout')
@section('title', __('Items'))
@section('body')
    @livewire('items.show-item')
@endsection
