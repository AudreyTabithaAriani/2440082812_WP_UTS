<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('layouts.main')

@section('contents')

@include('partials.menubuttons')

@foreach ($coffees as $coffee)

<a class="box ml-4 mr-4" href="{{ route('transaction.add', ['id' => $user->id, 'coffee_name' => $coffee->coffee_name, 'coffee_price' => $coffee->coffee_price, 'user_id' => $user->id ])}}" onclick="return confirm('Add {{ $coffee->coffee_name }} for {{ $coffee->coffee_price }} to cart?')">
    <article class="media">
      <div class="media-left">
        <figure class="image is-64x64">
          <img src="/{{ $coffee->image_address }}" alt="Image">
        </figure>
      </div>
      <div class="media-content">
        <div class="content is-large">
          <p>
            <strong>{{ $coffee->coffee_name }}</strong>
            <br>
            Rp{{ $coffee->coffee_price }}
          </p>
        </div>
        <nav class="level is-mobile">
          <div class="level-left">
          </div>
        </nav>
      </div>
    </article>
</a>
@endforeach
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
