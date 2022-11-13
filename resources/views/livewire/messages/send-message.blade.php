<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title-box-2">
                                <h5 class="title-left">
                                    {{ __('Send Message Us') }}
                                </h5>
                            </div>
                            <div>
                                <form wire:submit.prevent="sendMessage">
                                    <div class="results">
                                        @if ($success)
                                            <div class="alert alert-success">
                                                {{ $success }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" wire:model="name" class="form-control" id="name"
                                                    placeholder="{{ __('Your Name') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control" wire:model="email" id="email"
                                                    placeholder="{{ __('Your Email') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" wire:model="subject"
                                                    id="subject" placeholder="{{ __('Subject') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" wire:model="message" rows="5" placeholder="{{ __('Message') }}" required></textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12 text-center my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank
                                                you!</div>
                                        </div> --}}
                                        <div class="col-md-12 mt-2 text-center">
                                            <button type="submit" class="button button-a button-big button-rouded">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="title-box-2 pt-4 pt-md-0">
                                <h5 class="title-left">
                                    Get in Touch
                                </h5>
                            </div>
                            <div class="more-info">
                                @if (app()->getLocale() == 'ar')
                                    <p class="lead">
                                        {{ $info->ar_contactWithUs_message }}
                                    </p>
                                @else
                                    <p class="lead">
                                        {{ $info->en_contactWithUs_message }}
                                    </p>
                                @endif
                                <ul class="list-ico">
                                    <li><span class="bi bi-geo-alt"></span>
                                        {{ $info->location }}</li>
                                    <li><span class="bi bi-phone"></span>{{ $info->phone }}</li>
                                    <li><span class="bi bi-envelope"></span>{{ $info->email }}</li>
                                </ul>
                            </div>
                            <div class="socials">
                                <ul>
                                    <li><a href="{{ $info->facebook }}" target="blank"><span class="ico-circle"><i
                                                    class="bi bi-facebook"></i></span></a></li>
                                    <li><a href="{{ $info->instagram }}" target="blank"><span class="ico-circle"><i
                                                    class="bi bi-instagram"></i></span></a></li>
                                    <li><a href="{{ $info->twitter }}" target="blank"><span class="ico-circle"><i
                                                    class="bi bi-twitter"></i></span></a></li>
                                    <li><a href="{{ $info->linkedIn }}" target="blank"><span class="ico-circle"><i
                                                    class="bi bi-whatsapp"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
