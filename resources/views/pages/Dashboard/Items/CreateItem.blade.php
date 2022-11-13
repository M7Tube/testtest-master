@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Create Item') }}</title>
@endsection
@section('body')
    @livewire('dashboard.items.create-item')
@endsection
