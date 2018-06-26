@extends('master', ['title' => "Category"])

@section('content')
<div class="container">
  <div class="row">
    <div class="col m9 s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            <span class="card-title">Category</span>
          </div>
          <div class="row">
            <ul class="collapsible">
              <li>
                <div class="collapsible-header">POPS & ANIME</div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['pops'] as $dat)
                    <div class="col m3 s6">
                      <div class="card">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b>{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header">niconico & VOCALOID™</div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['nico'] as $dat)
                    <div class="col m3 s6">
                      <div class="card">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b>{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header">TOHO Project</div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['toho'] as $dat)
                    <div class="col m3 s6">
                      <div class="card">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b>{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header">SEGA</div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['sega'] as $dat)
                    <div class="col m3 s6">
                      <div class="card">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b>{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header">GAME & VARIETY</div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['game'] as $dat)
                    <div class="col m3 s6">
                      <div class="card">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b>{{ $dat['name_en'] }}</b>
                            <p>CONTENT</p>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header">ORIGINAL & JOYPOLIS</div>
                <div class="collapsible-body">
                  <div class="row">
                    @foreach ($data['orig'] as $dat)
                    <div class="col m3 s6">
                      <div class="card">
                        <div class="card-image">
                            <img class="lazy" alt="{{ $dat['name_en'] }}" data-src="{{ $dat['image_url'] }}">
                          </div>
                          <div class="card-content">
                            <b>{{ $dat['name_en'] }}</b>
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