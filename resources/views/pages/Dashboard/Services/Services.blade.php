@extends('layouts.newdashboard')
@section('head')
    <title>{{ __('Services') }}</title>
@endsection
@section('body')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{ __('Services') }}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('English Title') }}</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('Arabic Title') }}</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('English Descriptions') }}</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('Arabic Descriptions') }}</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('Icon') }}</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('Button Text') }}</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            {{ __('Button Link') }}</th>
                                        <th class=""> <a href="{{ route('CreateService', app()->getLocale()) }}"
                                                class="text-white btn-success btn font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                {{ __('Create') }}
                                            </a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($S as $data)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $data->en_name }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $data->ar_name }}</p>
                                            </td>
                                            <td>
                                                {{--  --}}
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <!-- Button trigger modal  -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#english{{ $loop->index }}">
                                                        {{ __('View Description') }}
                                                    </button>
                                                <div class="modal fade" id="english{{ $loop->index }}" tabindex="-1"
                                                    aria-labelledby="english{{ $loop->index }}Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="english{{ $loop->index }}Label">English
                                                                    Description</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! $data->en_desc !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"></p>
                                                {{--  --}}
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <!-- Button trigger modal  -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#arabic{{ $loop->index }}">
                                                        {{ __('View Description') }}
                                                    </button>
                                                <div class="modal fade" id="arabic{{ $loop->index }}" tabindex="-1"
                                                    aria-labelledby="arabic{{ $loop->index }}Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="arabic{{ $loop->index }}Label">Arabic
                                                                    Description</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! $data->ar_desc !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><img
                                                        src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $data->icon)) !!}"
                                                        alt="picture" width="150px"></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $data->btn_text }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $data->btn_link }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('EditService', [app()->getLocale(), 'id' => $data->service_id]) }}"
                                                    class="btn-outline-success font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    {{ __('Edit') }}
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>{{ __('Empty') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $S->links() }}
            </div>
        </div>
    </div>
@endsection
