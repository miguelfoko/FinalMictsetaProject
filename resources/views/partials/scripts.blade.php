<!-- Vendor JS Files -->
<script src="{{ asset('/vendor/purecounter/purecounter_vanilla.js') }}" ></script>
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}" ></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}" ></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js') }}"></script>

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>

   tinymce.init({

     selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE

     plugins: 'powerpaste advcode table lists checklist',

     toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'

   });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
