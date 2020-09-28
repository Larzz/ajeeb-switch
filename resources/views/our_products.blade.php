@extends('layouts.inner')

@section('content')



      <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light" style="background-image: url({{ asset('images/bg-101.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('default.our_products') }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> {{ __('default.home') }}</a></li>
                        <li class="active"> {{ __('default.our_products') }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


     <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="food-menu-area">
                <div class="row">
                    <div class="col-md-12 text-center food-menu-content">
                        <div class="mix-item-menu">
                        <button class="active" data-filter="*">{{ __('default.ALL')}}</button>
                        <button data-filter=".white_meat">{{ __('default.WHITEMEAT_TUNA')}}</button>
                        <button data-filter=".yellowfin_chunk">{{ __('default.YELLOWFIN_CHUNK') }}</button>
                        <button data-filter=".skipjack_tuna">{{ __('default.SKIP_JACK') }}</button>
                        <button data-filter=".canned_sardine">{{ __('default.CANNED_SARDINE') }}</button>
                        <button data-filter=".pasta_sauced">{{ __('default.PASTA_SAUCE') }}</button>
                        <button data-filter=".mini_reqaq">{{ __('default.MINI_REQAQ') }}</button>
                        </div>
                        <!-- End Mixitup Nav-->
                        @php
                       @endphp
                        <div class="gallery-items col-3">
                            <div class="row">
                                <div class="col-md-12 text-center food-menu-content">
                                    <div class="row magnific-mix-gallery text-center masonary">
                                        <div id="portfolio-grid">
                                            {{-- {{ dd($products) }} --}}
                                            <!-- Single Item -->
                                                @foreach ($products as $value)
                                                    <div class="pf-item {{ $value->class }}">
                                                        <div class="item-effect">
                                                        <img src="{{ $value->image }}" alt="Thumb">
                                                            <a href="{{ $value->image }}" class="item popup-link">
                                                                @if (App::isLocale('ar'))
                                                                   {{ $value->name_ar }}
                                                                @else
                                                                   {{ $value->name }}
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div> 
                                                @endforeach
                                                   
                                            <!-- End Single Item -->
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
    <!-- End Gallery -->

@endsection