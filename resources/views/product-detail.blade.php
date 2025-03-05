@extends('layouts.layout')
@section('content')
<!-- hero_form_sec -->
{{-- {{$post}} --}}
<section class="comman_tb_padding product_details_sec">
    <div class="container">
        <div class="img_slider_area">
            <div class="owl_slider">
                <div class="owl-carousel owl-theme preview_image" id="features_img_slider">
                    @foreach ($post->photos as $photo)


                    <div class="item">
                        <div class="owl_img">
                            <img class="preview_image" src="{{url('storage/'.$photo)}}" alt="" />
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="slider_name d-flex">
                <div class="slider_name_left">
                    <h3>{{$post->property_type}} {{$post->rooms}} rooms, {{$post->surface_area}} m²</h3>
                    <p>
                        <img src="images/location_icon.svg" alt="" />
                        {{$post->address}} , {{$post->location}}
                    </p>
                </div>
                <div class="slider_name_right">
                    <h4>{{$post->price}} CHF</h4>
                    <p>Gross price</p>
                </div>
            </div>
        </div>

        <div class="form_vidget">
            <div class="row">
                <div class="col-md-3">
                    <div class="feature_summry_bx">
                        <img src="images/feature_surface.svg" alt="" />
                        <h4>{{$post->surface_area}} m²</h4>
                        <p class="mb-0">Surface</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature_summry_bx">
                        <img src="images/feature_building.svg" alt="" />
                        <h4>{{$post->floor}}</h4>
                        <p class="mb-0">Floor</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form_vidget">
            <h4 class="tab_title mb-4">Description</h4>
            <div class="row">
                <div class="col-md-12">
                    <p class="post_description">
                        {{$post->description}}
                    </p>
                </div>
            </div>
        </div>
        <div class="form_vidget">
            <h4 class="tab_title mb-4">Equipment</h4>
            <div class="row">
                <div class="col-md-12">
                    <ul class="list_style_feat">
                        @foreach ($post->features as $feature)
                        <li>{{$feature}}</li>

                        @endforeach
                        {{-- <li>Elevator</li>
                        <li>Elevator</li>
                        <li>Elevator</li>
                        <li>Elevator Elevator</li> --}}
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="form_vidget">
            <h4 class="tab_title mb-4">Documents available</h4>
            <div class="row">
                <div class="col-md-12 preview_documents">

                </div>
            </div>
        </div> --}}
        <div class="form_vidget">
            <p class="mb-0">
                <img src="images/date_icon.svg" class="me-1" alt="" />
                Available from {{date('Y-m-d')}}
            </p>
        </div>

        <div class="form_vidget">
            <h4 class="tab_title mb-4">Real estate agency</h4>
            <div class="row">
                <div class="col-md-12">
                    <p>{{$post->agency_name}}</p>
                    <p>{{$post->email}}</p>
                    <p>{{$post->phone}}</p>
                    <p>{{$post->address}}</p>
                </div>
            </div>
        </div>
      {{-- <h1 class="main_form_title text-white">Rent a Property</h1>
      <div class="hero_form_area">
        <div class="home_page_tab_area_only home_page_form_nav">
            <ul class="" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#tab_buy">Buy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#tab_rent">To Rent Out</a>
              </li>
            </ul>
        </div>
        <div>
          <div class="tab-content">
            <div id="tab_buy" class="container tab-pane active"><br>
              <form class="comman_form">
                <div class="row">
                  <div class="col-lg-3 col-md-3 mb-2 form-group">
                    <div class="inp_relative">
                      <input type="text" class="form-control" placeholder="City or postal code" />
                      <div class="inp_icon">
                        <img src="assets/images/location_icon.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 mb-2 form-group">
                    <div class="inp_relative">
                      <select class="custom-select form-control">
                        <option  selected>Type of property</option>
                        <option value="">Select a category</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="ground">Ground</option>
                        <option value="parking">Parking</option>
                      </select>
                      <div class="inp_icon">
                        <img src="assets/images/home_icon.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 mb-2 form-group">
                    <div class="inp_relative">
                      <select class="custom-select form-control">
                        <option disabled selected>Max budget.</option>
                        <option>apartment</option>
                        <option>house</option>
                        <option>villa</option>
                        <option>studio</option>
                        <option>loft</option>
                      </select>
                      <div class="inp_icon">
                        <img src="assets/images/money_bag.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 mb-2 form-group">
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
                  <div class="col-lg-3 col-md-3 mb-2 form-group">
                    <div class="inp_relative">
                      <input type="text" class="form-control" placeholder="City or postal code" />
                      <div class="inp_icon">
                        <img src="assets/images/location_icon.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 mb-2 form-group">
                    <div class="inp_relative">
                      <select class="custom-select form-control">
                        <option disabled selected>Type of property</option>
                        <optgroup label="Résidentiel">
                          <option>apartment</option>
                          <option>house</option>
                          <option>villa</option>
                          <option>studio</option>
                          <option>loft</option>
                        </optgroup>
                        <optgroup label="Commercial">
                          <option>office</option>
                          <option>shop</option>
                          <option>restaurant</option>
                          <option>warehouse</option>
                        </optgroup>
                        <optgroup label="Terrain">
                          <option>buildingLand</option>
                          <option>agriculturalLand</option>
                        </optgroup>
                      </select>
                      <div class="inp_icon">
                        <img src="assets/images/home_icon.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 mb-2 form-group">
                    <div class="inp_relative">
                      <select class="custom-select form-control">
                        <option disabled selected>Max budget.</option>
                        <option>apartment</option>
                        <option>house</option>
                        <option>villa</option>
                        <option>studio</option>
                        <option>loft</option>
                      </select>
                      <div class="inp_icon">
                        <img src="assets/images/money_bag.svg">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 mb-2 form-group">
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
      </div> --}}
    </div>
  </section>
  <!--  -->
  {{-- <section class="properties_sec comman_tb_padding">
    <div class="container">
      <div class="property_result_title two_column_title">
        <h2 class="mb-0">7 Properties for sale</h2>
        <div class="">
          <select class="custom-select form-control">
            <option value="">Most Recent</option>
            <option value="">Ascending price</option>
            <option value="">Items</option>
          </select>
        </div>
      </div>
      <!--  -->
      <div class="latest_new_area comman_top">
        <div class="row">
            @foreach ($posts as $post)


          <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex">
              <a href="">
                <div class="blog_box_h_inner">
                  <div class="blog_img_box upcomimg_events_box_inner">
                    <div class="upcomimg_events_img_box"> <img src="{{ asset('storage/' . $post->photos[0]) }}" alt=""> </div>
                    <div class="pro_price_over">
                      <h4>{{$post->price}} CHF</h4>
                      <p>Gross price</p>
                    </div>
                  </div>
                  <div class="blog_txt_area">
                    <h5><span><img src="assets/images/location_icon.svg" alt="" /></span>1007 Lausanne, Avenue de Cour 25</h5>
                    <h3 class="blog_h_head">{{$post->property_type}}, {{$post->rooms}}, {{$post->surface_area}}</h3>
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

        </div>

      </div>
    </div>
  </section> --}}
  <!-- banner  -->
@endsection
