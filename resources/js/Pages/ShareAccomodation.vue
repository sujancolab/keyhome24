<script setup>
import IndexLayout from '@/Layouts/IndexLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
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
<section class="hero_form_sec for_blue_bg_only text-center py-5-">
  <div class="container">
    <h1 class="main_form_title text-white">Research Requests</h1>
    <div class="hero_form_area">
      <div class="home_page_tab_area_only home_page_form_nav">
          <ul class="" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="pill" href="#tab_buy">Colocation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#tab_rent">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#tab_reprise">Reprise</a>
            </li>
          </ul>
      </div>
      <div>
        <div class="tab-content">
          <div id="tab_buy" class="container tab-pane active"><br>
            <form class="comman_form">
              <div class="row">
                <div class="col-lg-4 col-md-4 mb-2 form-group">
                  <div class="inp_relative">
                    <input type="text" class="form-control" placeholder="City or postal code" />
                    <div class="inp_icon">
                      <img src="assets/images/location_icon.svg">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-2 form-group">
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
                <div class="col-lg-4 col-md-4 mb-2 form-group">
                  <div class="inp_relative">
                    <input type="date" class="form-control" />
                    <div class="inp_icon">
                      <img src="assets/images/date_icon.svg">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div id="tab_rent" class="container tab-pane fade"><br>
            <form class="comman_form">
              <div class="row">
                <div class="col-lg-4 col-md-4 mb-2 form-group">
                  <div class="inp_relative">
                    <input type="text" class="form-control" placeholder="City or postal code" />
                    <div class="inp_icon">
                      <img src="assets/images/location_icon.svg">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-2 form-group">
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
                <div class="col-lg-4 col-md-4 mb-2 form-group">
                  <div class="inp_relative">
                    <input type="date" class="form-control" />
                    <div class="inp_icon">
                      <img src="assets/images/date_icon.svg">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div id="tab_reprise" class="container tab-pane fade"><br>
            <form class="comman_form">
              <div class="row">
                <div class="col-lg-4 col-md-4 mb-2 form-group">
                  <div class="inp_relative">
                    <input type="text" class="form-control" placeholder="City or postal code" />
                    <div class="inp_icon">
                      <img src="assets/images/location_icon.svg">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-2 form-group">
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
                <div class="col-lg-4 col-md-4 mb-2 form-group">
                  <div class="inp_relative">
                    <input type="date" class="form-control" />
                    <div class="inp_icon">
                      <img src="assets/images/date_icon.svg">
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
      <h2 class="mb-0">5 Research requests</h2>
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
      <div class="full_property_listing_repeat">
        <h3>Request for shared accommodation - University district <span class="pro_status_btn">Active</span></h3>
        <ul class="list_full_property list-inline">
          <li>Crake</li>
          <li>Geneva</li>
          <li>900 CHF/month</li>
          <li>Shared accommodation</li>
          <li>From 01.08.2024</li>
        </ul>
        <p class="ft_weight">Medical student looking for a room in a nice shared apartment close to the university. Friendly atmosphere desired.</p>
        <div class="list_call_action">
          <a class="btn_list_action btn_to_call" href="tel:+91098765432">To Call</a>
          <a class="btn_list_action btn_to_mail" href="tel:+91098765432">E-mail</a>
          <a class="btn_list_action btn_to_share" href="tel:+91098765432">Share</a>
        </div>
      </div>
      <div class="full_property_listing_repeat">
        <h3>Request for shared accommodation - University district <span class="pro_status_btn">Active</span></h3>
        <ul class="list_full_property list-inline">
          <li>Crake</li>
          <li>Geneva</li>
          <li>900 CHF/month</li>
          <li>Shared accommodation</li>
          <li>From 01.08.2024</li>
        </ul>
        <p class="ft_weight">Medical student looking for a room in a nice shared apartment close to the university. Friendly atmosphere desired.</p>
        <div class="list_call_action">
          <a class="btn_list_action btn_to_call" href="tel:+91098765432">To Call</a>
          <a class="btn_list_action btn_to_mail" href="tel:+91098765432">E-mail</a>
          <a class="btn_list_action btn_to_share" href="tel:+91098765432">Share</a>
        </div>
      </div>
      <div class="full_property_listing_repeat">
        <h3>Request for shared accommodation - University district <span class="pro_status_btn">Active</span></h3>
        <ul class="list_full_property list-inline">
          <li>Crake</li>
          <li>Geneva</li>
          <li>900 CHF/month</li>
          <li>Shared accommodation</li>
          <li>From 01.08.2024</li>
        </ul>
        <p class="ft_weight">Medical student looking for a room in a nice shared apartment close to the university. Friendly atmosphere desired.</p>
        <div class="list_call_action">
          <a class="btn_list_action btn_to_call" href="tel:+91098765432">To Call</a>
          <a class="btn_list_action btn_to_mail" href="tel:+91098765432">E-mail</a>
          <a class="btn_list_action btn_to_share" href="tel:+91098765432">Share</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner  -->
</IndexLayout>

</template>
