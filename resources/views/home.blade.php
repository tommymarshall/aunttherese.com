@extends('layouts.base')

@section('content')
  @include('partials.header')

  <section class="section -hero" id="hero">
    <div class="wrap">
      <div class="centered">
        <h1>
          Therese Williams’s <em>Graduation</em>
        </h1>
        <p class="date">May 6th, 2017</p>
      </div>
    </div>
  </section>

  <section class="section -graduation" id="graduation">
    <div class="wrap">
      <div class="flex-row">
        <div class="col -graduation">
          <div>
            <h3>Graduation</h3>
            <p class="sub-heading">
              <strong>10:00AM</strong>
            </p>
            <p>
              <strong>Ave Maria University</strong><br>
              5050 Ave Maria Blvd, Ave Maria, FL 34142
            </p>
            <a href="https://www.google.com/maps/place/5050 Ave Maria Blvd, Ave Maria, FL 34142" target="_blank" class="button">View Map</a>
          </div>
        </div>
        <div class="col -reception">
          <div>
            <h3>Reception</h3>
            <p class="sub-heading">
              <strong>4:00PM – 8:00PM</strong><br>
            </p>
            <p>
              <strong>Island Walk Town Center</strong><br>
              6155 Towncenter Cir # 101, Naples, FL 34119<br>
              Dinner is included.
            </p>
            <a href="https://www.google.com/maps/place/6155 Towncenter Cir # 101, Naples, FL 34119" target="_blank" target="_blank" class="button">View Map</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section -travel" id="accomodations">
    <div class="wrap">
      <div class="travel">
        <h3>Accomodations</h3>
        <div class="wrap -thin">
          <p>
            <strong>Ritz Tiberon</strong><br>
            2600 Tiburon Dr, Naples, FL 34109<br>
            (239) 593-2000
          </p>
          <p>
            <strong>Hampton Inn</strong><br>
            3210 Tamiami Trail N, Naples, FL 34103<br>
            (239) 261-8000
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section -registries" id="registries">
    <div class="wrap">
      <h3>Registries</h3>
      <div class="registries-list">
        <a href="https://www.amazon.com/s/ref=nb_sb_ss_c_2_4?url=search-alias%3Dgift-cards&field-keywords=gift+card&sprefix=Gift%2Caps%2C173&crid=2CBOKPGM5JNB3" target="_blank">Amazon</a>
        <a href="http://www.landsend.com/gift-cards/?cm_re=glb-_-global-_-hdr-giftcards-_-20160316-_-txt" target="_blank">Landsend</a>
        <a href="https://www.walmart.com/cp/Gift-Cards/96894?povid=96894+%7C+contentZone2+%7C+2015-06-03+%7C+1+%7C+LN-Shop+Gift+Card+Global+Nav" target="_blank">Walmart</a>
        <a href="https://www.joann.com/Gift-Cards" target="_blank">Joann</a>
        <a href="http://www.target.com/c/gift-cards/-/N-5xsxu" target="_blank">Target</a>
      </div>
    </div>
  </section>

  <section class="section -rsvp" id="rsvp">
    <div class="wrap -thin">
      <div data-module="rsvp">
        <h2>
          Can you make it?
        </h2>

        <div class="rsvp-buttons">
          <button data-to="yes" class="button">Gladly Accept</button><button data-to="no" class="button -light">Regretfully Decline</button>
        </div>

        <div class="rsvp-yes -display-block -show">
          <form action="/rsvp" method="post" autocomplete="off">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
              <h3>Can&rsquo;t wait to see you!</h3>
              <input type="hidden" name="accept" value="yes">
              <div class="form-row -name">
                <label for="name">Full Name and Guest</label>
                <input type="text" name="name" id="name" placeholder="Mr. and Mrs. John Smith" required>
              </div>
              <div class="form-row -name">
                <label for="email">Your Email or Phone<small>In case we need to get in touch</small></label>
                <input type="text" name="email" id="email" placeholder="">
              </div>
              <div class="form-row">
                <label for="message">A Message to Therese Williams</label>
                <textarea name="message" id="message"></textarea>
              </div>
              <div class="form-row">
                <input type="submit" value="Send RSVP" class="button">
              </div>
            </fieldset>
          </form>
        </div>
        <div class="rsvp-no">
          <form action="/rsvp" method="post" autocomplete="off">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
              <h3>Sorry to miss you!</h3>
              <input type="hidden" name="accept" value="no">
              <div class="form-row">
                <label for="name">Full Name and Guest</label>
                <input type="text" name="name" id="name">
              </div>
              <div class="form-row">
                <label for="message">A Message to Therese Williams</label>
                <textarea name="message" id="message"></textarea>
              </div>
              <div class="form-row">
                <input type="submit" value="Send RSVP" class="button">
              </div>
            </fieldset>
          </form>
        </div>
      </div>

    </div>
  </section>

  @include('partials.footer')
@endsection
