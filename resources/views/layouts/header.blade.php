<ul>
    <li>
        <a 
        class="{{ request()->is('/') ? 'active' : '' }}"
        href="{{ route('pages.index') }}">Home</a>
    </li>
    <li>
        <a
        class="{{ request()->is('about') ? 'active' : '' }}"
        href="{{ route('pages.about') }}">About</a>
    </li>
    <li><a href="#"></a></li>
</ul>