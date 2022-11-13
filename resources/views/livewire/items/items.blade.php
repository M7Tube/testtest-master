<div>
    <div class="d-flex justify-content-center">
        <div wire:loading>
            <div class="lds-roller mx-auto  mt-5">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <section id="items" class="portfolio-mf route" wire:init="loadData" wire:loading.remove>
        <div class="container mb-5">
            <div class="row">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        {{ __('Items') }}
                    </h3>
                    <p class="subtitle-a">
                        {{ __('Books and files that will help you develop yourself and develop your project') }}
                    </p>
                    <div class="line-mf"></div>
                </div>
                @if ($items)
                    @forelse ($items as $item)
                        <div class="col-md-4">
                            <a href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                                style="text-decoration: none;">
                                <div class="work-box">
                                    <div class="work-img">
                                        <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}"
                                            alt="Picture" class="img-fluid"
                                            style="width: 100%;
                                        height: 20vw;
                                        object-fit: fill;">
                                    </div>
                                    <div class="work-content">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h2 class="w-title">
                                                    {{ app()->getLocale() == 'ar' ? $item->ar_name ?? '' : $item->en_name ?? '' }}
                                                </h2>
                                                <div class="w-more">
                                                    <span class="text-center"><a
                                                            href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                                                            class="text-primary text-center">
                                                            {{ __('Read More') }}</a></span><br>
                                                    {{-- <span class="w-date">{{ $item->created_at }}</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <h4 class="text-center">{{ __('Empty') }}</h4>
                    @endforelse
                    {{ $items->links() }}
                @endif
            </div>
        </div>
    </section><!-- End Portfolio Section -->
</div>
