@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Edit Pdf') }}</title>
@endsection
@section('body')
    @livewire('dashboard.pdf.edit-pdf')
@endsection
