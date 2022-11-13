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
                                                                        {{-- <textarea class="form-control" id="en_desc" type="text" autocomplete="off" wire:model="en_desc"></textarea> --}}
                                                                        <span class="text-danger">
                                                                            @error('en_desc')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        {{-- <label>{{ __('English Descriptions') }}
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
                                                                        {{-- <textarea class="form-control" id="ar_desc" type="text" autocomplete="off" wire:model="ar_desc"></textarea> --}}
                                                                        <span class="text-danger">
                                                                            @error('ar_desc')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        {{-- <label>{{ __('Arabic Descriptions') }}
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
                                                                        <input class="form-control" id="buy_link"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="buy_link">
                                                                        <span class="text-danger">
                                                                            @error('buy_link')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Buy Link') }}
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
                                                                        <input class="form-control" id="price"
                                                                            type="text" autocomplete="off"
                                                                            wire:model="price">
                                                                        <span class="text-danger">
                                                                            @error('price')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Price') }}
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
                                                                        <input class="form-control" id="picture"
                                                                            type="file" autocomplete="off"
                                                                            wire:model="picture" />
                                                                        <span class="text-danger">
                                                                            @error('picture')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                        <label>{{ __('Picture') }}
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
                            @if ($picture)
                                <div class="col-12">
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
                                                                            Picture Preview:

                                                                            <img src="{{ $picture->temporaryUrl() }}"
                                                                                width="500px">
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
                            @endif

                            <input type="hidden" wire:model="user_id">
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
