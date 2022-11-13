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
                                                                            id="work_complated" type="text"
                                                                            autocomplete="off"
                                                                            wire:model="work_complated" />
                                                                        <span class="text-danger">
                                                                            @error('work_complated')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('lang.Work Complated') }}
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
                                                                            id="years_of_experience" type="text"
                                                                            autocomplete="off"
                                                                            wire:model="years_of_experience" />
                                                                        <span class="text-danger">
                                                                            @error('years_of_experience')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('lang.Years Of Experience') }}
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
                                                                            id="total_clients" type="text"
                                                                            autocomplete="off"
                                                                            wire:model="total_clients" />
                                                                        <span class="text-danger">
                                                                            @error('total_clients')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('lang.Total Clients') }}
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
                                                                            id="award_won" type="text"
                                                                            autocomplete="off"
                                                                            wire:model="award_won" />
                                                                        <span class="text-danger">
                                                                            @error('award_won')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('lang.Award Won') }}
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
                                class="mx-auto w-100 btn btn-block btn-outline-success">{{ __('lang.Edit') }}
                                <i class="bi bi-pencil-fill"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
