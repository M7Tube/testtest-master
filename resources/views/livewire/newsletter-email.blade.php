<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-lg p-5">
                <form wire:submit.prevent="subscribe">
                    <h4>{{ __('Email Campaign') }}</h4>
                    <div class="results">
                        @if ($message)
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-floating mb-1">
                                <input class="form-control" id="email" type="text" wire:model="email"
                                    autocomplete="off" required/>
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <label>{{ __('Subscribe') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="h-100 w-100 btn btn-block btn-outline-success">
                                {{ __('Subscribe') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
