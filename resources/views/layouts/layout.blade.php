<!DOCTYPE html>
<html lang="en">
<head>
<title>KeyHome24 - Find Your Property</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
<link href="{{asset('assets/css/viewbox.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/stellarnav.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
<style>
    /* Add your custom styles here */
    .translate-modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.translate-modal-content {
    background-color: white;
    padding: 20px;
    width: 300px;
    margin: 15% auto;
    border-radius: 10px;
    text-align: center;
    position: relative;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
}
.goog-te-banner-frame {
    display: none !important;
}

</style>
</head>
<body>

@include('layouts.header')
@yield('content')

<!-- Custom Modal for Google Translate -->
{{-- <div id="translateModal" class="translate-modal">
    <div class="translate-modal-content">
        <span class="close-btn" onclick="closeTranslatePopup()">&times;</span>
        <h3>Select Language</h3>
        <div id="google_translate_element_popup"></div>
    </div>
</div> --}}


@include('layouts.footer')
<!-- jQuery Area -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/stellarnav.js')}}"></script>
<script src="{{asset('assets/js/jquery.viewbox.js')}}"></script>
<!-- <script src="js/video.popup.js"></script>  -->
<script src="{{asset('assets/js/custom.js')}}"></script>
@yield('scripts')

<script>
    $(document).ready(function () {
      // Ensure French is active by default
      $(".dropdown-menu div").removeClass("active");
      $(".dropdown-menu div[data-lang='French']").addClass("active");

      $(".lang_toggle").click(function () {
          $(".dropdown-menu").toggle();
      });

      $(".dropdown-menu div").click(function () {
          var lang = $(this).data("lang");

          $(".selected-lang").text(lang);

          // Remove active class from all items and add to the selected one
          $(".dropdown-menu div").removeClass("active");
          $(this).addClass("active");

          $(".dropdown-menu").hide();
      });

      $(document).click(function (e) {
          if (!$(e.target).closest(".dropdown").length) {
              $(".dropdown-menu").hide();
          }
      });
  });


  </script>
{{-- <div id="google_translate_element"></div>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'fr,de,it',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, // Keep it simple
            autoDisplay: false // Prevent auto display
        }, 'google_translate_element');

    }
    function openTranslatePopup() {
    document.getElementById("translateModal").style.display = "block";

    setTimeout(() => {
        var selectField = document.querySelector(".goog-te-combo");
        if (selectField) {
            document.getElementById("google_translate_element_popup").appendChild(selectField);
        }
    }, 500);
}

function closeTranslatePopup() {
    document.getElementById("translateModal").style.display = "none";
}
function changeLanguage(lang) {
    var selectField = document.querySelector(".goog-te-combo");
    if (selectField) {
        selectField.value = lang; // Set the selected language
        selectField.dispatchEvent(new Event("change")); // Trigger change event
    } else {
        console.error("Google Translate dropdown not found.");
    }
} --}}

</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
