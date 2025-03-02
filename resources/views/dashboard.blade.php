@extends('layouts.layout')
@section('content')
    <section class="property_view_sec comman_tb_padding">
        <div class="container">
            <div class="row">
                <!-- Left Profile Section -->
                <div class="col-md-3">
                    <div class="card white_widget_card">
                        <div class="d-flex profile_img_bx">
                            <div class="text-center profile_img me-2">
                                <img src="assets/images/properties1.jpg" class="" alt="Profile" />
                            </div>
                            <div>
                                <h5 class="mb-1">{{Auth::user()->name}}</h5>
                                <p class="mb-0 text-muted">Administrator</p>
                            </div>
                        </div>
                        <hr />
                        <div class="profile_info">
                            <p><strong>Account Information</strong></p>
                            <p>Email: {{Auth::user()->email}}</p>
                            <p>Phone: +33 1 23 45 67 89</p>
                            <p>Active ads: 3</p>
                            <p>Active requests: 3</p>
                        </div>
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="col-md-9">
                    <!-- Action Buttons -->
                    <div class="row mb-3">
                        <div class="col-md-6 d-flex">
                            <div class="post_ad_box post_ad_only text-white w-100">
                                <div class="d-flex align-items-center">
                                    <div class="card-body">
                                        <h5><strong>Post an ad</strong></h5>
                                        <p>Create an attractive ad for your property</p>
                                        <a class="btn btn_light" href="{{ route('add-post') }}"><img class="me-1"
                                                src="assets/images/upload_icon_red.svg" alt="" />
                                            Add an ad</a>
                                    </div>
                                    <div class="ps-2">
                                        <img src="assets/images/upload_icon.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="post_ad_box post_request_only text-white w-100">
                                <div class="d-flex align-items-center">
                                    <div class="card-body">
                                        <h5><strong>Post request</strong></h5>
                                        <p>Create a request to find your ideal property</p>
                                        <a class="btn btn_light" href="{{route('add-request')}}"><img class="me-1"
                                                src="assets/images/search_icon_blue.svg" alt="" />
                                            Post a request</a>
                                    </div>
                                    <div class="ps-2">
                                        <img src="assets/images/search_icon_white.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- My Ads Section -->
                    <div class="card white_widget_card mb-4">
                        <h5 class="mb-3 title_5">My ads</h5>

                        <!-- Ad Item -->
                        @foreach ($posts as $post)


                        <div class="ads_vidget_box d-flex justify-content-between align-items-center pb-2 mb-2">
                            <div class="d-flex">
                                <div class="property_thumb_img me-3">
                                    @if(isset($post->photos) && count($post->photos))
                                    <img src="{{ asset('storage/' . $post->photos[0]) }}" alt="">
                                    @endif

                                </div>
                                <div>
                                    <h5>{{ $post->agency_name }}</h5>
                                    <p class="text-muted mb-0">{{$post->ad_type}}</p>
                                    <h6 class="text-danger">{{$post->price}} CHF</h6>
                                    <div class="d-flex align-items-center">
                                        <span class="pro_status_btn me-2">Active</span>
                                        <p class="m-0">245 views</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ads_vidget_trash">
                                <a href="{{url('/post-delete/'.$post->id)}}"><span class="icon-trash"><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="ads_vidget_box d-flex justify-content-between align-items-center pb-2 mb-2">
                            <div class="d-flex">
                                <div class="property_thumb_img me-3">
                                    <img src="images/property_img1.jpg" alt="" />
                                </div>
                                <div>
                                    <h5>New 4.5 room apartment</h5>
                                    <p class="text-muted mb-0">Lausanne, Vaud</p>
                                    <h6 class="text-danger">950,000 CHF</h6>
                                    <div class="d-flex align-items-center">
                                        <span class="pro_status_btn me-2">Active</span>
                                        <p class="m-0">245 views</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ads_vidget_trash">
                                <span class="icon-trash"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="ads_vidget_box expired_property d-flex justify-content-between align-items-center pb-2 mb-2"
                            data-bs-toggle="modal" data-bs-target=".subscription_exp_modal">
                            <div class="d-flex">
                                <div class="property_thumb_img me-3">
                                    <img src="images/property_img1.jpg" alt="" />
                                </div>
                                <div>
                                    <h5>New 4.5 room apartment</h5>
                                    <p class="text-muted mb-0">Lausanne, Vaud</p>
                                    <h6 class="text-danger">950,000 CHF</h6>
                                    <div class="d-flex align-items-center">
                                        <span class="pro_status_expired me-2">Expired</span>
                                        <p class="m-0 me-2">245 views</p>
                                        <p class="text-danger mb-0">Expired on 03/10/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ads_vidget_trash">
                                <a class="border_btn me-2" href="">Renew Advert</a>
                                <span class="icon-trash"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                            </div>
                        </div> --}}
                    </div>

                    <!-- My Requests Section -->
                    <div class="card white_widget_card">
                        <h5 class="mb-3 title_5">My requests</h5>

                        <!-- Request Item -->
                        @foreach ($requests as $request)


                        <div class="ads_vidget_box d-flex justify-content-between align-items-center pb-2 mb-2">
                            <div class="d-flex">
                                <div>
                                    <h5>{{$request->search}}</h5>
                                    <p class="text-muted mb-2">{{$request->npa}}, {{$request->city}}</p>
                                    <div class="d-flex align-items-center">
                                        <p class="m-0 me-3">{{$request->max_budget}} CHF/month</p>
                                        <span class="pro_status_btn">Active</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ads_vidget_trash">
                                <a href="{{url('/request-delete/'.$request->id)}}"><span class="icon-trash"><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="ads_vidget_box expired_property d-flex justify-content-between align-items-center pb-2 mb-2"
                            data-bs-toggle="modal" data-bs-target=".subscription_exp_modal">
                            <div class="d-flex">
                                <div>
                                    <h5>New 4.5 room apartment</h5>
                                    <p class="text-muted mb-2">Lausanne, Vaud</p>
                                    <div class="d-flex align-items-center">
                                        <p class="m-0 me-2">3500 CHF/month</p>
                                        <span class="pro_status_expired me-2">Expired</span>
                                        <p class="text-danger mb-0">Expired on 03/10/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ads_vidget_trash d-flex align-items-center">
                                <a class="border_btn me-2" href="">Renew Advert</a>
                                <span class="icon-trash"><i class="fa fa-trash-o" aria-hidden="true"></i></span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
