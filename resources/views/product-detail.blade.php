@extends('layouts.layout')
@section('content')
<!-- hero_form_sec -->
{{-- {{$post}} --}}
<section class="property_details_top_sec">
    <div class="container">
        <div class="back_to_result">
            <a href="javascript::void(0)" onclick="window.history.back();"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>
        </div>
        <!--  -->
        <div class="slider_name">
            <div class="slider_name_left">
                <h3>{{$post->property_type}} {{$post->rooms}} rooms, {{$post->surface_area}} m²</h3>
                <p>
                    <img src="images/location_icon.svg" alt="" />
                    {{$post->user->name}},{{$post->postal_code}} , {{$post->address_property}} 
                </p>
            </div>
            <div class="slider_name_right d-flex">
                <h4>{{$post->price}} CHF</h4>
                <div class="list_social_action">
                    <a class="btn_social_action btn_to_call" href="tel:{{$post->phone}}">
                    <img src="{{ asset('assets/images/call_icon.svg') }}" alt="" /> Call</a>
                    <a class="btn_social_action btn_to_mail" href="javascript:void(0)" onclick="openInMaps('{{$post->address}}')"><img src="{{ asset('assets/images/navigation_icon.svg') }}" alt="" /> Itinerary</a>
                    <a class="btn_social_action btn_to_share" href="javascript:void(0)" onclick="shareContent()"><img src="{{ asset('assets/images/share_icon.svg') }}" alt="" /> Share</a>
                </div>
            </div>
        </div>
        <!--  -->

    </div>
</section>
<div class="page_fixed_top">
<section class="comman_tb_padding product_details_sec">
    <div class="container">
        <div class="img_slider_area">
            <div class="owl_slider">
                <div class="owl-carousel owl-theme preview_image" id="features_img_slider">
                    @foreach ($post->photos as $photo)


                    <div class="item">
                        <div class="owl_img">
                          <img class="preview_image" src="{{url('storage/'.$photo)}}" alt="" /> 
                          <a href="{{url('storage/'.$photo)}}" class="thumbnail wp_site_gallery"><i class="fa fa-search" aria-hidden="true"></i></a> 
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- <div class="slider_name d-flex">
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
            </div> -->
        </div>

        <div class="form_vidget bx_shadow_comman">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="feature_summry_bx">
                        <img src="{{ asset('assets/images/feature_surface.svg') }}" alt="icon" />
                        <h4>{{$post->surface_area}} m²</h4>
                        <p class="mb-0">Surface</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="feature_summry_bx">
                        <img src="{{ asset('assets/images/feature_building.svg') }}" alt="" />
                        <h4>{{$post->floor}}</h4>
                        <p class="mb-0">Floor</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form_vidget bx_shadow_comman">
            <h4 class="tab_title mb-4">Description</h4>
            <div class="row">
                <div class="col-md-12">
                    <p class="post_description">
                        {{$post->description}}
                    </p>
                </div>
            </div>
        </div>
        <div class="form_vidget bx_shadow_comman">
            <h4 class="tab_title mb-4">Equipment</h4>
            <div class="row">
                <div class="col-md-12">
                    <ul class="list_style_feat">
                        @if($post->features)
                        @foreach ($post->features as $feature)
                        <li>{{$feature}}</li>

                        @endforeach
                        @endif
                        {{-- <li>Elevator</li>
                        <li>Elevator</li>
                        <li>Elevator</li>
                        <li>Elevator Elevator</li> --}}
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="form_vidget bx_shadow_comman">
            <h4 class="tab_title mb-4">Documents available</h4>
            <div class="row">
                <div class="col-md-12 preview_documents">

                </div>
            </div>
        </div> --}}
        <!--<div class="form_vidget">-->
        <!--    <p class="mb-0">-->
        <!--        <img src="images/date_icon.svg" class="me-1" alt="" />-->
        <!--        Available from {{date('Y-m-d')}}-->
        <!--    </p>-->
        <!--</div>-->

        <div class="form_vidget bx_shadow_comman">
            <h4 class="tab_title mb-4">Advertiser</h4>
            <div class="row">
                <div class="col-md-12">
                    <p>{{$post->agency_name}}</p>
                    <p>{{$post->address}},</p>
                    <p>{{$post->location}},</p>
                    <p>{{$post->postal_code}},</p>
                    <p>{{$post->email}}</p>
                    <p>{{$post->phone}}</p>
                    <div class="pro_overview_cotact">
                      <a class="contaic_mail_btn border_btn" href="mailto:testmail.com"><img src="{{ asset('assets/images/mail_icon_red.svg') }}" alt="" /> Contact by email</a>
                    </div>
                </div>
            </div>
        </div>
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
                    <div class="upcomimg_events_img_box"> <img src="{{ asset('storage/' . $post->photos[0]) }}" alt="">
</div>
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
@section("scripts")
<script>
function shareContent() {
  if (navigator.share) {
    navigator.share({
      title: document.title,
      text: "Check this out!",
      url: window.location.href,
    })
    .then(() => console.log("Shared successfully"))
    .catch((error) => console.log("Error sharing:", error));
  } else {
    alert("Your browser does not support the Web Share API");
  }
}
function openInMaps(address) {
  const encodedAddress = encodeURIComponent(address);
  const googleMapsUrl = `https://www.google.com/maps?q=${encodedAddress}`;

  // Check if the user is on an iPhone or iPad
  if (navigator.platform.indexOf("iPhone") !== -1 || navigator.platform.indexOf("iPad") !== -1) {
    window.location.href = `maps://maps.apple.com/?q=${encodedAddress}`;
  } else {
    // Default to Google Maps
    window.open(googleMapsUrl, "_blank");
  }
}

</script>
<script>
	// For Gallery
		$(function(){
			
			$('.wp_site_gallery').viewbox();
			//$('.thumbnail-2').viewbox();

			(function(){
				var vb = $('.popup-link').viewbox();
				$('.popup-open-button').click(function(){
					vb.trigger('viewbox.open');
				});
				$('.close-button').click(function(){
					vb.trigger('viewbox.close');
				});
			})();
			
		});
	
  
	</script>
@endsection
</div>