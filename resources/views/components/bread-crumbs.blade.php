<section class="bread-crumbs">
  <div class="bread-crumbs__body">
    @foreach($crumbs['links'] as $item)
    <a href="{{ $item['route'] }}">{{ $item['label'] }}</a> -
    @endforeach
    <span>{{$crumbs['currentPage']}}</span>
  </div>
</section>