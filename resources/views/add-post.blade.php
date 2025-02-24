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
                <img src="images/properties1.jpg" class="" alt="Profile" />
              </div>
              <div>
                <h5 class="mb-1">Jean Dupont</h5>
                <p class="mb-0 text-muted">Administrator</p>
              </div>
            </div>
            <hr />
            <div class="profile_info">
              <p><strong>Account Information</strong></p>
              <p>Email: admin@domain.com</p>
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
                <form class="comman_form" method="POST" action="{{ route('savePost') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="tab d-none">
                    <h4 class="tab_title mb-4">Agency information</h4>
                    <div class="row">
                      <div class="col-lg-6 col-md-6 mb-3 form-group">
                        <label class="form-label">Agency Name <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" name="agency_name" placeholder="Real Estate SA" required />
                      </div>
                      <div class="col-lg-6 col-md-6 mb-3 form-group">
                        <label class="form-label">Professional email <span class="mandatory">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="contact@agence.ch" required />
                      </div>
                      <div class="col-lg-6 col-md-6 mb-3 form-group">
                        <label class="form-label">Phone <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" name="phone" placeholder="+41 XX XXX XX XX" required />
                      </div>
                      <div class="col-lg-6 col-md-6 mb-3 form-group">
                        <label class="form-label">Address <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" name="address" placeholder="Station Street 1" required />
                      </div>
                      <div class="col-lg-6 col-md-6 mb-3 form-group">
                        <label class="form-label">Location <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" name="location" placeholder="1000 Lausanne" required />
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
                          <label class="form-label">Category <span class="mandatory">*</span></label>
                          <select class="form-control custom-select" name="category">
                            <option value="">Select a category</option>
                            <option value="residential">Residential</option>
                            <option value="commercial">Commercial</option>
                            <option value="test">Test item</option>
                          </select>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">Property type <span class="mandatory">*</span></label>
                          <select class="form-control custom-select" name="property_type">
                            <option value="">Select a type</option>
                            <option value="office">Desk</option>
                            <option value="shop">Trade</option>
                            <option value="restaurant">Restaurant</option>
                            <option value="warehouse">Warehouse</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form_vidget">
                      <h4 class="tab_title mb-4">Price</h4>
                      <div class="row">
                        <div class="col-lg-12 mb-3 form-group">
                          <label class="form-label">Price (CHF) <span class="mandatory">*</span></label>
                          <input type="number" class="form-control" name="price" placeholder="0" required />
                        </div>
                      </div>
                    </div>
                    <div class="form_vidget">
                      <h4 class="tab_title mb-4">Location</h4>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">Address <span class="mandatory">*</span></label>
                          <input type="text" class="form-control" name="address_property" placeholder="Street and number" required />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">Postal code <span class="mandatory">*</span></label>
                          <input type="text" class="form-control" name="postal_code" placeholder="1000" required />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">City <span class="mandatory">*</span></label>
                          <input type="text" class="form-control" name="city" placeholder="City" required />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">Canton <span class="mandatory">*</span></label>
                          <select class="form-control custom-select" name="canton">
                            <option value="">Select a type</option>
                            <option value="office">Desk</option>
                            <option value="shop">Trade</option>
                            <option value="restaurant">Restaurant</option>
                            <option value="warehouse">Warehouse</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form_vidget">
                      <h4 class="tab_title mb-4">Features</h4>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">Surface area (m²) <span class="mandatory">*</span></label>
                          <input type="number" class="form-control" name="surface_area" placeholder="0" required />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">Number of rooms <span class="mandatory">*</span></label>
                          <input type="number" class="form-control" name="rooms" placeholder="0" required />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">Bathrooms <span class="mandatory">*</span></label>
                          <input type="number" class="form-control" name="bathrooms" placeholder="0" required />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label">Floor <span class="mandatory">*</span></label>
                          <input type="number" class="form-control" name="floor" placeholder="0" required />
                        </div>
                        <div class="col-lg-12 mb-3 form-group">
                          <label class="form-label">Special Features <span class="mandatory">*</span></label>
                          <div class="row checkbox_list">
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="equipped_kitchen" />Equipped kitchen</label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="open_kitchen" />Open kitchen</label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="dishwasher" />Dishwasher</label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="parquet" />Parquet</label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="tiling" />Tiling</label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="double_glazing" />Double glazing</label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="triple_glazing" />Triple glazing</label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="wall_cabinets" />Wall cabinets</label>
                              </div>
                            </div>
                            <div class="col-md-4 mb-2">
                              <div class="checkbox">
                                <label><input type="checkbox" name="features[]" value="dressing" />Dressing</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form_vidget">
                      <h4 class="tab_title mb-4">Description</h4>
                      <div class="row">
                        <div class="col-lg-12 mb-3 form-group">
                          <label class="form-label">Detailed description <span class="mandatory">*</span></label>
                          <textarea class="form-control" name="description" style="height: 100px" placeholder="Describe your property in detail..."></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab d-none">
                    <h4 class="tab_title mb-4">Photos and documents</h4>
                    <div class="row">
                      <div class="col-lg-12 mb-3 form-group">
                        <label class="form-label">Photos (max. 5) <span class="mandatory">*</span></label>
                        <div>
                          <div class="upload__box">
                            <div class="upload__btn-box">
                              <label class="upload__btn">
                                <img src="images/upload_icon_gray.svg" alt="" class="mb-2" />
                                <h4 class="mb-2">Upload images</h4>
                                <h5 class="mb-1">PNG, JPG up to 10MB</h5>
                                <p class="file_count mb-0">0 /5 images</p>
                                <input type="file" name="photos[]" multiple data-max_length="5" class="upload__inputfile" />
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
                                <img src="images/document_gray.svg" alt="" class="mb-2" />
                                <h4 class="mb-2">Upload PDFs</h4>
                                <h5 class="mb-1">PDF files up to 10MB</h5>
                                <p class="file_count mb-0">0 / 3 PDFs</p>
                                <input type="file" name="documents[]" multiple data-max_length="3" class="upload__inputfilePDF" accept=".pdf" />
                              </label>
                            </div>
                            <div class="upload__file-wrap"></div>
                          </div>
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
                      <button type="button" id="back_button" class="btn btn-link" onclick="back()">Back</button>
                      <button type="button" id="next_button" class="btn btn_comman ms-auto">Submit</button>
                      <button type="submit">Save Data</button>
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

      // Update button text for last step
      console.log(n,tabs.length);

      if (n == tabs.length - 1) {
        $("#next_button").attr("type", "submit").text("Submit").removeAttr("onclick");
      } else {
        $("#next_button")
          .attr("type", "button")
          .text("Continue")
          .attr("onclick", "next()");
      }

      // Mark previous steps as completed
      for (var i = 0; i < n; i++) {
        $(tabs_pill[i]).addClass("completed");
      }

      // Update progress bar width based on step count
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
    function submitForm(){
        console.log("form submitted")
    }
  </script>
  <!-- upload img and preview -->

  <script>
    jQuery(document).ready(function () {
      ImgUpload();
    });

    function ImgUpload() {
      var imgWrap = "";
      var imgArray = [];
      var maxFiles = 5; // Limit to 5 files

      $(".upload__inputfile").each(function () {
        $(this).on("change", function (e) {
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

          filesArr.forEach(function (f) {
            if (!f.type.match("image.*")) {
              return;
            }
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html =
                "<div class='upload__img-box'><div style='background-image: url(" +
                e.target.result +
                ")' data-file='" +
                f.name +
                "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              updateFileCount(fileCountElement);
            };
            reader.readAsDataURL(f);
          });
        });
      });

      $("body").on("click", ".upload__img-close", function () {
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
    jQuery(document).ready(function () {
      PdfUpload();
    });

    function PdfUpload() {
      var fileWrap = "";
      var fileArray = [];
      var maxFiles = 3;

      $(".upload__inputfilePDF").each(function () {
        $(this).on("change", function (e) {
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

          filesArr.forEach(function (f) {
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
            updateFileCount(fileCountElement);
          });
        });
      });

      $("body").on("click", ".upload__file-close", function () {
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
