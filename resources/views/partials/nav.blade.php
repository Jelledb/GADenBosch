<!-- Menu -->
<ul class="nav navbar-nav">
    @foreach ($menu as $menuItem)
            <li><a href="{{ $menuItem->url }}">{{ $menuItem->name }}</a></li>
    @endforeach
</ul>




