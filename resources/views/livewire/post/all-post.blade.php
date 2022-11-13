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
    <section id="blog" class="blog-mf route" wire:init="loadData" wire:loading.remove>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            {{ __('Blog') }}
                        </h3>
                        <p class="subtitle-a">
                            {{ __('Articles that will help you develop your project and develop yourself') }}
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($posts)
                    @forelse ($posts as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card card-blog">
                                <div class="card-img">
                                    <a href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}"><img
                                            src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $post->picture)) !!}" alt="picture"
                                            class="img-fluid"
                                            style="width: 100%;
                                        height: 20vw;
                                        object-fit: fill;"></a>
                                </div>
                                <div class="card-body">
                                    <div class="card-category-box">
                                        <div class="card-category">
                                            <h6 class="category">{{ $post->main_title }}</h6>
                                        </div>
                                    </div>
                                    <h3 class="card-title"><a
                                            href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p class="card-description">
                                        {!! substr($post->body, 0, 100) !!}<a
                                            href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}"
                                            class="text-primary">
                                            {{ __('Read More') }}</a>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="post-author">
                                        <span class="author"><b>{{ $post->user->name }}</b></span>
                                    </div>
                                    <div class="post-date">
                                        <span class="bi bi-clock"></span> {{ $post->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-center">{{ __('Empty') }}</h4>
                    @endforelse
                    {{ $posts->links() }}
                @endif
            </div>
        </div>
    </section>
</div>
