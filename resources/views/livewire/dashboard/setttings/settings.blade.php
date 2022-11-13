<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                {{-- <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">{{ __('Craete Spcial Ad') }} <i
                            class="bi bi-badge-ad-fill"></i></h3>
                </div> --}}
                <div class="card-body">
                    <form wire:submit.prevent="edit">
                        @csrf
                        <div class="results">
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
                        </div>
                        <div class="results">
                            @if ($message)
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control"
                                                                            id="en_peronal_name" type="text"
                                                                            autocomplete="off"
                                                                            wire:model="en_peronal_name" />
                                                                        <span class="text-danger">
                                                                            @error('en_peronal_name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('English Personal Name') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control"
                                                                            id="ar_peronal_name" type="text"
                                                                            autocomplete="off"
                                                                            wire:model="ar_peronal_name" />
                                                                        <span class="text-danger">
                                                                            @error('ar_peronal_name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Arabic Personal Name') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    {{ __('English Personal Description') }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <textarea rows="5" class="form-control" id="en_peronal_desc" type="text" autocomplete="off"
                                                                        wire:model="en_peronal_desc"></textarea>
                                                                    <span class="text-danger">
                                                                        @error('en_peronal_desc')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                    {{-- <label>{{ __('English Personal Description') }}
                                                                        </label> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    {{ __('Arabic Personal Description') }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <textarea rows="5" class="form-control" id="ar_peronal_desc" type="text" autocomplete="off"
                                                                        wire:model="ar_peronal_desc"></textarea>
                                                                    <span class="text-danger">
                                                                        @error('ar_peronal_desc')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                    {{-- <label>{{ __('Arabic Personal Description') }}
                                                                    </label> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="en_job_title"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="en_job_title" />
                                                                        <span class="text-danger">
                                                                            @error('en_job_title')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('English Job Title') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="ar_job_title"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="ar_job_title" />
                                                                        <span class="text-danger">
                                                                            @error('ar_job_title')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Arabic Job Title') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="en_skills"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="en_skills" />
                                                                        <span class="text-danger">
                                                                            @error('en_skills')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('English Skills') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="ar_skills"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="ar_skills" />
                                                                        <span class="text-danger">
                                                                            @error('ar_skills')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Arabic Skills') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    {{ __('English Contact With Us Message') }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <textarea rows="5" class="form-control" id="en_contactWithUs_message" type="text" autocomplete="off"
                                                                        wire:model="en_contactWithUs_message"></textarea>
                                                                    <span class="text-danger">
                                                                        @error('en_contactWithUs_message')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                    {{-- <label>{{ __('English Personal Description') }}
                                                                        </label> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    {{ __('Arabic Contact With Us Message') }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <textarea rows="5" class="form-control" id="ar_contactWithUs_message" type="text" autocomplete="off"
                                                                        wire:model="ar_contactWithUs_message"></textarea>
                                                                    <span class="text-danger">
                                                                        @error('ar_contactWithUs_message')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                    {{-- <label>{{ __('Arabic Personal Description') }}
                                                                    </label> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    {{ __('Home page hero picture') }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input class="form-control" id="big_personal_pic" type="file" autocomplete="off"
                                                                        wire:model="big_personal_pic" />
                                                                    <span class="text-danger">
                                                                        @error('big_personal_pic')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                    {{-- <label>{{ __('Arabic Personal Description') }}
                                                                    </label> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    {{ __('Home page profile picture') }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input class="form-control" id="small_personal_pic" type="file" autocomplete="off"
                                                                        wire:model="small_personal_pic" />
                                                                    <span class="text-danger">
                                                                        @error('small_personal_pic')
                                                                            {{ $message }}
                                                                        @enderror
                                                                    </span>
                                                                    {{-- <label>{{ __('Arabic Personal Description') }}
                                                                    </label> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="email"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="email" />
                                                                        <span class="text-danger">
                                                                            @error('email')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Email') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="phone"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="phone" />
                                                                        <span class="text-danger">
                                                                            @error('phone')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Phone Number') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="instagram"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="instagram" />
                                                                        <span class="text-danger">
                                                                            @error('instagram')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Instagram') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="whatsapp"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="linkedIn" />
                                                                        <span class="text-danger">
                                                                            @error('linkedIn')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('whatsapp') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="twitter"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="twitter" />
                                                                        <span class="text-danger">
                                                                            @error('twitter')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Twitter') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="facebook"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="facebook" />
                                                                        <span class="text-danger">
                                                                            @error('facebook')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Facebook') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="my-2 col-12">
                                        <div class="Scard card shadow-lg border-2 rounded-lg">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body text-right">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-floating mb-1">
                                                                        <input class="form-control" id="location"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="location" />
                                                                        <span class="text-danger">
                                                                            @error('location')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Location') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit"
                                class="mx-auto w-100 btn btn-block btn-outline-success">{{ __('Edit') }}
                                <i class="bi bi-pencil-fill"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
