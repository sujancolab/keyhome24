<!-- footer_sec -->
<!-- footer_sec -->
<section class="footer_sec">

    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 ft_bx1">
          <div class="footer_box">

            <div class="ft_contact">
              <div class="ft_logo mb-3">
                <img class="ft_logo_img" src="assets/images/footer_logo.png" alt="" />
              </div>
              <p>{{ __t('footerDescription') }}</p>
              <div class="footer_social">
                <div class="header_social_area">
                <ul>
                  <li>
                      <a target="_blank" href="https://www.linkedin.com/company/keyhome24-com/">
                        <img src="{{ asset('assets/images/soc_linkdin.svg') }}" alt="soc_linkdin Icon" />
                      </a>
                    </li>
                  <li>
                      <a target="_blank" href="https://www.facebook.com/people/KeyHome24-Schweiz/61565481790114/">
                        <img src="{{ asset('assets/images/soc_fb.svg') }}" alt="Facebook Icon" />
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.instagram.com/keyhome24com/">
                        <img src="{{ asset('assets/images/soc_insta.svg') }}" alt="soc_insta Icon" />
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://m.youtube.com/@KeyHome24">
                        <img src="{{ asset('assets/images/soc_yt.svg') }}" alt="soc_yt Icon" />
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.tiktok.com/@keyhome24?_t=ZN8svs8ze7MwA&_r=1">
                        <img src="{{ asset('assets/images/soc_tiktok.svg') }}" alt="soc_tiktok Icon" />
                      </a>
                    </li>

                </ul>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer_box">
            <h2 class="ft_heading">{{ __t('footerContact') }}</h2>
            <div class="ft_contact">
              <p><a href="mailto:info@keyhome24.com"><i class="fa fa-envelope-o me-1" aria-hidden="true"></i> info@keyhome24.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer_box">
            <h2 class="ft_heading">{{__('footerQuickLink')}}</h2>
            <div class="ft_links">
              <ul class="">
                <li><a href="{{route('rent-buy')}}">{{ __t('footerQuickLinkSearch_Properties') }}</a></li>
                <li><a href="{{route('share-accommodation')}}">{{ __t('footerQuickLinkAuth_Requests') }}</a></li>
                <li><a href="{{url('/')}}">{{ __t('footerQuickLinkAuth_UserSpace') }}</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer_box">
            <h2 class="ft_heading">{{__t('footerLegalLink')}}</h2>
            <div class="ft_links">
              <ul class="">
                <li><a href="{{url('/general-conditions')}}">{{ __t('footerLegalLinkTerms') }}</a></li>
                <li><a href="{{url('/privacy')}}">{{ __t('footerLegalLinkPrivacy') }}</a></li>
                <li><a href="{{url('/legal')}}">{{ __t('footerLegalLinkImprint') }}</a></li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- footer_copyright_sec -->
  <section class="footer_copyright_sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer_copy text-center">
            <p>© 2025 KeyHome24. {{__t('footerAllRights')}}.</p>
          </div>
        </div>

      </div>
    </div>
  </section>




  <a href="javascript:void(0)" id="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
