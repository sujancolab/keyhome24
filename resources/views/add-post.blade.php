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
                                <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                                <p class="mb-0 text-muted">Administrator</p>
                            </div>
                        </div>
                        <hr />
                        <div class="profile_info">
                            <p><strong>Account Information</strong></p>
                            <p>Email: {{ Auth::user()->email }}</p>
                            <p>Active ads: {{ count($posts) }}</p>
                            <p>Active requests: {{ count($requests) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="col-md-9">
                    <!-- My Ads Section -->
                    <div class="card white_widget_card mb-4">
                        <h5 class="mb-3 title_5">{{ __t('FormulTitelPostAnAd') }}</h5>
                        <div class="multistep_area">
                            <div class="wizard_header">
                                <nav class="nav nav-pills nav-fill">
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">{{ __t('formStepName1') }}</div>
                                    </a>
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">{{ __t('formStepName2') }}</div>
                                    </a>
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">{{ __t('formStepName3') }}</div>
                                    </a>
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">{{ __t('formStepName4') }}</div>
                                    </a>
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">{{ __t('formStepName5') }}</div>
                                    </a>
                                </nav>
                            </div>
                            <div class="card-body p-0 mt-5">
                                <form class="comman_form" method="POST" action="{{ route('savePost') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab d-none">
                                        <h4 class="tab_title mb-4">{{ __t('TtelformStepName1AgencyInformation') }}</h4>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">{{ __t('TtelformStepName1Agencyname') }} <span
                                                        class="mandatory">*</span></label>
                                                <input type="text" class="form-control" name="agency_name"
                                                    placeholder="Real Estate SA" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">{{ __t('TtelformStepName1ProfessionalEmail') }}
                                                    <span class="mandatory">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="contact@agence.ch" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">{{ __t('TtelformStepName1Phone') }} <span
                                                        class="mandatory">*</span></label>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="+41 XX XXX XX XX" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">{{ __t('TtelformStepName1Address') }} <span
                                                        class="mandatory">*</span></label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Station Street 1" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">{{ __t('TtelformStepName1Location') }} <span
                                                        class="mandatory">*</span></label>
                                                <input type="text" class="form-control" name="location"
                                                    placeholder="1000 Lausanne" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab d-none">
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">{{ __t('formStepName2Titler') }}</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="radio_card_style">
                                                        <input type="radio" name="ad_type" value="sell" />
                                                        <div class="card p-3 text-center">
                                                            <h5 class="card-title">
                                                                {{ __t('formStepName2SelectionButtonSell') }}</h5>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="radio_card_style">
                                                        <input type="radio" name="ad_type" value="rent" />
                                                        <div class="card p-3 text-center">
                                                            <h5 class="card-title">
                                                                {{ __t('formStepName2SelectionButtonToRentOut') }}</h5>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">
                                                {{ __t('formStepName2TitlerCategory and type of propety') }}</h4>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">{{ __t('formStepName2SectionCategory') }}
                                                        <span class="mandatory">*</span></label>
                                                    <select class="form-control custom-select" name="category">
                                                        <option value="">Select a category</option>
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
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label
                                                        class="form-label">{{ __t('formStepName2SectionTypeOfProperty') }}<span
                                                            class="mandatory">*</span></label>
                                                    <select class="form-control custom-select" name="property_type">
                                                        <option value="">Select a type</option>
                                                        <optgroup label="{{ __t('SearchBarSelectorResidential') }}">
                                                            <option value="apartment">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyApartment') }}
                                                            </option>
                                                            <option value="house">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyHouse') }}
                                                            </option>
                                                            <option value="villa">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyVilla') }}
                                                            </option>
                                                            <option value="studio">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyStudio') }}
                                                            </option>
                                                            <option value="duplex">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyDuplex') }}
                                                            </option>
                                                            <option value="chalet">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyChalet') }}
                                                            </option>
                                                            <option value="loft">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyLoft') }}
                                                            </option>
                                                        </optgroup>

                                                        <optgroup label="{{ __t('SearchBarSelectorCommercial') }}">
                                                            <option value="office">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyOffice') }}
                                                            </option>
                                                            <option value="comercialspace">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyCommercialSpace') }}
                                                            </option>
                                                            <option value="warehouse">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyWarehouse') }}
                                                            </option>
                                                            <option value="factory">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyFactory') }}
                                                            </option>
                                                            <option value="farm">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyFarm') }}
                                                            </option>
                                                        </optgroup>

                                                        <optgroup
                                                            label="{{ __t('formStepName2SelectionTypeOfPropertyLand') }}">
                                                            <option value="building_land">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyBuildingPlot') }}
                                                            </option>
                                                            <option value="agricultural_land">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyAgriculturalLand') }}
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="{{ __t('SearchBarSelectorParking') }}">
                                                            <option value="garage">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyGarage') }}
                                                            </option>
                                                            <option value="parkinglot">
                                                                {{ __t('formStepName2SelectionTypeOfPropertyParkingLot') }}
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">{{ __t('formStepName2TitlerPrice') }}</h4>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3 form-group">
                                                    <label
                                                        class="form-label">{{ __t('formStepName2TitlerPriceSellSelection') }}
                                                        <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="price"
                                                        placeholder="0" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">{{ __t('formStepName2TitlerLocation') }}</h4>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">{{ __t('formStepName2TitlerAddress') }}
                                                        <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="address_property"
                                                        placeholder="Street and number" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">{{ __t('formStepName2TitlerPostalCode') }}
                                                        <span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="postal_code"
                                                        placeholder="1000" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">{{ __t('formStepName2TitlerCity') }} <span
                                                            class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="city"
                                                        placeholder="City" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">{{ __t('formStepName2TitlerCanton') }} <span
                                                            class="mandatory">*</span></label>
                                                    <select class="form-control custom-select" name="canton">
                                                        <option value="">Select a canton</option>
                                                        <option value="AG">Aargau</option>
                                                        <option value="AI">Appenzell Innerrhoden</option>
                                                        <option value="AR">Appenzell Ausserrhoden</option>
                                                        <option value="BE">Bern</option>
                                                        <option value="BL">Basel-Landschaft</option>
                                                        <option value="BS">Basel-Stadt</option>
                                                        <option value="FR">Fribourg</option>
                                                        <option value="GE">Geneva</option>
                                                        <option value="GL">Glarus</option>
                                                        <option value="GR">Grisons</option>
                                                        <option value="JU">Jura</option>
                                                        <option value="LU">Lucerne</option>
                                                        <option value="NE">Neuchâtel</option>
                                                        <option value="NW">Nidwald</option>
                                                        <option value="OW">Obwald</option>
                                                        <option value="SG">St. Gallen</option>
                                                        <option value="SH">Schaffhausen</option>
                                                        <option value="SO">Solothurn</option>
                                                        <option value="SZ">Schwytz</option>
                                                        <option value="TG">Thurgau</option>
                                                        <option value="TI">Ticino</option>
                                                        <option value="UR">Uri</option>
                                                        <option value="VD">Vaud</option>
                                                        <option value="VS">Valais</option>
                                                        <option value="ZG">Zug</option>
                                                        <option value="ZH">Zurich</option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">{{ __t('formStepName2TitlerFeatures') }}</h4>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Surface area (m²) <span
                                                            class="mandatory">*</span></label>
                                                    <input type="number" class="form-control" name="surface_area"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label
                                                        class="form-label">{{ __t('formStepName2TitlerNumberOfRooms') }}
                                                        <span class="mandatory">*</span></label>
                                                    <input type="number" class="form-control" name="rooms"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">{{ __t('formStepName2TitlerBathromms') }}
                                                        <span class="mandatory">*</span></label>
                                                    <input type="number" class="form-control" name="bathrooms"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">{{ __t('formStepName2TitlerFloor') }} <span
                                                            class="mandatory">*</span></label>
                                                    <input type="number" class="form-control" name="floor"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-lg-12 mb-3 form-group">
                                                    <label
                                                        class="form-label">{{ __t('formStepName2TitlerSpecialFeatures') }}
                                                        <span class="mandatory">*</span></label>
                                                    <div class="row checkbox_list">
                                                        <?php
                                                        $fontTexts = [
                                                            __t('formStepName2SpecialFeaturesSelction1'),
                                                            __t('formStepName2SpecialFeaturesSelction2'),
                                                            __t('formStepName2SpecialFeaturesSelction3'),
                                                            __t('formStepName2SpecialFeaturesSelction4'),
                                                            __t('formStepName2SpecialFeaturesSelction5'),
                                                            __t('formStepName2SpecialFeaturesSelction6'),
                                                            __t('formStepName2SpecialFeaturesSelction7'),
                                                            __t('formStepName2SpecialFeaturesSelction8'),
                                                            __t('formStepName2SpecialFeaturesSelction9'),
                                                            __t('formStepName2SpecialFeaturesSelction10'),
                                                            __t('formStepName2SpecialFeaturesSelction11'),
                                                            __t('formStepName2SpecialFeaturesSelction12'),
                                                            __t('formStepName2SpecialFeaturesSelction13'),
                                                            __t('formStepName2SpecialFeaturesSelction14'),
                                                            __t('formStepName2SpecialFeaturesSelction15'),
                                                            __t('formStepName2SpecialFeaturesSelction16'),
                                                            __t('formStepName2SpecialFeaturesSelction17'),
                                                            __t('formStepName2SpecialFeaturesSelction18'),
                                                            __t('formStepName2SpecialFeaturesSelction19'),
                                                            __t('formStepName2SpecialFeaturesSelction20'),
                                                            __t('formStepName2SpecialFeaturesSelction21'),
                                                            __t('formStepName2SpecialFeaturesSelction22'),
                                                            __t('formStepName2SpecialFeaturesSelction23'),
                                                            __t('formStepName2SpecialFeaturesSelction24'),
                                                            __t('formStepName2SpecialFeaturesSelction25'),
                                                            __t('formStepName2SpecialFeaturesSelction26'),
                                                            __t('formStepName2SpecialFeaturesSelction27'),
                                                            __t('formStepName2SpecialFeaturesSelction28'),
                                                            __t('formStepName2SpecialFeaturesSelction29'),
                                                            __t('formStepName2SpecialFeaturesSelction30'),
                                                            __t('formStepName2SpecialFeaturesSelction31'),
                                                            __t('formStepName2SpecialFeaturesSelction32'),
                                                            __t('formStepName2SpecialFeaturesSelction33'),
                                                            __t('formStepName2SpecialFeaturesSelction34'),
                                                            __t('formStepName2SpecialFeaturesSelction35'),
                                                            __t('formStepName2SpecialFeaturesSelction36'),
                                                            __t('formStepName2SpecialFeaturesSelction37'),
                                                            __t('formStepName2SpecialFeaturesSelction38'),
                                                            __t('formStepName2SpecialFeaturesSelction39'),
                                                            __t('formStepName2SpecialFeaturesSelction40'),
                                                        ];

                                                        ?>
                                                        @foreach ($fontTexts as $fonttext)
                                                            <div class="col-md-4 mb-2">
                                                                <div class="checkbox">
                                                                    <label><input type="checkbox" name="features[]"
                                                                            value="{{ $fonttext }}" />{{ $fonttext }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">{{__t('formStepName2Description')}}</h4>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3 form-group">
                                                    <label class="form-label">{{__t('formStepName2DescriptionDetail')}} <span
                                                            class="mandatory">*</span></label>
                                                    <textarea class="form-control" name="description" style="height: 100px"
                                                        placeholder="Describe your property in detail..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab d-none">
                                        <h4 class="tab_title mb-4">{{__t('formStepName3PhotoDocument')}}</h4>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3 form-group">
                                                <label class="form-label">{{__t('formStepName3PhOTO')}} <span
                                                        class="mandatory">*</span></label>
                                                <div>
                                                    <div class="upload__box">
                                                        <div class="upload__btn-box">
                                                            <label class="upload__btn">
                                                                <img src="images/upload_icon_gray.svg" alt=""
                                                                    class="mb-2" />
                                                                <h4 class="mb-2">{{__t('formStepName3Upload')}}</h4>
                                                                <h5 class="mb-1">PNG, JPG up to 10MB</h5>
                                                                <p class="file_count mb-0">{{__t('formStepName3Image')}}</p>
                                                                <input type="file" name="photos[]" multiple
                                                                    data-max_length="5" class="upload__inputfile" />
                                                            </label>
                                                        </div>
                                                        <div class="upload__img-wrap"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3 form-group">
                                                <label class="form-label">{{__t('formStepName3PDFdOC')}}</label>
                                                <div>
                                                    <div class="upload__box">
                                                        <div class="upload__btn-box">
                                                            <label class="upload__btn">
                                                                <img src="images/document_gray.svg" alt=""
                                                                    class="mb-2" />
                                                                <h4 class="mb-2">Upload PDFs</h4>
                                                                <h5 class="mb-1">PDF files up to 10MB</h5>
                                                                <p class="file_count mb-0">{{__t('formStepName3Doc')}}</p>
                                                                <input type="file" name="documents[]" multiple
                                                                    data-max_length="3" class="upload__inputfilePDF"
                                                                    accept=".pdf" />
                                                            </label>
                                                        </div>
                                                        <div class="upload__file-wrap"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab d-none">
                                        <div class="img_slider_area imgresize">
                                            <div class="owl_slider">
                                                <div class="owl-carousel owl-theme preview_image"
                                                    id="features_img_slider">
                                                    <div class="item">
                                                        <div class="owl_img">
                                                            <img class="preview_image" src="assets/images/properties1.jpg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="owl_img">
                                                            <img class="preview_image" src="assets/images/properties1.jpg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="owl_img">
                                                            <img class="preview_image" src="assets/images/properties1.jpg"
                                                                alt="" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="slider_name d-flex">
                                                <div class="slider_name_left">
                                                    <h3>Restaurant 0 {{__t('formStepName4ROMMS')}}, 4000 m²</h3>
                                                    <p>
                                                        <img src="images/location_icon.svg" alt="" />
                                                        jhsgdgasd , 8888 dsf
                                                    </p>
                                                </div>
                                                <div class="slider_name_right">
                                                    <h4>88866 CHF</h4>
                                                    <p>{{__t('formStepName4GrossPrice')}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form_vidget">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="feature_summry_bx">
                                                        <img src="images/feature_surface.svg" alt="" />
                                                        <h4>4000 m²</h4>
                                                        <p class="mb-0">Surface</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="feature_summry_bx">
                                                        <img src="images/feature_building.svg" alt="" />
                                                        <h4>0</h4>
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
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the 1500
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">Equipment</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="list_style_feat">
                                                        <li>Elevator</li>
                                                        <li>Elevator</li>
                                                        <li>Elevator</li>
                                                        <li>Elevator Elevator</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">Documents available</h4>
                                            <div class="row">
                                                <div class="col-md-12 preview_documents">
                                                    {{-- <p class="p-2 mb-2 rounded" style="background-color: #f9f4f4">
                                                        test-pdf-name.pdf
                                                    </p>
                                                    <p class="p-2 mb-2 rounded" style="background-color: #f9f4f4">
                                                        test-pdf-name.pdf
                                                    </p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="form_vidget">-->
                                        <!--    <p class="mb-0">-->
                                        <!--        <img src="images/date_icon.svg" class="me-1" alt="" />-->
                                        <!--        Available from {{ date('Y-m-d') }}-->
                                        <!--    </p>-->
                                        <!--</div>-->

                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4 ">Advertiser</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="agency_name">56547577575</p>
                                                    <p class="phone_number">jkhjdhsa.c clacsdcs@hhh</p>
                                                    <p class="email">56547577575</p>
                                                    <p class="address">jkhjdhsa.ccsdcs@hhh</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab d-none">
                                        <h4 class="tab_title mb-4">{{__t('formStepName5Titel')}}</h4>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pricing-plan">
                                                    <h2>{{__t('formStepName5TitelBasic')}}</h2>
                                                    <p>{{__t('formStepName5TitelBasicDescription1')}}</p>
                                                    <h5 class="price">{{__t('formStepName5TitelBasicPrice')}} </h5>
                                                    <ul class="list_features_price">
                                                        <li>{{__t('formStepName5TitelBasic Period')}}</li>
                                                        <li>{{__t('formStepName5TitelBasicDescription2')}}</li>
                                                        <li>{{__t('formStepName5TitelBasicDescription3')}}</li>
                                                    </ul>
                                                    <input type="radio" name="publication_duration" value="basic" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pricing-plan">
                                                    <h2>{{__t('formStepName5TitelStandard')}}</h2>
                                                    <p>{{__t('formStepName5TitelStandardPeriod')}}</p>
                                                    <h5 class="price">{{__t('formStepName5TitelStandardPrice')}}</h5>
                                                    <ul class="list_features_price">
                                                        <li>{{__t('formStepName5TitelStandardDescription1')}}</li>
                                                        <li>{{__t('formStepName5TitelStandardDescription2')}}</li>
                                                        <li>{{__t('formStepName5TitelStandardDescription3')}}</li>
                                                        <li>{{__t('formStepName5TitelStandardDescription4')}}</li>
                                                    </ul>
                                                    <input type="radio" name="publication_duration" value="stan" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pricing-plan">
                                                    <h2>{{__t('formStepName5TitelPremium')}}</h2>
                                                    <p>{{__t('formStepName5TitelPremiumPeriod')}}</p>
                                                    <h5 class="price">{{__t('formStepName5TitelPremiumPrice')}}</h5>
                                                    <ul class="list_features_price">
                                                        <li>{{__t('formStepName5TitelPremiumDescription1')}}</li>
                                                        <li>{{__t('formStepName5TitelPremiumDescription2')}}</li>
                                                        <li>{{__t('formStepName5TitelPremiumDescription3')}}</li>
                                                        <li>{{__t('formStepName5TitelPremiumDescription4')}}</li>
                                                        <li>{{__t('formStepName5TitelPremiumDescription5')}}</li>
                                                    </ul>
                                                    <input type="radio" name="publication_duration" value="premium" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget mt-3">
                                            <h4 class="tab_title mb-4">{{__t('formStepName5TitelPayment')}}</h4>
                                            <div>
                                                <label>
                                                    <input type="radio" name="payment_method" value="bank_card" />
                                                    {{__t('formStepName5TitelBankCardButton')}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wizard_footer text-end mt-3">
                                        <div class="d-flex">
                                            <button type="button" id="back_button" class="btn btn-link"
                                                onclick="back()">{{__t('formStepName4Back')}}</button>
                                            <button type="button" id="next_button"
                                                class="btn btn_comman ms-auto">{{__t('formStepName5TitelPayButton')}}</button>
                                            {{-- <button type="submit">Save Data</button> --}}
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>
    <script>
        var current = 0;
        var tabs = $(".tab");
        var tabs_pill = $(".tab-pills");
        var progressBar = $(".progress-bar");

        loadFormData(current);

        function loadFormData(n) {
            $(tabs_pill).removeClass("active"); // Remove active from all
            $(tabs_pill[n]).addClass("active"); // Add active to current step
            $(tabs[n]).removeClass("d-none"); // Show current tab

            $("#back_button").attr("disabled", n == 0 ? true : false);

            if (n == tabs.length) {
                $("#next_button").attr("type", "submit").text("Submit").removeAttr("onclick");
                updatePreview(); // Update preview when reaching the last tab
            } else {
                $("#next_button")
                    .attr("type", "button")
                    .text("Continue")
                    .attr("onclick", "next()");
                updatePreview(); // Update preview when reaching the last tab
            }

            for (var i = 0; i < n; i++) {
                $(tabs_pill[i]).addClass("completed");
            }

            var progressPercentage = (n / (tabs.length - 1)) * 100;
            progressBar.css("width", progressPercentage + "%");
        }

        function next() {
            // Check if all required fields in the current tab are filled
            var currentTab = $(tabs[current]);
            var isValid = true;

            currentTab.find("[required]").each(function() {
                if ($(this).val() === "") {
                    isValid = false;
                    $(this).addClass("is-invalid"); // Add invalid class for styling
                } else {
                    $(this).removeClass("is-invalid"); // Remove invalid class if filled
                }
            });

            if (!isValid) {
                alert("Please fill out all required fields.");
                return; // Stop the function if validation fails
            }

            $(tabs[current]).addClass("d-none"); // Hide current tab
            $(tabs_pill[current]).removeClass("active"); // Remove active

            current++;
            loadFormData(current);
        }

        function back() {
            $(tabs[current]).addClass("d-none"); // Hide current tab
            $(tabs_pill[current]).removeClass("active"); // Remove active

            current--;
            loadFormData(current);
        }

        function updatePreview() {
            // Update the preview tab with form data
            var agencyName = $("input[name='agency_name']").val();
            var email = $("input[name='email']").val();
            var phone = $("input[name='phone']").val();
            var address = $("input[name='address']").val();
            var location = $("input[name='location']").val();
            var adType = $("input[name='ad_type']:checked").val();
            var category = $("select[name='category']").val();
            var propertyType = $("select[name='property_type']").val();
            var price = $("input[name='price']").val();
            var surfaceArea = $("input[name='surface_area']").val();
            var rooms = $("input[name='rooms']").val();
            var bathrooms = $("input[name='bathrooms']").val();
            var floor = $("input[name='floor']").val();
            var description = $("textarea[name='description']").val();

            // Update the preview section with the captured data
            $(".slider_name_left h3").text(`${propertyType} ${rooms} rooms, ${surfaceArea} m²`);
            $(".slider_name_left p").html(`<img src="assets/images/location_icon.svg" alt="" /> ${address}, ${location}`);
            $(".slider_name_right h4").text(`${price} CHF`);
            $(".feature_summry_bx h4").eq(0).text(`${surfaceArea} m²`);
            $(".feature_summry_bx h4").eq(1).text(`${floor}`);
            $(".post_description").eq(0).text(description);
            $(".agency_name").text(agencyName);
            $(".email").text(email);
            $(".phone_number").text(phone);
            $(".address").text(address);

            // Update the equipment list
            var features = $("input[name='features[]']:checked").map(function() {
                return $(this).val();
            }).get();
            console.log("features", features);

            var featuresList = features.map(feature => `<li>${feature}</li>`).join('');
            console.log("featuresList", featuresList);

            $(".list_style_feat").html(featuresList);
        }
    </script>
    <!-- upload img and preview -->

    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];
            var maxFiles = 5; // Limit to 5 files

            $(".upload__inputfile").each(function() {
                $(this).on("change", function(e) {
                    imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
                    var fileCountElement = $(this)
                        .closest(".upload__box")
                        .find(".file_count");

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);

                    if (imgArray.length + filesArr.length > maxFiles) {
                        alert("You can only upload up to " + maxFiles + " images.");
                        return false;
                    }


                    filesArr.forEach(function(f) {
                        if (!f.type.match("image.*")) {
                            return;
                        }
                        imgArray.push(f);

                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var html =
                                "<div class='upload__img-box'><div style='background-image: url(" +
                                e.target.result +
                                ")' data-file='" +
                                f.name +
                                "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                            var sliderprevhtml = `<div class="item">
                                                        <div class="owl_img">
                                                            <img class="preview_image"  src="${e.target.result}" alt="" />
                                                        </div>
                                                    </div>`;
                            $("#features_img_slider").append(sliderprevhtml);

                            imgWrap.append(html);
                            updateFileCount(fileCountElement);
                            // Destroy and reinitialize Owl Carousel
                            var owl = $("#features_img_slider");
                            owl.owlCarousel('destroy');
                            owl.owlCarousel({
                                autoplay: false,
                                loop: false,
                                nav: true,
                                dots: false,
                                margin: 0,
                                // center: true,
                                animationSpeed: 200,

                                //animateOut: 'fadeOut',
                                items: 1,
                                navText: [
                                    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                                    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
                                ],

                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    600: {
                                        items: 1
                                    },
                                    1000: {
                                        items: 1
                                    }
                                }
                            });

                            // Set the src of images with class 'preview_image'
                            // $(".preview_image").each(function(index) {
                            //     if (index < imgArray.length) {
                            //         $(this).attr("src", URL.createObjectURL(imgArray[index]));
                            //     }
                            // });
                        };
                        reader.readAsDataURL(f);
                    });
                });
            });

            $("body").on("click", ".upload__img-close", function() {
                var fileCountElement = $(this)
                    .closest(".upload__box")
                    .find(".file_count");
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
                updateFileCount(fileCountElement);
            });

            function updateFileCount(element) {
                element.text(imgArray.length + " / " + maxFiles + " images");
            }
        }
    </script>
    <!-- pdf upload -->
    <script>
        jQuery(document).ready(function() {
            PdfUpload();
        });

        function PdfUpload() {
            var fileWrap = "";
            var fileArray = [];
            var maxFiles = 3;

            $(".upload__inputfilePDF").each(function() {
                $(this).on("change", function(e) {
                    fileWrap = $(this)
                        .closest(".upload__box")
                        .find(".upload__file-wrap");
                    var fileCountElement = $(this)
                        .closest(".upload__box")
                        .find(".file_count");

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);

                    if (fileArray.length + filesArr.length > maxFiles) {
                        alert("You can only upload up to " + maxFiles + " PDFs.");
                        return false;
                    }

                    filesArr.forEach(function(f) {
                        if (f.type !== "application/pdf") {
                            alert("Only PDF files are allowed.");
                            return;
                        }
                        fileArray.push(f);

                        var html =
                            "<div class='upload__file-box'>" +
                            "<div class='file-preview' data-file='" +
                            f.name +
                            "'>" +
                            "<span class='file-name'>" +
                            f.name +
                            "</span>" +
                            "<button class='upload__file-close'>&times;</button>" +
                            "</div></div>";
                        fileWrap.append(html);

                        let prevpdf = `<p class="p-2 mb-2 rounded" style="background-color: #f9f4f4">
                                                        ${f.name}
                                                    </p>`;
                        $(".preview_documents").append(prevpdf);
                        updateFileCount(fileCountElement);
                    });
                });
            });

            $("body").on("click", ".upload__file-close", function() {
                var fileCountElement = $(this)
                    .closest(".upload__box")
                    .find(".file_count");
                var file = $(this).parent().data("file");
                for (var i = 0; i < fileArray.length; i++) {
                    if (fileArray[i].name === file) {
                        fileArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
                updateFileCount(fileCountElement);
            });

            function updateFileCount(element) {
                element.text(fileArray.length + " / " + maxFiles + " PDFs");
            }
        }
    </script>
@endsection
@endsection
