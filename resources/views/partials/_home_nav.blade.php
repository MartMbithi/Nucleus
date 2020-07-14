<nav class="list-group list-group-flush">
    <a class="list-group-item" href="{{ route('home') }}" >
        <i class="fe-icon-user text-muted"></i>
            {{ __('Profile') }}
    </a>
    <a class="list-group-item" href="{{ url('/demo') }}">
        <i class="fe-icon-map-pin text-muted"></i>
            {{ __('Try NucleusERP') }}
    </a>
</nav>