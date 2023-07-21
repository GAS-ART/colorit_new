<section class="bread-crumbs">
  <div class="bread-crumbs__body">
    @foreach($breadCrumbs['links'] as $breadCrumb)
    <a href="{{ $breadCrumb['route'] }}">{{ __($breadCrumb['label']) }}</a> -
    @endforeach
    <span>{{__($breadCrumbs['currentPage'])}}</span>
  </div>
</section>