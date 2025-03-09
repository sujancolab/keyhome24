@extends('layouts.layout')
@section('content')
    <!-- hero_form_sec -->
    <section class="hero_form_sec for_blue_bg_only text-center py-5-">
        <div class="container">
            <h1 class="main_form_title text-white">Requests</h1>
            <div class="hero_form_area">
                <div class="home_page_tab_area_only home_page_form_nav">
                    <ul class="" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab_buy">Colocation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#tab_rent">Housing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#tab_reprise">Reprise</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="tab-content">
                        <div id="tab_buy" class="container tab-pane active"><br>
                            <form class="comman_form">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <input type="text"
                                                   class="form-control"
                                                   name="location"
                                                   placeholder="City or postal code" />
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/location_icon.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control" name="max_budget">
                                                <option disabled selected>Max budget.</option>
                                                <option value="500">Up to 500 CHF/month</option>
                                                <option value="1000">Up to 1,000 CHF/month</option>
                                                <option value="1500">Up to 1,500 CHF/month</option>
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
                                            </select>
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/money_bag.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <input type="date"
                                                   class="form-control"
                                                   name="date" />
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/date_icon.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="tab_rent" class="container tab-pane fade"><br>
                            <form class="comman_form">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <input type="text"
                                                   class="form-control"
                                                   name="location"
                                                   placeholder="City or postal code" />
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/location_icon.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control" name="max_budget">
                                                <option disabled selected>Max budget.</option>
                                                <option value="500">Up to 500 CHF/month</option>
                                                <option value="1000">Up to 1,000 CHF/month</option>
                                                <option value="1500">Up to 1,500 CHF/month</option>
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
                                            </select>
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/money_bag.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <input type="date"
                                                   class="form-control"
                                                   name="date" />
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/date_icon.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="tab_reprise" class="container tab-pane fade"><br>
                            <form class="comman_form">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <input type="text"
                                                   class="form-control"
                                                   name="location"
                                                   placeholder="City or postal code" />
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/location_icon.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <select class="custom-select form-control" name="max_budget">
                                                <option disabled selected>Max budget.</option>
                                                <option value="500">Up to 500 CHF/month</option>
                                                <option value="1000">Up to 1,000 CHF/month</option>
                                                <option value="1500">Up to 1,500 CHF/month</option>
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
                                            </select>
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/money_bag.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 mb-2 form-group">
                                        <div class="inp_relative">
                                            <input type="date"
                                                   class="form-control"
                                                   name="date" />
                                            <div class="inp_icon">
                                                <img src="{{ asset('assets/images/date_icon.svg') }}">
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
                <h2 class="mb-0">{{ $requests->total() }} Demandes</h2>
                <div class="">
                    <select class="custom-select form-control">
                        <option value="most_recent">Most Recent</option>
                        <option value="price_asc">Ascending price</option>
                        <option value="price_desc">Descending price</option>
                    </select>
                </div>
            </div>
            <!--  -->
            <div class="latest_new_area comman_top">
                @foreach ($requests as $request)
                    <div class="full_property_listing_repeat">
                        <h3>Request for shared accommodation - {{ $request->search_type }} <span
                                class="pro_status_btn">Active</span></h3>
                        <ul class="list_full_property list-inline">
                            <li>Crake</li>
                            <li>Geneva</li>
                            <li> {{ $request->max_budget }} CHF/month</li>
                            <li>Shared accommodation</li>
                            <li>From {{ $request->created_at }}</li>
                        </ul>
                        <p class="ft_weight">{{ $request->search }}</p>
                        <div class="list_call_action">
                            <a class="btn_list_action btn_to_call" href="tel:{{ $request->phone }}">Call</a>
                            <a class="btn_list_action btn_to_mail" href="mailto:{{ $request->email }}">E-mail</a>
                            <a class="btn_list_action btn_to_share" href="tel:{{ $request->phone }}">Share</a>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex justify-content-center">
                    {{ $requests->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Handle tab changes
        $('.nav-link').on('click', function() {
            updateResults();
        });

        // Handle filter form changes
        $('.comman_form input, .comman_form select').on('change', function() {
            updateResults();
        });

        // Handle sort select change
        $('.property_result_title select').on('change', function() {
            updateResults();
        });

        function updateResults() {
            // Get active tab
            const activeTab = $('.nav-link.active').text().trim().toLowerCase();

            // Get filter values from active tab form
            const activeForm = $('#tab_' + activeTab.replace('colocation', 'buy').replace('location', 'rent') + ' form');

            // Debug log to check values
            console.log('Active Tab:', activeTab);
            console.log('Form Values:', {
                location: activeForm.find('input[name="location"]').val(),
                maxBudget: activeForm.find('select[name="max_budget"]').val(),
                date: activeForm.find('input[name="date"]').val()
            });

            // Make API call
            $.ajax({
                url: '/api/filter-requests',
                method: 'GET',
                data: {
                    type: activeTab,
                    location: activeForm.find('input[name="location"]').val(),
                    max_budget: activeForm.find('select[name="max_budget"]').val(),
                    date: activeForm.find('input[name="date"]').val(),
                    sort: $('.property_result_title select').val()
                },
                beforeSend: function() {
                    // Add loading state if needed
                    $('.latest_new_area').addClass('loading');
                },
                success: function(response) {
                    // Update the results count
                    $('.property_result_title h2').text(response.total + ' Research requests');

                    // Clear existing results
                    $('.latest_new_area').html('');

                    // Add new results
                    if(response.requests && response.requests.length > 0) {
                        response.requests.forEach(request => {
                            console.log(request.search_type);
                            $('.latest_new_area').append(`
                                <div class="full_property_listing_repeat">
                                    <h3>Request for shared accommodation - ${request.search_type}
                                        <span class="pro_status_btn">Active</span>
                                    </h3>
                                    <ul class="list_full_property list-inline">
                                        <li>${request.location}</li>
                                        <li>${request.city}</li>
                                        <li>${request.max_budget} CHF/month</li>
                                        <li>Shared accommodation</li>
                                        <li>From ${request.created_at}</li>
                                    </ul>
                                    <p class="ft_weight">${request.search}</p>
                                    <div class="list_call_action">
                                        <a class="btn_list_action btn_to_call" href="tel:${request.phone}">To Call</a>
                                        <a class="btn_list_action btn_to_mail" href="mailto:${request.email}">E-mail</a>
                                        <a class="btn_list_action btn_to_share" href="tel:${request.phone}">Share</a>
                                    </div>
                                </div>
                            `);
                        });
                    } else {
                        $('.latest_new_area').append('<p class="text-center">No results found</p>');
                    }

                    // Update pagination if provided in response
                    if(response.links) {
                        $('.latest_new_area').append(`
                            <div class="d-flex justify-content-center">
                                ${response.links}
                            </div>
                        `);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching filtered results:', error);
                    $('.latest_new_area').html('<p class="text-center text-danger">Error loading results</p>');
                },
                complete: function() {
                    // Remove loading state
                    $('.latest_new_area').removeClass('loading');
                }
            });
        }

        // Initialize select2 for better dropdown experience (optional)
        $('.custom-select').select2({
            minimumResultsForSearch: 10,
            width: '100%'
        });
    });
</script>

<style>
    .loading {
        opacity: 0.5;
        pointer-events: none;
    }
</style>
@endsection
