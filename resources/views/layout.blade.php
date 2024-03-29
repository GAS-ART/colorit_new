<!DOCTYPE html>
<html lang="@lang('lang.prefix')">
@include('inc.head')

<body id="body">
   <div class="wrapper">
      @include('inc.header')
      <main class="page">
         @yield('content')
      </main>
      @include('inc.footer')
   </div>
   @include('inc.scroll_top')
   @include('inc.popup')
   @include('inc.messengers')
   @vite(['resources/js/app.js'])
</body>

</html>