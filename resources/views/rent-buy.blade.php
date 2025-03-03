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
                <a class="nav-link active" onclick="setTitle('Buy')" data-bs-toggle="pill" href="#tab_buy">Buy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="setTitle('Rent')"  data-bs-toggle="pill" href="#tab_rent">To Rent Out</a>
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
                      <input type="text" class="form-control" placeholder="City or postal code" />
                      <div class="inp_icon">
                        <img src="assets/images/location_icon.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-2 form-group">
                    <div class="inp_relative">
                      <select class="custom-select form-control">
                        <option  selected>Type of property</option>
                        <option value="">Select a category</option>
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
                      <select class="custom-select form-control">
                        <option disabled selected>Max budget.</option>
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
                      </select>
                      <div class="inp_icon">
                        <img src="assets/images/money_bag.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-2 form-group">
                    <div class="inp_relative">
                      <select class="custom-select form-control">
                        <option value="">Pièces</option>
                        <option value="1">1 - 1.5 pièces</option>
                        <option value="2">2 - 2.5 pièces</option>
                        <option value="3">3 - 3.5 pièces</option>
                        <option value="4">4 - 4.5 pièces</option>
                        <option value="5">5 - 5.5 pièces</option>
                        <option value="6">6+ pièces</option>
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
                      <input type="text" class="form-control" placeholder="City or postal code" />
                      <div class="inp_icon">
                        <img src="assets/images/location_icon.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-2 form-group">
                    <div class="inp_relative">
                      <select class="custom-select form-control">
                        <option disabled selected>Type of property</option>
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
                      <select class="custom-select form-control">
                        <option disabled selected>Max budget.</option>
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
                      </select>
                      <div class="inp_icon">
                        <img src="assets/images/money_bag.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-2 form-group">
                    <div class="inp_relative">
                      <select class="custom-select form-control">
                        <option value="">Pièces</option>
                        <option value="1">1 - 1.5 pièces</option>
                        <option value="2">2 - 2.5 pièces</option>
                        <option value="3">3 - 3.5 pièces</option>
                        <option value="4">4 - 4.5 pièces</option>
                        <option value="5">5 - 5.5 pièces</option>
                        <option value="6">6+ pièces</option>
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
        <h2 class="mb-0">{{$posts->total()}} Announcement</h2>
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
              <a href="{{url('/detail/'.$post->id)}}">
                <div class="blog_box_h_inner">
                  <div class="blog_img_box upcomimg_events_box_inner">
                    <div class="upcomimg_events_img_box"> <img src="{{ asset('storage/' . $post->photos[0]) }}" alt=""> </div>
                    <div class="pro_price_over">
                      <h4>{{$post->price}} CHF</h4>
                      <p>Gross price</p>
                    </div>
                  </div>
                  <div class="blog_txt_area">
                    <h5><span><img src="assets/images/location_icon.svg" alt="" /></span>{{$post->address}},{{$post->address_property}}</h5>
                    <h3 class="blog_h_head">{{ucfirst($post->property_type)}}, {{$post->rooms}}, {{$post->surface_area}} m²</h3>
                    <ul class="list_amenties">
                      <li><img src="assets/images/amenties_bed.svg" alt="" /> 4.5</li>
                      <li><img src="assets/images/amenties_bath.svg" alt="" /> 2</li>
                      <li><img src="assets/images/amenties_measure2.svg" alt="" /> 200 m²</li>
                    </ul>
                  </div>
                </div>
              </a>
          </div>
          @endforeach
          <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
          {{-- <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex">
              <a href="">
                <div class="blog_box_h_inner">
                  <div class="blog_img_box upcomimg_events_box_inner">
                    <div class="upcomimg_events_img_box"> <img src="assets/images/properties1.jpg" alt=""> </div>
                    <div class="pro_price_over">
                      <h4>950,000 CHF</h4>
                      <p>Gross price</p>
                    </div>
                  </div>
                  <div class="blog_txt_area">
                    <h5><span><img src="assets/images/location_icon.svg" alt="" /></span>1007 Lausanne, Avenue de Cour 25</h5>
                    <h3 class="blog_h_head">Apartment, 4.5 rooms, 120 m²</h3>
                    <ul class="list_amenties">
                      <li><img src="assets/images/amenties_bed.svg" alt="" /> 4.5</li>
                      <li><img src="assets/images/amenties_bath.svg" alt="" /> 2</li>
                      <li><img src="assets/images/amenties_measure2.svg" alt="" /> 200 m²</li>
                    </ul>
                  </div>
                </div>
              </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex">
              <a href="">
                <div class="blog_box_h_inner">
                  <div class="blog_img_box upcomimg_events_box_inner">
                    <div class="upcomimg_events_img_box"> <img src="assets/images/properties1.jpg" alt=""> </div>
                    <div class="pro_price_over">
                      <h4>950,000 CHF</h4>
                      <p>Gross price</p>
                    </div>
                  </div>
                  <div class="blog_txt_area">
                    <h5><span><img src="assets/images/location_icon.svg" alt="" /></span>1007 Lausanne, Avenue de Cour 25</h5>
                    <h3 class="blog_h_head">Apartment, 4.5 rooms, 120 m²</h3>
                    <ul class="list_amenties">
                      <li><img src="assets/images/amenties_bed.svg" alt="" /> 4.5</li>
                      <li><img src="assets/images/amenties_bath.svg" alt="" /> 2</li>
                      <li><img src="assets/images/amenties_measure2.svg" alt="" /> 200 m²</li>
                    </ul>
                  </div>
                </div>
              </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex">
              <a href="">
                <div class="blog_box_h_inner">
                  <div class="blog_img_box upcomimg_events_box_inner">
                    <div class="upcomimg_events_img_box"> <img src="assets/images/properties1.jpg" alt=""> </div>
                    <div class="pro_price_over">
                      <h4>950,000 CHF</h4>
                      <p>Gross price</p>
                    </div>
                  </div>
                  <div class="blog_txt_area">
                    <h5><span><img src="assets/images/location_icon.svg" alt="" /></span>1007 Lausanne, Avenue de Cour 25</h5>
                    <h3 class="blog_h_head">Apartment, 4.5 rooms, 120 m²</h3>
                    <ul class="list_amenties">
                      <li><img src="assets/images/amenties_bed.svg" alt="" /> 4.5</li>
                      <li><img src="assets/images/amenties_bath.svg" alt="" /> 2</li>
                      <li><img src="assets/images/amenties_measure2.svg" alt="" /> 200 m²</li>
                    </ul>
                  </div>
                </div>
              </a>
          </div> --}}
        </div>

      </div>
    </div>
  </section>
  <!-- banner  -->
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
                location: activeForm.find('input[placeholder="City or postal code"]').val(),
                propertyType: activeForm.find('select').first().val(),
                maxBudget: activeForm.find('select').eq(1).val(),
                rooms: activeForm.find('select').last().val()
            });

            // Make API call
            $.ajax({
                url: '/api/filter-posts',
                method: 'GET',
                data: {
                    type: activeTab,
                    location: activeForm.find('input[placeholder="City or postal code"]').val(),
                    property_type: activeForm.find('select').first().val(),
                    max_budget: activeForm.find('select').eq(1).val(),
                    rooms: activeForm.find('select').last().val(),
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
                    if(response.posts && response.posts.length > 0) {
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
                                                    <p>Gross price</p>
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
                    if(response.links) {
                        $('.latest_new_area .row').append(`
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    ${response.links}
                                </div>
                            </div>
                        `);
                    }
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

        // Initialize function to set title
        function setTitle(title) {
            if(title=="Rent"){
                $(".head_title").text("Rent a property");
            }else{
                $(".head_title").text("Buy a property");
            }
            updateResults();
        }
    });
</script>

<style>
    .loading {
        opacity: 0.5;
        pointer-events: none;
    }
</style>
@endsection
