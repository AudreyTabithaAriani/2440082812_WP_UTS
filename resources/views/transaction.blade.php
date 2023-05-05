<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

@extends('layouts.main')

@section('contents')
@foreach ($transactions as $tran)
<div class="box ml-4 mr-4">
    <article class="media">
      <div class="media-content">
        <div class="content is-large">
          <p>
            Date/Time: {{ $tran->transaction_time }}
            <br>
            <strong>{{ $tran->coffee_name }}</strong>
            <br>
            Rp{{ $tran->coffee_price }}
          </p>
        </div>
        <nav class="level is-mobile">
          <div class="level-left">
          </div>
        </nav>
      </div>
    </article>
</div>
@endforeach
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
