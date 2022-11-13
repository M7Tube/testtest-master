@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Statistics') }}</title>
@endsection
@section('body')
    @livewire('dashboard.statistics.statistics')
@endsection
