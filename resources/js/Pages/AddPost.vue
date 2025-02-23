<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import IndexLayout from '@/Layouts/IndexLayout.vue';
import { Head, Link,useForm } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
// Add these reactive references
const currentStep = ref(0);
const tabs = ref([]);
const tabsPill = ref([]);

// Form data using Inertia's useForm
const form = useForm({
    // Step 1: Agency Information
    agency_name: '',
    email: '',
    phone: '',
    address: '',
    location: '',

    // Step 2: Ad Details
    ad_type: '',
    category: '',
    property_type: '',
    price: '',
    address_property: '',
    postal_code: '',
    city: '',
    canton: '',
    surface_area: null,
    rooms: null,
    bathrooms: null,
    floor: null,
    features: [],
    description: '',

    // Step 3: Photos and Documents
    photos: [],
    documents: [],

    // Step 4: Preview (no additional data needed)

    // Step 5: Publication
    publication_duration: '',
    payment_method: '',
});
// Initialize form after component mounts
onMounted(() => {
    tabs.value = document.querySelectorAll('.tab');
    tabsPill.value = document.querySelectorAll('.tab-pills');
    loadFormData(currentStep.value);
});

function loadFormData(n) {
    tabsPill.value.forEach(pill => pill.classList.remove('active'));
    tabsPill.value[n].classList.add('active');

    tabs.value.forEach(tab => tab.classList.add('d-none'));
    tabs.value[n].classList.remove('d-none');

    // Update progress bar logic here if needed
}

function nextStep() {
    if (currentStep.value < tabs.value.length - 1) {
        currentStep.value++;
        loadFormData(currentStep.value);
    }
}

function prevStep() {
    if (currentStep.value > 0) {
        currentStep.value--;
        loadFormData(currentStep.value);
    }
}


// Keep the image upload scripts but wrap in onMounted
onMounted(() => {
    // Image upload script
    ImgUpload();
    PdfUpload();
});

// Convert your existing scripts to functions
function ImgUpload() {
    // ... keep your existing ImgUpload code ...
}

function PdfUpload() {
    // ... keep your existing PdfUpload code ...
}

// Add methods to handle file uploads
function handleImageUpload(event) {
    const files = event.target.files;
    form.photos = Array.from(files);
}

function handlePdfUpload(event) {
    const files = event.target.files;
    form.documents = Array.from(files);
}

// Add a function to handle form submission
function submitForm() {
    console.log(form);
    form.post('/save-post', {
        onSuccess: () => {
            // Handle success, e.g., redirect or show a success message
        },
        onError: (errors) => {
            // Handle errors, e.g., display error messages
        }
    });
}
</script>

