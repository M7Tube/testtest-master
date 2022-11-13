<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">{{ __('Items') }}</h6>
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
                                        {{ __('Buy Link') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Buy Link Text') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('English Buy Link Title Text') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Arabic Buy Link Title Text') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Free Email') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Email text') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Email file') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Price') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Picture') }}</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('User') }}</th>
                                    <th class=""> <a href="{{ route('CreateItem', app()->getLocale()) }}"
                                            class="text-white btn-success btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            {{ __('Create') }}
                                        </a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $data)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->en_name ?? '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->ar_name ?? '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"> {!! $data->en_desc ?? '' !!}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{!! $data->ar_desc ?? '' !!}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->buy_link ?? '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->buy_link_text ?? '' }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $data->en_buy_link_title_text ?? '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $data->ar_buy_link_title_text ?? '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $data->free_item_with_email_send ?? '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->email_text ?? '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->email_file ?? '' }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->price ?? '' }}</p>
                                        </td>
                                        <td>

                                            <p class="text-xs font-weight-bold mb-0"><img
                                                    src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $data->picture)) !!}"
                                                    alt="Picture" width="125px"></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $data->user->name ?? '' }}</p>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('EditItem', [app()->getLocale(), 'id' => $data->item_id]) }}"
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
            {{ $items->links() }}
        </div>
    </div>
</div>
