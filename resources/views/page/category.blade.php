@extends('master')

@section('title', 'Category')

@section('content')
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <span class="card-title">Category</span>
          </div>
          <div class="row">
            <ul class="collapsible">
              <li>
                <div class="collapsible-header"><b>POPS & ANIME</b></div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['pops'] as $dat)
                    <div class="col xl2 l3 m4 s6">
                      <div class="card smal hoverable">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b class="truncate">{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><b>niconico & VOCALOID™</b></div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['nico'] as $dat)
                    <div class="col xl2 l3 m4 s6">
                      <div class="card small hoverable">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b class="truncate">{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><b>TOHO Project</b></div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['toho'] as $dat)
                    <div class="col xl2 l3 m4 s6">
                      <div class="card small hoverable">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b class="truncate">{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><b>SEGA</b></div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['sega'] as $dat)
                    <div class="col xl2 l3 m4 s6">
                      <div class="card small hoverable">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b class="truncate">{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><b>GAME & VARIETY</b></div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['game'] as $dat)
                    <div class="col xl2 l3 m4 s6">
                      <div class="card small hoverable">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b class="truncate">{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><b>ORIGINAL & JOYPOLIS</b></div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['orig'] as $dat)
                    <div class="col xl2 l3 m4 s6">
                      <div class="card small hoverable">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b class="truncate">{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
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