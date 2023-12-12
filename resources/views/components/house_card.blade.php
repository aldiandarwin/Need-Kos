{{-- dynamic components --}}
{{-- <div class="col-lg-3">
    <div class="item">
        <a href="{{ route('landing.details', 'coral-pik-seven') }}">
            <img src="{{ asset($cover) }}" alt="" class="img-fluid">
        </a>
        <div class="info">
            <a href="{{ route('landing.details', 'coral-pik-seven') }}">
                <h3 class="small-header mb-2">
                    {{ $title }}
                </h3>
            </a>
            <div class="footer">
                <div class="location d-flex flex-row ">
                    <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                    <p class="small-paragraph mb-0">
                        {{ $location }} - @isset($review)
                            {{ $review }}
                        @endisset
                    </p>
                </div>
                <div class="price">
                    <p class="mb-0">
                        {{ $price }}<span class="extra-small-paragraph">/mo</span>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row">
    <div class="col-lg-3">
        <div class="item">
            <a href="{{ route('landing.details', 'coral-pik-seven') }}">
                <img src="{{ asset('images/house1.png') }}" alt="" class="img-fluid">
            </a>
            <div class="info">
                <a href="{{ route('landing.details', 'waterloo') }}">
                    <h3 class="small-header mb-2">
                        Grand coast Office PIK
                    </h3>
                </a>
                <div class="footer">
                    <div class="location d-flex flex-row ">
                        <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                        <p class="small-paragraph mb-0">
                            Exnoparty
                        </p>
                    </div>
                    @php
                        $hasBooked = true;
                    @endphp
                    <div class="price">
                        <p class="mb-0">
                            {{ $hasBooked ? 'sold out' : '$28,109' }}
                            <span class="extra-small-paragraph">
                                {{ $hasBooked ? '' : '/mo' }}
                            </span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="item">
            <a href="">
                <img src="{{ asset('images/house2.png') }}" alt="" class="img-fluid">
            </a>
            <div class="info">
                <a href="">
                    <h3 class="small-header mb-2">
                        Coral Brown
                    </h3>
                </a>
                <div class="footer">
                    <div class="location d-flex flex-row ">
                        <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                        <p class="small-paragraph mb-0">
                            Exnoparty
                        </p>
                    </div>
                    <div class="price">
                        <p class="mb-0">
                            $28,109<span class="extra-small-paragraph">/mo</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="item">
            <a href="">
                <img src="{{ asset('images/house3.png') }}" alt="" class="img-fluid">
            </a>
            <div class="info">
                <a href="">
                    <h3 class="small-header mb-2">
                        Coral Brown
                    </h3>
                </a>
                <div class="footer">
                    <div class="location d-flex flex-row ">
                        <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                        <p class="small-paragraph mb-0">
                            Exnoparty
                        </p>
                    </div>
                    <div class="price">
                        <p class="mb-0">
                            $28,109<span class="extra-small-paragraph">/mo</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="item">
            <a href="">
                <img src="{{ asset('images/house4.png') }}" alt="" class="img-fluid">
            </a>
            <div class="info">
                <a href="">
                    <h3 class="small-header mb-2">
                        Coral Brown
                    </h3>
                </a>
                <div class="footer">
                    <div class="location d-flex flex-row ">
                        <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                        <p class="small-paragraph mb-0">
                            Exnoparty
                        </p>
                    </div>
                    <div class="price">
                        <p class="mb-0">
                            $28,109<span class="extra-small-paragraph">/mo</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="item">
            <a href="">
                <img src="{{ asset('images/house5.png') }}" alt="" class="img-fluid">
            </a>
            <div class="info">
                <a href="">
                    <h3 class="small-header mb-2">
                        Coral Brown
                    </h3>
                </a>
                <div class="footer">
                    <div class="location d-flex flex-row ">
                        <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                        <p class="small-paragraph mb-0">
                            Exnoparty
                        </p>
                    </div>
                    <div class="price">
                        <p class="mb-0">
                            $28,109<span class="extra-small-paragraph">/mo</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="item">
            <a href="">
                <img src="{{ asset('images/house6.png') }}" alt="" class="img-fluid">
            </a>
            <div class="info">
                <a href="">
                    <h3 class="small-header mb-2">
                        Coral Brown
                    </h3>
                </a>
                <div class="footer">
                    <div class="location d-flex flex-row ">
                        <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                        <p class="small-paragraph mb-0">
                            Exnoparty
                        </p>
                    </div>
                    <div class="price">
                        <p class="mb-0">
                            $28,109<span class="extra-small-paragraph">/mo</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="item">
            <a href="">
                <img src="{{ asset('images/house7.png') }}" alt="" class="img-fluid">
            </a>
            <div class="info">
                <a href="">
                    <h3 class="small-header mb-2">
                        Coral
                    </h3>
                </a>
                <div class="footer">
                    <div class="location d-flex flex-row ">
                        <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                        <p class="small-paragraph mb-0">
                            Exnoparty
                        </p>
                    </div>
                    <div class="price">
                        <p class="mb-0">
                            $28,109<span class="extra-small-paragraph">/mo</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="item">
            <a href="">
                <img src="{{ asset('images/house8.png') }}" alt="" class="img-fluid">
            </a>
            <div class="info">
                <a href="">
                    <h3 class="small-header mb-2">
                        Coral Brown
                    </h3>
                </a>
                <div class="footer">
                    <div class="location d-flex flex-row ">
                        <img src="{{ asset('images/ic_loc.svg') }}" height="20" alt="">
                        <p class="small-paragraph mb-0">
                            Exnoparty
                        </p>
                    </div>
                    <div class="price">
                        <p class="mb-0">
                            $28,109<span class="extra-small-paragraph">/mo</span>
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
