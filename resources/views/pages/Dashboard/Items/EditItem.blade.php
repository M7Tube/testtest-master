@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Edit Item') }}</title>
@endsection
@section('body')
    @livewire('dashboard.items.edit-items')
@endsection
