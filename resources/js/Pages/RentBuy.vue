<script setup>
import IndexLayout from '@/Layouts/IndexLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
   posts: Array
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />

<IndexLayout>
<!-- hero_form_sec -->
<section class="hero_form_sec text-center py-5-">
  <div class="container">
    <h1 class="main_form_title text-white">Rent a Property</h1>
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
    </div>
  </div>
</section>
<!--  -->
<section class="properties_sec comman_tb_padding">
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
        <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex" v-for="post in posts" :key="post.id">
            <a href="">
              <div class="blog_box_h_inner">
                <div class="blog_img_box upcomimg_events_box_inner">
                  <div class="upcomimg_events_img_box"> <img :src="'/storage/' + post.photos[0]" width="100" alt=""> </div>
                  <div class="pro_price_over">
                    <h4>{{ post.price }}</h4>
                    <p>Gross price</p>
                  </div>
                </div>
                <div class="blog_txt_area">
                  <h5><span><img src="assets/images/location_icon.svg" alt="" /></span>{{ post.location }}</h5>
                  <h3 class="blog_h_head">{{ post.title }}</h3>
                  <ul class="list_amenties">
                    <li><img src="assets/images/amenties_bed.svg" alt="" /> 4.5</li>
                    <li><img src="assets/images/amenties_bath.svg" alt="" /> {{ post.bathrooms }}</li>
                    <li><img src="assets/images/amenties_measure2.svg" alt="" /> {{ post.size }} m²</li>
                  </ul>
                </div>
              </div>
            </a>
        </div>
        <!-- <div class="col-lg-4 col-md-6 col-sm-12 blog_box_main d-flex">
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
        </div> -->
      </div>

    </div>
  </div>
</section>
<!-- banner  -->
</IndexLayout>

</template>
