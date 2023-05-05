<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid mt-3 mb-2">
        <p class="text-start fs-2"><strong>Janji Jiwa</strong>
    </div>

    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2">
          <!-- Display a greeting message based on the time of day -->
            <div class="col-sm-4 text-left"><h4>{{ $greeting }} {{ $user->user_name }}</h4></div>
            <!-- Loyalty Program -->
            <div class="col-sm-4 text-right"><h4 style="color: {{ ($user->loyalty === "Gold Level") ? "#C6A961" : "#006F42" }} !important;">{{ $user->loyalty }}</h4></div>
            <br>
        </div>
    </div>

    <ul class="nav nav-underline nav-justified">
        <li class="nav-item">
          <a href="/{{ $user->id }}/home" class="nav-link {{ ($title === "Profile") ? "active" : "" }}" aria-current="page" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a href="/{{ $user->id }}/transaction" class="nav-link text-decoration-none {{ ($title === "Transaction") ? "active" : "" }}" href="#">Transaction</a>
        </li>
      </ul>

</nav>
