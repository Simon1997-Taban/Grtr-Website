  <!-- Vendor JS Files -->
  <script src="{{ asset('theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('theme/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('theme/assets/js/main.js') }}"></script>
  <script>
              function doDate(){

            var str = "";

            var days = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            var months = new Array("Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "September", "Oct", "Nov", "Dec");

            var now = new Date();

            str += months[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear() + " | " + now.toLocaleTimeString();
            document.getElementById("todaysDate").innerHTML = str;
        }

        var timeNow = setInterval(doDate, 1000);
  </script>