<template>

    <Head title="Dashboard" />

    <IndexLayout>
        <section class="property_view_sec comman_tb_padding">
      <div class="container">
        <div class="row">
          <!-- Left Profile Section -->
          <div class="col-md-3">
            <div class="card white_widget_card">
              <div class="d-flex profile_img_bx">
                <div class="text-center profile_img me-2">
                  <img src="assets/imagesproperties1.jpg" class="" alt="Profile" />
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
                  <form class="comman_form" @submit.prevent="submitForm">
                    <div class="tab d-none">
                      <h4 class="tab_title mb-4">Agency information</h4>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label"
                            >Agency Name <span class="mandatory">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Real Estate SA"
                            v-model="form.agency_name"
                            required
                          />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label"
                            >Professional email
                            <span class="mandatory">*</span></label
                          >
                          <input
                            type="email"
                            class="form-control"
                            placeholder="contact@agence.ch"
                            v-model="form.email"
                            required
                          />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label"
                            >Phone <span class="mandatory">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control"
                            placeholder="+41 XX XXX XX XX"
                            v-model="form.phone"
                            required
                          />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label"
                            >Address <span class="mandatory">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Station Street 1"
                            v-model="form.address"
                            required
                          />
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3 form-group">
                          <label class="form-label"
                            >Location <span class="mandatory">*</span></label
                          >
                          <input
                            type="text"
                            class="form-control"
                            placeholder="1000 Lausanne"
                            v-model="form.location"
                            required
                          />
                        </div>
                      </div>
                    </div>

                    <div class="tab d-none">
                      <div class="form_vidget">
                        <h4 class="tab_title mb-4">Ad Type</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <label class="radio_card_style">
                              <input
                                type="radio"
                                name="ad_type"
                                value="sell"
                                v-model="form.ad_type"
                              />
                              <div class="card p-3 text-center">
                                <h5 class="card-title">Sell</h5>
                              </div>
                            </label>
                          </div>
                          <div class="col-md-6">
                            <label class="radio_card_style">
                              <input
                                type="radio"
                                name="ad_type"
                                value="rent"
                                v-model="form.ad_type"
                              />
                              <div class="card p-3 text-center">
                                <h5 class="card-title">To rent out</h5>
                              </div>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form_vidget">
                        <h4 class="tab_title mb-4">
                          Category and type of property
                        </h4>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >Category <span class="mandatory">*</span></label
                            >
                            <select class="form-control custom-select" v-model="form.category">
                              <option value="">Select a category</option>
                              <option value="residential">Residential</option>
                              <option value="commercial">Commercial</option>
                              <option value="test">Test item</option>
                            </select>
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >Property type
                              <span class="mandatory">*</span></label
                            >
                            <select class="form-control custom-select" v-model="form.property_type">
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
                            <label class="form-label"
                              >Price (CHF)
                              <span class="mandatory">*</span></label
                            >
                            <input
                              type="number"
                              class="form-control"
                              placeholder="0"
                              v-model="form.price"
                              required
                            />
                          </div>
                        </div>
                      </div>
                      <div class="form_vidget">
                        <h4 class="tab_title mb-4">Location</h4>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >Address <span class="mandatory">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Street and number"
                              v-model="form.address_property"
                              required
                            />
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >Postal code
                              <span class="mandatory">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              placeholder="1000"
                              v-model="form.postal_code"
                              required
                            />
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >City <span class="mandatory">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              placeholder="City"
                              v-model="form.city"
                              required
                            />
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >Canton <span class="mandatory">*</span></label
                            >
                            <select class="form-control custom-select" v-model="form.canton">
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
                            <label class="form-label"
                              >Surface area (m²)
                              <span class="mandatory">*</span></label
                            >
                            <input
                              type="number"
                              class="form-control"
                              placeholder="0"
                              v-model="form.surface_area"
                              required
                            />
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >Number of rooms
                              <span class="mandatory">*</span></label
                            >
                            <input
                              type="number"
                              class="form-control"
                              placeholder="0"
                              v-model="form.rooms"
                              required
                            />
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >Bathrooms <span class="mandatory">*</span></label
                            >
                            <input
                              type="number"
                              class="form-control"
                              placeholder="0"
                              v-model="form.bathrooms"
                              required
                            />
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3 form-group">
                            <label class="form-label"
                              >Floor <span class="mandatory">*</span></label
                            >
                            <input
                              type="number"
                              class="form-control"
                              placeholder="0"
                              v-model="form.floor"
                              required
                            />
                          </div>
                          <div class="col-lg-12 mb-3 form-group">
                            <label class="form-label"
                              >Special Features
                              <span class="mandatory">*</span></label
                            >
                            <div class="row checkbox_list">
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="equipped_kitchen"
                                      v-model="form.features"
                                    />Equipped
                                    kitchen</label
                                  >
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="open_kitchen"
                                      v-model="form.features"
                                    />Open
                                    kitchen</label
                                  >
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="dishwasher"
                                      v-model="form.features"
                                    />Dishwasher</label
                                  >
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="parquet"
                                      v-model="form.features"
                                    />Parquet</label
                                  >
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="tiling"
                                      v-model="form.features"
                                    />Tiling</label
                                  >
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="double_glazing"
                                      v-model="form.features"
                                    />Double
                                    glazing</label
                                  >
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="triple_glazing"
                                      v-model="form.features"
                                    />Triple
                                    glazing</label
                                  >
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="wall_cabinets"
                                      v-model="form.features"
                                    />Wall
                                    cabinets</label
                                  >
                                </div>
                              </div>
                              <div class="col-md-4 mb-2">
                                <div class="checkbox">
                                  <label
                                    ><input
                                      type="checkbox"
                                      value="dressing"
                                      v-model="form.features"
                                    />Dressing</label
                                  >
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
                            <label class="form-label"
                              >Detailed description
                              <span class="mandatory">*</span></label
                            >
                            <textarea
                              class="form-control"
                              name=""
                              id=""
                              style="height: 100px"
                              placeholder="Describe your property in detail..."
                              v-model="form.description"
                            ></textarea>
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
                                  <img src="assets/imagesupload_icon_gray.svg" alt="" class="mb-2" />
                                  <h4 class="mb-2">Upload images</h4>
                                  <h5 class="mb-1">PNG, JPG up to 10MB</h5>
                                  <p class="file_count mb-0">0 /5 images</p>
                                  <input type="file" multiple data-max_length="5" class="upload__inputfile" @change="handleImageUpload" />
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
                                  <img src="assets/imagesdocument_gray.svg" alt="" class="mb-2" />
                                  <h4 class="mb-2">Upload PDFs</h4>
                                  <h5 class="mb-1">PDF files up to 10MB</h5>
                                  <p class="file_count mb-0">0 / 3 PDFs</p>
                                  <input type="file" multiple data-max_length="3" class="upload__inputfilePDF" accept=".pdf" @change="handlePdfUpload" />
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
                          <div
                            class="owl-carousel owl-theme"
                            id="features_img_slider"
                          >
                            <div class="item">
                              <div class="owl_img">
                                <img src="assets/imagesproperties1.jpg" alt="" />
                              </div>
                            </div>
                            <div class="item">
                              <div class="owl_img">
                                <img src="assets/imagesproperties2.jpg" alt="" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="slider_name d-flex">
                          <div class="slider_name_left">
                            <h3>Restaurant 0 rooms, 4000 m²</h3>
                            <p>
                              <img src="assets/imageslocation_icon.svg" alt="" />
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
                              <img src="assets/imagesfeature_surface.svg" alt="" />
                              <h4>4000 m²</h4>
                              <p class="mb-0">Surface</p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="feature_summry_bx">
                              <img src="assets/imagesfeature_building.svg" alt="" />
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
                            <p>
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
                          <div class="col-md-12">
                            <p
                              class="p-2 mb-2 rounded"
                              style="background-color: #f9f4f4"
                            >
                              test-pdf-name.pdf
                            </p>
                            <p
                              class="p-2 mb-2 rounded"
                              style="background-color: #f9f4f4"
                            >
                              test-pdf-name.pdf
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="form_vidget">
                        <p class="mb-0">
                          <img src="assets/imagesdate_icon.svg" class="me-1" alt="" />
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
                      <h4 class="tab_title mb-4">
                        Choose your publication duration
                      </h4>
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
                            <input type="radio" name="publication_duration" value="basic" v-model="form.publication_duration" />
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
                            <input type="radio" name="publication_duration" value="pro" v-model="form.publication_duration" />
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
                            <input type="radio" name="publication_duration" value="premium" v-model="form.publication_duration" />
                          </div>
                        </div>
                      </div>
                      <div class="form_vidget mt-3">
                        <h4 class="tab_title mb-4">Payment Method</h4>
                        <div>
                          <label>
                            <input type="radio" name="payment_method" value="bank_card" v-model="form.payment_method" />
                            Bank Card
                          </label>
                        </div>
                      </div>
                      <div class="mt-3">

                      </div>
                    </div>
                  </form>
                </div>
                <div class="wizard_footer text-end mt-3">
                  <div class="d-flex">
                    <button
                      type="button"
                      id="back_button"
                      class="btn btn-link"
                      @click="prevStep"
                      :disabled="currentStep === 0"
                    >
                      Back
                    </button>
                    <button
                      type="button"
                      id="next_button"
                      class="btn btn_comman ms-auto"
                      @click="currentStep === tabs.length - 1 ? submitForm() : nextStep()"
                    >
                      {{ currentStep === tabs.length - 1 ? 'Submit' : 'Next' }}
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </IndexLayout>
</template>
