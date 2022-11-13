<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                    <form wire:submit.prevent="create">
                        @csrf
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
                                                                        <input class="form-control" id="en_name"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="en_name" />
                                                                        <span class="text-danger">
                                                                            @error('en_name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('English Name') }}
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
                                                                        <input class="form-control" id="ar_name"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="ar_name" />
                                                                        <span class="text-danger">
                                                                            @error('ar_name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Arabic Name') }}
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
                                                                        <input class="form-control" id="percent"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="percent" />
                                                                        <span class="text-danger">
                                                                            @error('percent')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Percent') }}
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
                                class="mx-auto w-100 btn btn-block btn-outline-success">{{ __('Create') }}
                                <i class="bi bi-file-earmark-plus"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
