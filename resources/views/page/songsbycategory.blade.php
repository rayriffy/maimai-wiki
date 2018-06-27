@extends('master')

@section('title', 'Category')

@section('content')
<div class="container">
  <div class="row">
    <div class="col m9 s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <span class="card-title">
              @if ($cat == 'pops')
                POPS & ANIME
              @elseif ($cat == 'nico')
                niconico & VOCALOID™
              @elseif ($cat == 'toho')
                TOHO Project
              @elseif ($cat == 'sega')
                SEGA
              @elseif ($cat == 'game')
                GAMES & VARIETY
              @elseif ($cat == 'orig')
                ORIGINAL & JOYPOLIS
              @endif
            </span>
          </div>
          <div class="row">

          </div>
        </div>
      </div>
    </div>
    <div class="col m3 s12">

    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.8.0/lazyload.min.js"></script>
<script>
  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
  });
</script>
@endsection