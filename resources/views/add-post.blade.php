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
                            <p>Phone: +33 1 23 45 67 89</p>
                            <p>Active ads: 3</p>
                            <p>Active requests: 3</p>
                        </div>
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="col-md-9">
                    <!-- My Ads Section -->
                    <div class="card white_widget_card mb-4">
                        <h5 class="mb-3 title_5">Post an ad</h5>
                        <div class="multistep_area">
                            <div class="wizard_header">
                                <nav class="nav nav-pills nav-fill">
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">Agency</div>
                                    </a>
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">Details</div>
                                    </a>
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">Photos</div>
                                    </a>
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">Preview</div>
                                    </a>
                                    <a class="nav-link tab-pills" href="#">
                                        <div class="wizard_icon">
                                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                        </div>
                                        <div class="wizard_name">Publication</div>
                                    </a>
                                </nav>
                            </div>
                            <div class="card-body p-0 mt-5">
                                <form class="comman_form" method="POST" action="{{ route('savePost') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab d-none">
                                        <h4 class="tab_title mb-4">Agency information</h4>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">Agency Name <span
                                                        class="mandatory">*</span></label>
                                                <input type="text" class="form-control" name="agency_name"
                                                    placeholder="Real Estate SA" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">Professional email <span
                                                        class="mandatory">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="contact@agence.ch" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">Phone <span class="mandatory">*</span></label>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="+41 XX XXX XX XX" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">Address <span class="mandatory">*</span></label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Station Street 1" required />
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                <label class="form-label">Location <span class="mandatory">*</span></label>
                                                <input type="text" class="form-control" name="location"
                                                    placeholder="1000 Lausanne" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab d-none">
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">Ad Type</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="radio_card_style">
                                                        <input type="radio" name="ad_type" value="sell" />
                                                        <div class="card p-3 text-center">
                                                            <h5 class="card-title">Sell</h5>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="radio_card_style">
                                                        <input type="radio" name="ad_type" value="rent" />
                                                        <div class="card p-3 text-center">
                                                            <h5 class="card-title">To rent out</h5>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">Category and type of property</h4>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Category <span
                                                            class="mandatory">*</span></label>
                                                    <select class="form-control custom-select" name="category">
                                                        <option value="">Select a category</option>
                                                        <option value="residential">Residential</option>
                                                        <option value="commercial">Commercial</option>
                                                        <option value="ground">Ground</option>
                                                        <option value="parking">Parking</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Property type <span
                                                            class="mandatory">*</span></label>
                                                    <select class="form-control custom-select" name="property_type">
                                                        <option value="">Select a type</option>
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">Price</h4>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3 form-group">
                                                    <label class="form-label">Price (CHF) <span
                                                            class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="price"
                                                        placeholder="0" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">Location</h4>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Address <span
                                                            class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="address_property"
                                                        placeholder="Street and number" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Postal code <span
                                                            class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="postal_code"
                                                        placeholder="1000" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">City <span
                                                            class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" name="city"
                                                        placeholder="City" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Canton <span
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
                                            <h4 class="tab_title mb-4">Features</h4>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Surface area (m²) <span
                                                            class="mandatory">*</span></label>
                                                    <input type="number" class="form-control" name="surface_area"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Number of rooms <span
                                                            class="mandatory">*</span></label>
                                                    <input type="number" class="form-control" name="rooms"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Bathrooms <span
                                                            class="mandatory">*</span></label>
                                                    <input type="number" class="form-control" name="bathrooms"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-3 form-group">
                                                    <label class="form-label">Floor <span
                                                            class="mandatory">*</span></label>
                                                    <input type="number" class="form-control" name="floor"
                                                        placeholder="0" required />
                                                </div>
                                                <div class="col-lg-12 mb-3 form-group">
                                                    <label class="form-label">Special Features <span
                                                            class="mandatory">*</span></label>
                                                    <div class="row checkbox_list">
                                                        <?php
                                                        $fontTexts = ['Equipped kitchen', 'Open kitchen', 'Dishwasher', 'Parquet', 'Tiling', 'Double glazing', 'Triple glazing', 'Wall cabinets', 'Dressing', 'Private laundry room', 'Cellar', 'Elevator', 'Chimney', 'Fiber optic connection', 'Minergie', 'Separate WC', 'Washing column', 'Balcony', 'Terrace', 'Private garden', 'Parking space', 'Garage', 'Closed box', 'Bicycle storage', 'Pool', 'View of the lake', 'View of the Alps', 'Clear view', 'Southern exposure', 'South-west exposure', 'Top floor'];

                                                        ?>
                                                        @foreach ($fontTexts as $fonttext)


                                                        <div class="col-md-4 mb-2">
                                                            <div class="checkbox">
                                                                <label><input type="checkbox" name="features[]"
                                                                        value="{{$fonttext}}" />{{$fonttext}}</label>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">Description</h4>
                                            <div class="row">
                                                <div class="col-lg-12 mb-3 form-group">
                                                    <label class="form-label">Detailed description <span
                                                            class="mandatory">*</span></label>
                                                    <textarea class="form-control" name="description" style="height: 100px"
                                                        placeholder="Describe your property in detail..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab d-none">
                                        <h4 class="tab_title mb-4">Photos and documents</h4>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3 form-group">
                                                <label class="form-label">Photos (max. 5) <span
                                                        class="mandatory">*</span></label>
                                                <div>
                                                    <div class="upload__box">
                                                        <div class="upload__btn-box">
                                                            <label class="upload__btn">
                                                                <img src="images/upload_icon_gray.svg" alt=""
                                                                    class="mb-2" />
                                                                <h4 class="mb-2">Upload images</h4>
                                                                <h5 class="mb-1">PNG, JPG up to 10MB</h5>
                                                                <p class="file_count mb-0">0 /5 images</p>
                                                                <input type="file" name="photos[]" multiple
                                                                    data-max_length="5" class="upload__inputfile" />
                                                            </label>
                                                        </div>
                                                        <div class="upload__img-wrap"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3 form-group">
                                                <label class="form-label">PDF documents (max. 3)</label>
                                                <div>
                                                    <div class="upload__box">
                                                        <div class="upload__btn-box">
                                                            <label class="upload__btn">
                                                                <img src="images/document_gray.svg" alt=""
                                                                    class="mb-2" />
                                                                <h4 class="mb-2">Upload PDFs</h4>
                                                                <h5 class="mb-1">PDF files up to 10MB</h5>
                                                                <p class="file_count mb-0">0 / 3 PDFs</p>
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
                                        <div class="img_slider_area">
                                            <div class="owl_slider">
                                                <div class="owl-carousel owl-theme preview_image" id="features_img_slider">
                                                    <div class="item">
                                                        <div class="owl_img">
                                                            <img class="preview_image" src="images/properties1.jpg" alt="" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="slider_name d-flex">
                                                <div class="slider_name_left">
                                                    <h3>Restaurant 0 rooms, 4000 m²</h3>
                                                    <p>
                                                        <img src="images/location_icon.svg" alt="" />
                                                        jhsgdgasd , 8888 dsf
                                                    </p>
                                                </div>
                                                <div class="slider_name_right">
                                                    <h4>88866 CHF</h4>
                                                    <p>Gross price</p>
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
                                        <div class="form_vidget">
                                            <p class="mb-0">
                                                <img src="images/date_icon.svg" class="me-1" alt="" />
                                                Available from 02/22/2025
                                            </p>
                                        </div>

                                        <div class="form_vidget">
                                            <h4 class="tab_title mb-4">Real estate agency</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>56547577575</p>
                                                    <p>jkhjdhsa.c clacsdcs@hhh</p>
                                                    <p>56547577575</p>
                                                    <p>jkhjdhsa.ccsdcs@hhh</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab d-none">
                                        <h4 class="tab_title mb-4">Choose your publication duration</h4>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pricing-plan">
                                                    <h2>Basic</h2>
                                                    <p>Ideal for a unique ad</p>
                                                    <h5 class="price">29.90 <sub>CHF</sub></h5>
                                                    <ul class="list_features_price">
                                                        <li>An ad for 30 days</li>
                                                        <li>Unlimited HD Photos</li>
                                                        <li>Basic Statistics</li>
                                                        <li>Email Support</li>
                                                    </ul>
                                                    <input type="radio" name="publication_duration" value="basic" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pricing-plan">
                                                    <h2>Pro</h2>
                                                    <p>For Real Estate Agents</p>
                                                    <h5 class="price">79.90 <sub>CHF</sub></h5>
                                                    <ul class="list_features_price">
                                                        <li>Up to 5 simultaneous announcements</li>
                                                        <li>Unlimited HD Photos</li>
                                                        <li>Virtual tour</li>
                                                        <li>Advanced Statistics</li>
                                                        <li>Premium position</li>
                                                        <li>Priority support</li>
                                                    </ul>
                                                    <input type="radio" name="publication_duration" value="pro" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="pricing-plan">
                                                    <h2>Premium</h2>
                                                    <p>Complete solution for professionals</p>
                                                    <h5 class="price">149.90 <sub>CHF</sub></h5>
                                                    <ul class="list_features_price">
                                                        <li>Unlimited Ads</li>
                                                        <li>HD Photos and Videos</li>
                                                        <li>3D Virtual Tour</li>
                                                        <li>Detailed statistics</li>
                                                        <li>Guaranteed premium position</li>
                                                        <li>Dedicated support 7 days a week</li>
                                                        <li>Exporting contacts</li>
                                                        <li>API available</li>
                                                    </ul>
                                                    <input type="radio" name="publication_duration" value="premium" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_vidget mt-3">
                                            <h4 class="tab_title mb-4">Payment Method</h4>
                                            <div>
                                                <label>
                                                    <input type="radio" name="payment_method" value="bank_card" />
                                                    Bank Card
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wizard_footer text-end mt-3">
                                        <div class="d-flex">
                                            <button type="button" id="back_button" class="btn btn-link"
                                                onclick="back()">Back</button>
                                            <button type="button" id="next_button"
                                                class="btn btn_comman ms-auto">Submit</button>
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

            // Update the equipment list
            var features = $("input[name='features[]']:checked").map(function() {
                return $(this).val();
            }).get();
            console.log("features",features);

            var featuresList = features.map(feature => `<li>${feature}</li>`).join('');
            console.log("featuresList",featuresList);

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
                            var sliderprevhtml=`<div class="item">
                                                        <div class="owl_img">
                                                            <img class="preview_image" width="200" src="${e.target.result}" alt="" />
                                                        </div>
                                                    </div>`;
                                                    $(".preview_image").append(sliderprevhtml);

                            imgWrap.append(html);
                            updateFileCount(fileCountElement);

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

                        let prevpdf=`<p class="p-2 mb-2 rounded" style="background-color: #f9f4f4">
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
