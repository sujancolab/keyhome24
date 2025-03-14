@extends('layouts.layout')
@section('content')
<!-- hero_form_sec -->
<section class="hero_form_sec hero-section- text-center py-5-">
    <div class="container">
      <h1 class="main_form_title text-white">{{__t('landingTitle')}}</h1>
      <div class="hero_form_area home_page_form_width">
        <div class="home_page_form_nav">
            <ul class="d-inline-flex-">
              <li>
                <a class="active" href="{{route('rent-buy')}}">
                  <img src="{{ asset('assets/images/key_icon.svg') }}" alt="" />
                  {{__t('searchBarRentButton')}}
                </a>
            </li>
            <li>
                <a class="" href="{{route('rent-buy')}}">
                  <img src="{{ asset('assets/images/home_icon.svg') }}" alt="" />
                  {{__t('searchBarBuyButton')}}
                </a>
            </li>
            <li>
                <a class="" href="{{route('share-accommodation')}}">
                  <img src="{{ asset('assets/images/user_multiple.svg') }}" alt="" />
                  {{__t('searchRequestsButton')}}
                </a>
            </li>
            </ul>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="properties_sec comman_tb_padding">
    <div class="container">
      <div class="heading_box two_column_title text-center-">
        <h2 class="">{{ __t('Titel_feature_properties') }}</h2>
        <!--<a class="right_arrow_more" href="">See More <img src="assets/images/right_arrow_big.svg" alt="" /></a>-->
      </div>
      <!--  -->
      <div class="latest_new_area comman_top">
        <div class="row">
            @foreach ($posts as $post)


          <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex">
              <a href="{{url('/detail/'.$post->id)}}">
                <div class="blog_box_h_inner">
                  <div class="blog_img_box upcomimg_events_box_inner">
                    <div class="upcomimg_events_img_box">
                        @if(isset($post->photos) && count($post->photos))
                        <img src="{{ asset('storage/' . $post->photos[0]) }}" alt="">
                        @endif
                    </div>
                    <div class="pro_price_over">
                      <h4 class="price_sepration">{{explode('.', $post->price)[0]}} CHF</h4>
                      <p>{{$post->ad_type=="sell" ? __t('TitelOnBuyAnnoucementHome_page') :__t('TitelOnRentAnnoucementHome_page')}}</p>
                    </div>
                  </div>
                  <div class="blog_txt_area">
                    <h5><span><img src="assets/images/location_icon.svg" alt="" /></span>{{$post->postal_code}},{{$post->city}},{{$post->address}},{{$post->address_property}},{{$post->address_property}}</h5>
                    <h3 class="blog_h_head">{{ucfirst($post->property_type)}}, {{$post->rooms}} {{__t('TitelOnAnnoucementHome_page')}}, {{$post->surface_area}} m²</h3>
                    <ul class="list_amenties">
                      <li><img src="assets/images/amenties_bed.svg" alt="" /> 4.5</li>
                      <li><img src="assets/images/amenties_bath.svg" alt="" /> {{$post->bathrooms}}</li>
                      <li><img src="assets/images/amenties_measure2.svg" alt="" /> {{$post->surface_area}} m²</li>
                    </ul>
                  </div>
                </div>
              </a>
          </div>
          @endforeach
          <!-- Pagination Links -->
<div class="d-flex justify-content-center pagination_style">
    {{ $posts->links() }}
</div>
        </div>

      </div>
    </div>
  </section>
  <!-- banner  -->

  <!-- website_feature_sec -->
  <section class="website_feature_sec">
    <div class="container">
      <div class="heading_box text-center">
        <h2 class="">{{ __t('TitelUnder_the_ad_grid_Why trust us? ') }}?</h2>
      </div>
      <div class="comman_top">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 cus_stories_bx text-center">
            <div class="cus_stories">
              <div class="cus_pro_img">
                <img src="assets/images/safety_guard_icon.svg">
              </div>
              <h3>{{ __t('TitelUnder_the_ad_grid_Safety guaranteed') }}</h3>
              <p>{{__t('secure_transaction_and_protected_data')}}</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 cus_stories_bx text-center">
            <div class="cus_stories">
              <div class="cus_pro_img">
                <img src="assets/images/tarifs_transparents.svg">
              </div>
              <h3>{{__t('TitelUnder_the_ad_grid_ Transparent pricing')}}</h3>
              <p>{{__t('TitelUnder_the_ad_grid_Support service')}}</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 cus_stories_bx text-center">
            <div class="cus_stories">
              <div class="cus_pro_img">
                <img src="assets/images/service_support.svg">
              </div>
              <h3>{{__t('TitelUnder_the_ad_grid_Support service')}}</h3>
              <p>{{__t('TitelUnder_the_ad_grid_Support service_text')}}</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 cus_stories_bx text-center">
            <div class="cus_stories">
              <div class="cus_pro_img">
                <img src="assets/images/visibilite_maximale.svg">
              </div>
              <h3>{{__t('TitelUnder_the_ad_grid_Maximum visibility')}}</h3>
              <p>{{__t('TitelUnder_the_ad_grid_Maximum visibility_text')}}</p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>

@endsection
