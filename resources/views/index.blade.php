@extends('layouts.front')


@section('content')

    <div class="slide-one-item home-slider owl-carousel">

        @foreach($featuredVenues as $featuredVenue)

        <div class="site-blocks-cover" style="background-image: url({{$featuredVenue['hero_image']}});" data-aos="fade" data-stellar-background-ratio="0.5">

            <div class="text">
                <h2>{{$featuredVenue['name']}}</h2>
                <p class="location"><span class="property-icon icon-room"></span> {{$featuredVenue['address']}}</p>
                <p class="mb-2"><strong>{{$featuredVenue['price']}}</strong></p>


                <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">{{$featuredVenue['link']}}</a></p>

            </div>
        </div>

        @endforeach

    </div>

    <div class="py-5">
        <div class="container">
            <form class="row mb-5">

                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="event_type" id="event_type" class="form-control d-block rounded-0">
                            <option value=" ">Event Type</option>
                            @foreach($eventTypes as $eventType)
                            <option value="{{$eventType->id}}">{{$eventType->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">

                        <input type="number" name="people_amount"  id="people_amount" class="form-control d-block ronded-0" placeholder="People amount" min="1">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="select-wrap">
                        <span class="icon icon-arrow_drop_down"></span>
                        <select name="location" id="location" class="form-control d-block rounded-0">
                            <option value="">Location</option>
                            @foreach($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{--<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="mb-4">
                        <div id="slider-range" class="border-primary"></div>
                        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
                    </div>
                </div>--}}
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
                </div>

            </form>

                <div class="row justify-content-center">
                    <div class="col-md-7 text-center mb-5">
                        <div class="site-section-title">
                            <h2>Inspiring Venue for ...</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($eventTypes as $eventType)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <a href="#" class="service text-center border rounded">
                            <span class="icon flaticon-house"></span>
                            <h2 class="service-heading">{{$eventType->name}}</h2>
                            <p><span class="read-more">Learn More</span></p>
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>

    </div>

    <div class="site-section site-section-sm bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="site-section-title">
                        <h2>New Venues for You</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                @foreach($newestVenues as $newestVenue)
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="property-details.html" class="prop-entry d-block">
                        <figure>
                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">{{$newestVenue->price}}</span>
                                <h3 class="title">{{$newestVenue->name}}</h3>
                                <p class="location">{{$newestVenue->address}}</p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        <span>Area:</span>
                                        <strong>240m<sup>2</sup></strong>
                                    </div>
                                    <div class="col">
                                        <span>Beds:</span>
                                        <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        <span>Baths:</span>
                                        <strong>2</strong>
                                    </div>
                                    <div class="col">
                                        <span>Garages:</span>
                                        <strong>1</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>


        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7">
                    <div class="site-section-title text-center">
                        <h2>Discover spaces in</h2>
                    </div>
                </div>
            </div>
            <div class="row block-13">

                <div class="nonloop-block-13 owl-carousel">

                    @foreach($locations as $location)

                    <div class="slide-item">
                        <div class="team-member text-center">
                            <img src="images/person_1.jpg" alt="{{$location->photo}}" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            <div class="text p-3">
                                <h2 class="mb-2 font-weight-light text-black h4">{{$location->name}}</h2>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>

            </div>
        </div>
    </div>


@endsection
