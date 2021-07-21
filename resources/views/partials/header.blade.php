<header>
    <ul>
        <li class="">
            <a href="{{route('home')}}" class="{{ Route::currentRouteName() == 'home' ? 'active' : ''}}">Home</a>
            <a href="{{route('comics.index')}}" class="{{ Route::currentRouteName() == 'comics.index' ? 'active' : ''}}">Comics</a>
            <a href="{{route('comics.create')}}" class="{{ Route::currentRouteName() == 'comics.create' ? 'active' : ''}}">Aggiungi</a>
        
        </li>
      
    </ul>
</header>