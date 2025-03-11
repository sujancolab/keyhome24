@extends('layouts.layout')
@section('content')
    <!-- hero_form_sec -->
    <section class="hero_form_sec text-center py-5-">
        <div class="container">
            <h1 class="main_form_title text-white head_title">Buy a Property</h1>
            <div class="hero_form_area">
                <div class="home_page_tab_area_only home_page_form_nav">
                    <ul class="" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-title="Buy" data-bs-toggle="pill" href="#tab_buy">{{__('messages.buy')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-title="Rent" data-bs-toggle="pill" href="#tab_rent"> {{__('messages.to_rent_out')}}</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="tab-content">
                        <div id="tab_buy" class="container tab-pane active"><br>
                            <form class="comman_form">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 mb-2 form-group">
                                        <div class="inp_relative">
                                            <input type="text" class="form-control location" name="location" placeholder="City or postal code" />
                                            <div class="inp_icon">
                                                <img src="assets/images/location_icon.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control property_type" name="property_type">
                                                <option value=""> Select Category</option>
                                                 <optgroup label="Residential">
                                                            <option value="apartment">Apartment</option>
                                                            <option value="house">House</option>
                                                            <option value="villa">Villa</option>
                                                            <option value="studio">Studio</option>
                                                            <option value="duplex">Duplex</option>
                                                            <option value="chalet">Chalet</option>
                                                            <option value="loft">Loft</option>
                                                        </optgroup>

                                                        <optgroup label="Commercial">
                                                            <option value="office">Office</option>
                                                            <option value="commercial space">Commercial space</option>
                                                            <option value="warehouse">Warehouse</option>
                                                            <option value="factory">Factory</option>
                                                            <option value="farm">Farm</option>
                                                        </optgroup>

                                                        <optgroup label="Land">
                                                            <option value="building_land">Building Plot</option>
                                                            <option value="agricultural_land">Agricultural Land</option>
                                                        </optgroup>
                                                        <optgroup label="Parking">
                                                            <option value="garage">Garage</option>
                                                            <option value="parking_lot">Parking lot</option>
                                                        </optgroup>
                                            </select>
                                            <div class="inp_icon">
                                                <img src="assets/images/home_icon.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control max_budget" name="max_budget">
                                                <option disabled selected>Max budget.</option>
                                                <!-- Options will be populated dynamically -->
                                            </select>
                                            <div class="inp_icon">
                                                <img src="assets/images/money_bag.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control rooms" name="rooms">
                                                <option value="">Rooms</option>
                                                <option value="1">1 - 1.5 rooms</option>
                                                <option value="2">2 - 2.5 rooms</option>
                                                <option value="3">3 - 3.5 rooms</option>
                                                <option value="4">4 - 4.5 rooms</option>
                                                <option value="5">5 - 5.5 rooms</option>
                                                <option value="6">6+ rooms</option>
                                            </select>
                                            <div class="inp_icon">
                                                <img src="assets/images/home_icon.svg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="tab_rent" class="container tab-pane fade"><br>
                            <form class="comman_form">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 mb-2 form-group">
                                        <div class="inp_relative">
                                            <input type="text" class="form-control location" name="location" placeholder="City or postal code" />
                                            <div class="inp_icon">
                                                <img src="assets/images/location_icon.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control property_type" name="property_type">
                                                <option disabled selected value="">Type of property</option>
                                                <optgroup label="Residential">
                                                    <option value="apartment">Apartment</option>
                                                    <option value="house">House</option>
                                                    <option value="villa">Villa</option>
                                                    <option value="studio">Studio</option>
                                                    <option value="loft">Loft</option>
                                                </optgroup>
                                                <optgroup label="Commercial">
                                                    <option value="office">Office</option>
                                                    <option value="shop">Shop</option>
                                                    <option value="restaurant">Restaurant</option>
                                                    <option value="warehouse">Warehouse</option>
                                                </optgroup>
                                                <optgroup label="Land">
                                                    <option value="building_land">Building Plot</option>
                                                    <option value="agricultural_land">Agricultural Land</option>
                                                </optgroup>
                                            </select>
                                            <div class="inp_icon">
                                                <img src="assets/images/home_icon.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control max_budget" name="max_budget">
                                                <option disabled selected>Max budget.</option>
                                                <!-- Options will be populated dynamically -->
                                            </select>
                                            <div class="inp_icon">
                                                <img src="assets/images/money_bag.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control rooms" name="rooms">
                                                <option value="">Rooms</option>
                                                <option value="1">1 - 1.5 rooms</option>
                                                <option value="2">2 - 2.5 rooms</option>
                                                <option value="3">3 - 3.5 rooms</option>
                                                <option value="4">4 - 4.5 rooms</option>
                                                <option value="5">5 - 5.5 rooms</option>
                                                <option value="6">6+ rooms</option>
                                            </select>
                                            <div class="inp_icon">
                                                <img src="assets/images/home_icon.svg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="properties_sec comman_tb_padding">
        <div class="container">
            <div class="property_result_title two_column_title">
                <h2 class="mb-0">{{ count($posts) }} {{__('messages.announcement')}} </h2>
                <div class="property_select">
                    <select class="custom-select form-control">
                        <option value="most_recent">Most Recent</option>
                        <option value="price_asc">Ascending price</option>
                        <option value="price_desc">Descending price</option>
                    </select>
                </div>
            </div>
            <!--  -->
            <div class="latest_new_area comman_top">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex">
                            <a href="{{ url('/detail/' . $post->id) }}">
                                <div class="blog_box_h_inner">
                                    <div class="blog_img_box upcomimg_events_box_inner">
                                        <div class="upcomimg_events_img_box"> <img
                                                src="{{ asset('storage/' . $post->photos[0]) }}" alt=""> </div>
                                        <div class="pro_price_over">
                                            <h4 class="price_sepration">{{ explode(',', $post->price)[0] }} CHF</h4>
                                            <p>Gross price</p>
                                        </div>
                                    </div>
                                    <div class="blog_txt_area">
                                        <h5><span><img src="assets/images/location_icon.svg"
                                                    alt="" /></span>{{ $post->postal_code }},{{ $post->city }},{{ $post->address }},{{ $post->address_property }}
                                        </h5>
                                        <h3 class="blog_h_head">{{ ucfirst($post->property_type) }}, {{ $post->rooms }},
                                            {{ $post->surface_area }} m²</h3>
                                        <ul class="list_amenties">
                                            <li><img src="assets/images/amenties_bed.svg" alt="" /> 4.5</li>
                                            <li><img src="assets/images/amenties_bath.svg" alt="" />{{$post->bathrooms}}</li>
                                            <li><img src="assets/images/amenties_measure2.svg" alt="" />  {{ $post->surface_area }} m²
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- banner  -->
@endsection
@section('scripts')
    <script>
        setTitle();
        // Define setTitle in global scope
        function setTitle(title) {
            if (title == "Rent") {
                $(".head_title").text("Rent a property");
                // Set max budget options for Rent
                $('.max_budget').html(`
                    <option disabled selected>Max budget.</option>
                    <option value="200">Up to 200 CHF/month</option>
                    <option value="500">Up to 500 CHF/month</option>
                    <option value="1000">Up to 1,000 CHF/month</option>
                    <option value="2000">Up to 2,000 CHF/month</option>
                    <option value="3000">Up to 3,000 CHF/month</option>
                    <option value="4000">Up to 4,000 CHF/month</option>
                    <option value="5000">Up to 5,000 CHF/month</option>
                    <option value="6000">Up to 6,000 CHF/month</option>
                    <option value="7000">Up to 7,000 CHF/month</option>
                    <option value="8000">Up to 8,000 CHF/month</option>
                    <option value="9000">Up to 9,000 CHF/month</option>
                    <option value="10000">Up to 10,000 CHF/month</option>
                    <option value="10001">More than 10,000 CHF/month</option>
                `);
            } else {
                $(".head_title").text("Buy a property");
                // Set max budget options for Buy
                $('.max_budget').html(`
                    <option disabled selected>Max budget.</option>
                    <option value="100000">Up to 100,000 CHF</option>
                    <option value="300000">Up to 300,000 CHF</option>
                    <option value="500000">Up to 500,000 CHF</option>
                    <option value="700000">Up to 700,000 CHF</option>
                    <option value="1000000">Up to 1 mio CHF</option>
                    <option value="3000000">Up to 3 mio CHF</option>
                    <option value="5000000">Up to 5 mio CHF</option>
                    <option value="7000000">Up to 7 mio CHF</option>

                `);
            }
        }

        $(document).ready(function() {
            // Handle tab changes
            $('.nav-link').on('click', function() {
                const title = $(this).data('title');
                setTitle(title);
                updateResults();
            });

            // Handle filter form changes
            $('.comman_form input, .comman_form select').on('change', function() {
                updateResults();
            });

            // Handle sort select change
            $('.property_select select').on('change', function() {
                updateResults();
            });

            function updateResults() {
                // Get active tab
                const activeTab = $('.nav-link.active').text().trim().toLowerCase();

                // Get filter values from active tab form
                const activeForm = $('#tab_' + activeTab + ' form');

                // Debug log to check values
                console.log('Active Tab:', activeTab);
                console.log('Form Values:', {
                    location: activeForm.find('input[name="location"]').val(),
                    propertyType: activeForm.find('select[name="property_type"]').val(),
                    maxBudget: activeForm.find('select[name="max_budget"]').val(),
                    rooms: activeForm.find('select[name="rooms"]').val()
                });

                // Make API call
                $.ajax({
                    url: '/api/filter-posts',
                    method: 'GET',
                    data: {
                        type: activeTab,
                        location: $('.location').val(),//activeForm.find('input[name="location"]').val(),
                        property_type: $('.property_type').val(),//activeForm.find('select[name="property_type"]').val(),
                        max_budget: $('.max_budget').val(),//activeForm.find('select[name="max_budget"]').val(),
                        rooms: $('.rooms').val(),//a
                        sort: $('.property_select select').val()
                    },
                    beforeSend: function() {
                        $('.latest_new_area').addClass('loading');
                    },
                    success: function(response) {
                        // Update the results count
                        $('.property_result_title h2').text(response.total + ' Announcement');

                        // Clear existing results
                        $('.latest_new_area .row').html('');

                        // Add new results
                        if (response.posts && response.posts.length > 0) {
                            response.posts.forEach(post => {
                                $('.latest_new_area .row').append(`
                                    <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex">
                                        <a href="/detail/${post.id}">
                                            <div class="blog_box_h_inner">
                                                <div class="blog_img_box upcomimg_events_box_inner">
                                                    <div class="upcomimg_events_img_box">
                                                        <img src="/storage/${post.photos[0]}" alt="">
                                                    </div>
                                                    <div class="pro_price_over">
                                                     <h4>${post.price} CHF</h4>
                                                        <p>${post.ad_type=="sell" ? "Gross price":" Gross price/monthly"} </p>
                                                    </div>
                                                </div>
                                                <div class="blog_txt_area">
                                                    <h5><span><img src="/assets/images/location_icon.svg" alt="" /></span>${post.address}, ${post.address_property}</h5>
                                                    <h3 class="blog_h_head">${post.property_type}, ${post.rooms}, ${post.surface_area} m²</h3>
                                                    <ul class="list_amenties">
                                                        <li><img src="/assets/images/amenties_bed.svg" alt="" /> ${post.rooms}</li>
                                                        <li><img src="/assets/images/amenties_bath.svg" alt="" /> ${post.bathrooms}</li>
                                                        <li><img src="/assets/images/amenties_measure2.svg" alt="" /> ${post.surface_area} m²</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                `);
                            });
                        } else {
                            $('.latest_new_area .row').append('<div class="col-12"><p class="text-center">No results found</p></div>');
                        }

                        // Update pagination if provided in response
                        // if (response.links) {
                        //     $('.latest_new_area .row').append(`
                        //         <div class="col-12">
                        //             <div class="d-flex justify-content-center">
                        //                 ${response.links}
                        //             </div>
                        //         </div>
                        //     `);
                        // }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching filtered results:', error);
                        $('.latest_new_area .row').html('<div class="col-12"><p class="text-center text-danger">Error loading results</p></div>');
                    },
                    complete: function() {
                        $('.latest_new_area').removeClass('loading');
                    }
                });
            }

            // Initial call to updateResults
            // updateResults();
        });
    </script>

    <style>
        .loading {
            opacity: 0.5;
            pointer-events: none;
        }
    </style>
@endsection
