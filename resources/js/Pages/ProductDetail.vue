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
            <!-- Action Buttons -->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="post_ad_box post_ad_only text-white">
                  <div class="d-flex align-items-center">
                    <div class="card-body">
                      <h5><strong>Post an ad</strong></h5>
                      <p>Create an attractive ad for your property</p>
                      <a class="btn btn_light" href=""
                        ><img
                          class="me-1"
                          src="images/upload_icon_red.svg"
                          alt=""
                        />
                        Add an ad</a
                      >
                    </div>
                    <div class="ps-2">
                      <img src="images/upload_icon.svg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="post_ad_box post_request_only text-white">
                  <div class="d-flex align-items-center">
                    <div class="card-body">
                      <h5><strong>Post request</strong></h5>
                      <p>Create a request to find your ideal property</p>
                      <a class="btn btn_light" href=""
                        ><img
                          class="me-1"
                          src="images/search_icon_blue.svg"
                          alt=""
                        />
                        Post a request</a
                      >
                    </div>
                    <div class="ps-2">
                      <img src="images/search_icon_white.svg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- My Ads Section -->
            <div class="card white_widget_card mb-4">
              <h5 class="mb-3 title_5">My ads</h5>

              <!-- Ad Item -->
              <div
                class="ads_vidget_box d-flex justify-content-between align-items-center pb-2 mb-2"
              >
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
                  <span class="icon-trash"
                    ><i class="fa fa-trash-o" aria-hidden="true"></i
                  ></span>
                </div>
              </div>
              <div
                class="ads_vidget_box d-flex justify-content-between align-items-center pb-2 mb-2"
              >
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
                  <span class="icon-trash"
                    ><i class="fa fa-trash-o" aria-hidden="true"></i
                  ></span>
                </div>
              </div>
              <div
                class="ads_vidget_box expired_property d-flex justify-content-between align-items-center pb-2 mb-2"
                data-bs-toggle="modal"
                data-bs-target=".subscription_exp_modal"
              >
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
                  <span class="icon-trash"
                    ><i class="fa fa-trash-o" aria-hidden="true"></i
                  ></span>
                </div>
              </div>
            </div>

            <!-- My Requests Section -->
            <div class="card white_widget_card">
              <h5 class="mb-3 title_5">My requests</h5>

              <!-- Request Item -->
              <div
                class="ads_vidget_box d-flex justify-content-between align-items-center pb-2 mb-2"
              >
                <div class="d-flex">
                  <div>
                    <h5>New 4.5 room apartment</h5>
                    <p class="text-muted mb-2">Lausanne, Vaud</p>
                    <div class="d-flex align-items-center">
                      <p class="m-0 me-3">2500 CHF/month</p>
                      <span class="pro_status_btn">Active</span>
                    </div>
                  </div>
                </div>
                <div class="ads_vidget_trash">
                  <span class="icon-trash"
                    ><i class="fa fa-trash-o" aria-hidden="true"></i
                  ></span>
                </div>
              </div>
              <div
                class="ads_vidget_box expired_property d-flex justify-content-between align-items-center pb-2 mb-2"
                data-bs-toggle="modal"
                data-bs-target=".subscription_exp_modal"
              >
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
                  <span class="icon-trash"
                    ><i class="fa fa-trash-o" aria-hidden="true"></i
                  ></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- banner  -->
</IndexLayout>

</template>
