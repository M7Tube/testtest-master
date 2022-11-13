@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Pdf') }}</title>
@endsection
@section('body')
    @livewire('dashboard.pdf.pdf')
@endsection
