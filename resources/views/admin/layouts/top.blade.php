{{-- @vite(['resources/js/app.js', 'resources/sass/app.scss']) --}}

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{ asset('admin/vendor/fonts/boxicons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('admin/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

<link rel="stylesheet" href="{{ asset('admin/vendor/libs/apex-charts/apex-charts.css') }}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('admin/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('admin/js/config.js') }}"></script>
