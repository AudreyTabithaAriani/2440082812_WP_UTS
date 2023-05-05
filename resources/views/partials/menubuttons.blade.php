<div class="buttons are-large is-centered">
    @foreach ($categories as $cat)
            <div class="nav-item">
                <a href="/{{ $user->id }}/coffee/{{ $cat->coffee_category }}" class="button {{ ($cat->coffee_category === $type) ? "is-active" : "" }} is-large is-centered is-responsive" aria-current="page" href="#">
                    <span>{{ $cat->coffee_category }}</span>
                </a>
            </div>
    @endforeach
</div>
