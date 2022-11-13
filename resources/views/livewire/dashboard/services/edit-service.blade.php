<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                    <form wire:submit.prevent="edit({{ request()->query('id') }})">
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
                                                                        <div class="col-md-12 form-group" wire:ignore>
                                                                            <label
                                                                                for="">{{ __('English Description') }}</label>
                                                                            <textarea type="text" wire:model="en_desc" class="ckeditor" id="en_desc"></textarea>
                                                                            <script>
                                                                                const editor1 = CKEDITOR.replace('en_desc');
                                                                                editor1.on('change', function(event) {
                                                                                    console.log(event.editor.getData())
                                                                                    @this.set('en_desc', event.editor.getData());
                                                                                })
                                                                            </script>
                                                                        </div>
                                                                        {{-- <input class="form-control" id="en_desc"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="en_desc" /> --}}
                                                                        <span class="text-danger">
                                                                            @error('en_desc')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        {{-- <label>{{ __('English Description') }}
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
                                                                        <div class="col-md-12 form-group" wire:ignore>
                                                                            <label
                                                                                for="">{{ __('Arabic Description') }}</label>
                                                                            <textarea type="text" wire:model="ar_desc" class="ckeditor" id="ar_desc"></textarea>
                                                                            <script>
                                                                                const editor2 = CKEDITOR.replace('ar_desc');
                                                                                editor2.on('change', function(event) {
                                                                                    console.log(event.editor.getData())
                                                                                    @this.set('ar_desc', event.editor.getData());
                                                                                })
                                                                            </script>
                                                                        </div>
                                                                        {{-- <input class="form-control" id="ar_desc"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="ar_desc" /> --}}
                                                                        <span class="text-danger">
                                                                            @error('ar_desc')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        {{-- <label>{{ __('Arabic Description') }}
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
                                                                        <input class="form-control" id="icon"
                                                                            type="file" autocomplete="off"
                                                                            wire:model="icon" />
                                                                        <span class="text-danger">
                                                                            @error('icon')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Icon') }}
                                                                        </label>
                                                                        {{-- <u><a href="https://icons.getbootstrap.com"
                                                                                target="blank">Get It From Here</a></u> --}}
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
                                                                        <input class="form-control" id="btn_text"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="btn_text" />
                                                                        <span class="text-danger">
                                                                            @error('btn_text')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Button Text') }}
                                                                        </label>
                                                                        {{-- <u><a href="https://icons.getbootstrap.com"
                                                                                target="blank">Get It From Here</a></u> --}}
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
                            {{--  --}}
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
                                                                        <input class="form-control" id="btn_link"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="btn_link" />
                                                                        <span class="text-danger">
                                                                            @error('btn_link')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Button Link') }}
                                                                        </label>
                                                                        {{-- <u><a href="https://icons.getbootstrap.com"
                                                                                target="blank">Get It From Here</a></u> --}}
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
