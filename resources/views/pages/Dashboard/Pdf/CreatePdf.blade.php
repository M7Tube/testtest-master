@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Create Pdf') }}</title>
@endsection
@section('body')
    @livewire('dashboard.pdf.create-pdf')
@endsection
