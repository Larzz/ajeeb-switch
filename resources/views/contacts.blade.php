@extends('layouts.inner')

@section('content')

       <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow text-center dark bg-fixed text-light" style="background-image: url({{ asset('images/bg-101.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>{{ __('default.get_in_touch') }}</h1>
                    <ul class="breadcrumb">
                    <li><a href="{{ route('home.index') }}"><i class="fas fa-home"></i> {{ __('default.home') }}</a></li>
                        <li class="active">{{ __('default.get_in_touch') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="contact-box">
                    
                    <!-- Start Form -->
                    <div class="col-md-5 form-box">
                        <div class="form-content">
                            <div class="heading">
                            <h3>{{ __('default.DROP_US_A_LINE') }}</h3>
                            </div>
                            <form action="javascript:;" method="POST" class="contact-form">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->

                    <div class="col-md-6 col-md-offset-1 info">
                        <h2>{{ __('default.get_in_touch') }}</h2>
                        <p>
                            Often merit stuff first oh up hills as he. Servants contempt as although addition dashwood is procured. Interest in yourself an do of numerous feelings cheerful confined. 
                        </p>
                        <br>
                        <div class="address">
                            <ul>
                                <li>
                                    <span>Address</span>
                                    <p>
                                         <a href="">Switch Foodstuff Trading Co. LLC Sharjah, UAE P.O. Box 25743 </a>
                                    </p>
                                </li>
                                <br>
                                <li>
                                    <span>Phone</span>
                                    <p>
                                        <a href="tel:+971 54 3055102">+971 54 3055102</a>
                                    </p>
                                    <p>
                                        <a href="tel:+971 56 3773129">+971 56 3773129</a>
                                    </p>
                                    <p>
                                        <a href="tel:+971 56 3377634"> +971 56 3377634</a>                             
                                     </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231106.72081450655!2d55.12490892878765!3d25.168042334913313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5bfaff1cf17f%3A0x39cb811887e7343e!2sSwitch%20Foodstuff%20Trading%20Co%20LLC-Sharjah%20Office!5e0!3m2!1sen!2sae!4v1600593079010!5m2!1sen!2sae" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->

@endsection