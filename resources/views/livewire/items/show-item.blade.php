<div>
    <div class="hero hero-single route bg-image" style="background-image: url({{ asset('/img/overlay-bg.jpg') }}">
        <div class="overlay-mf"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    @if (app()->getLocale() == 'ar')
                        <h2 class="hero-title mb-4">{{ $item->ar_name }}</h2>
                    @else
                        <h2 class="hero-title mb-4">{{ $item->en_name }}</h2>
                    @endif
                    {{-- <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Library</a>
                        </li>
                        <li class="breadcrumb-item active">Data</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </div>

    <main id="main">

        <!-- ======= Blog Single Section ======= -->
        <section class="blog-wrapper sect-pt4" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-box">
                            <div class="post-thumb">
                                <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}" class="img-fluid"
                                    style="width: 100%;
                                height: 50vw;
                                object-fit: fill;"
                                    alt="">
                            </div>
                            <div class="post-meta">
                                @if (app()->getLocale() == 'ar')
                                    <h1 class="article-title">{{ $item->ar_name }}</h1>
                                @else
                                    <h1 class="article-title">{{ $item->en_name }}</h1>
                                @endif
                                <ul>
                                    <li>
                                        <span class="bi bi-person"></span>
                                        <a href="#">{{ $item->user->name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="article-content">
                                @if (app()->getLocale() == 'ar')
                                    <p>
                                        {!! $item->ar_desc !!}
                                    </p>
                                @else
                                    <p>
                                        {!! $item->en_desc !!}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        @if ($item->free_item_with_email_send == 0)
                            <div class="widget-sidebar sidebar-search mx-auto">
                                <h5 class="sidebar-title text-center">
                                    {{ app()->getLocale() == 'ar' ? $item->ar_buy_link_title_text ?? '' : $item->en_buy_link_title_text ?? '' }}
                                    <strong>{{ $item->price == null ? __('Free') : $item->price . '$' }}</strong>
                                </h5>
                                <div class="sidebar-content">
                                    <form>
                                        <div class="input-group">
                                            <a class="btn btn-block w-50 btn-outline-success mx-auto"
                                                href="{{ $item->buy_link }}" target="blank"><i
                                                    class="bi bi-cart-check"></i>
                                                {{ $item->buy_link_text ?? '' }}</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="widget-sidebar sidebar-search mx-auto">
                                <h5 class="sidebar-title text-center">
                                    {{ app()->getLocale() == 'ar' ? $item->ar_buy_link_title_text ?? '' : $item->en_buy_link_title_text ?? '' }}
                                </h5>
                                <div class="sidebar-content">
                                    <form wire:submit.prevent="send_email">
                                        <div class="input-group">
                                            <input class="form-control" type="email" wire:model.lazy="email" place>
                                            <button type="submit"
                                                class="btn btn-block w-50 btn-outline-success mx-auto">
                                                {{ $item->buy_link_text ?? '' }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
</div>
