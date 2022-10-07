@include('admin.inc.head')
    <!--
      ====================================
      ——— LEFT SIDEBAR WITH FOOTER
      =====================================
    -->
    @include('admin.inc.sidebar')

    <div class="page-wrapper">
      <!-- Header -->
      @include('admin.inc.header')
      <div class="content-wrapper">
        <div class="content">
          @yield('content')
        </div>
      </div>
@include('admin.inc.footer')
