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
                            <p><strong>{{__t('dashboardInfoTitle')}}</strong></p>
                            <p>{{__t('dashboardInfoEmail')}}: {{Auth::user()->email}}</p>
                            <p>{{__t('dashboardInfoCountActiveAds')}}: 3</p>
                            <p>{{__t('dashboardInfoCountActiveRequest')}}: 3</p>
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
                                        <h5><strong>{{__t('actionGridTitle')}}</strong></h5>
                                        <p>{{__t('actionGridDescription')}}</p>
                                        <a class="btn btn_light" href="{{ route('add-post') }}"><img class="me-1"
                                                src="assets/images/upload_icon_red.svg" alt="" />
                                            {{__t('actionGridButtonLabel')}}</a>
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
                                        <h5><strong>{{__t('actionGridDescriptionRequest')}}</strong></h5>
                                        <p>{{__t('actionGridDescriptionRequest')}}</p>
                                        <a class="btn btn_light" href="{{route('add-request')}}"><img class="me-1"
                                                src="assets/images/search_icon_blue.svg" alt="" />
                                            {{__t('actionGridButtonLabelRequest')}}</a>
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
                        <h5 class="mb-3 title_5">{{__t('dashboardTitleMyads')}}</h5>

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
                    </div>

                    <!-- My Requests Section -->
                    <div class="card white_widget_card">
                        <h5 class="mb-3 title_5">{{__t('dashboardTitleMyRequests')}}</h5>

                        <!-- Request Item -->
                        @foreach ($requests as $request)


                        <div class="ads_vidget_box d-flex justify-content-between align-items-center pb-2 mb-2">
                            <div class="d-flex">
                                <div>
                                    <h5>{{$request->search}}</h5>
                                    <p class="text-muted mb-2">{{$request->npa}}, {{$request->city}}</p>
                                    <div class="d-flex align-items-center">
                                        <p class="m-0 me-3">{{$request->max_budget}} CHF/month</p>
                                        <span class="pro_status_btn">{{ $request->status==1 ? __t('dashboardListAnnounceActive') : __t('dashboardListAnnounceExpiration')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ads_vidget_trash">
                                <a href="{{url('/request-delete/'.$request->id)}}"><span class="icon-trash"><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
