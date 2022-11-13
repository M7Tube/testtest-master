<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                    <form wire:submit.prevent="edit">
                        @csrf
                        <div class="row">
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
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-1">
                            <button type="submit"
                                class="mx-auto w-100 btn btn-block btn-outline-success">{{ __('Edit') }}
                                <i class="bi bi-pencil-fill"></i></button>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-1">
                            <button wire:click.prevent="delete()"
                                class="mx-auto w-100 btn btn-block btn-outline-danger">{{ __('Delete') }}
                                <i class="bi bi-trash"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
