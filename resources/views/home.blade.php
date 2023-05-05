<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('layouts.main')

@section('contents')
    <!-- Number of Stars -->
    <div>
        <div class="container">
            <div class="block">
                <button class="btn btn-white is-small"><span>150</span><i class="fa fa-star"></i></button>
              </div>
        </div>
    </div>

    <!-- Redeem Button -->
    <button class="button coff-btn is-info is-rounded ml-4 mt-4" style="background-color: {{ ($user->loyalty === "Gold Level") ? "#C6A961" : "#006F42" }} !important;" disabled>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
        Redeem
    </button>

    <!-- Main Component -->

    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide w-80 ml-4 mr-4 mt-4 mb-3 mx-auto p-2" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

    <!-- Promo -->
    <h2 class="title is-2 ml-4">This Month's Promotions</h2>
    <div class="box ml-4 mr-4">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
              <img src="/img5.png" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Latte</strong>
                <br>
                Get a hold of our latte instead of your situationship's. At least our coffee won't break your wallet!
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
              </div>
            </nav>
          </div>
        </article>
    </div>

    <div class="box ml-4 mr-4">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
              <img src="/img4.png" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Espresso</strong>
                <br>
                Espresso heart on this Valentine's day with our buy-one-get-one espresso!
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
              </div>
            </nav>
          </div>
        </article>
    </div>

    <div class="box ml-4 mr-4">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
              <img src="/img6.png" alt="Image">
            </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong>Iced Milk Coffee</strong>
                <br>
                What's better than an iced milk coffee? An even cooler promo. Get a 20% discount using the code cool4thesummer.
              </p>
            </div>
            <nav class="level is-mobile">
              <div class="level-left">
              </div>
            </nav>
          </div>
        </article>
    </div>

    <!-- Coffee Float Button -->
    <a href="/{{ $user->id }}/coffee/Signature" class="btn coff-btn btn-lg position-fixed text-white" style="bottom: 70px; right: 35px; background-color: {{ ($user->loyalty === "Gold Level") ? "#C6A961" : "#006F42" }} !important;">
        Coffee
    </a>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
