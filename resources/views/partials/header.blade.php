
<header>
    <section>

        <a href="#">
            <img src="{{asset('images/dc-logo.png')}}" alt="Logo Dc Comics">
        </a>
        <nav>
            <ul>

                    {{-- @foreach (config('links') as $link)
                      <li><a class="@if (route::currentRouteName() === $menuItem['route']) here @endif" href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach --}}
                    @foreach (config('links') as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                  @endforeach

            </ul>
        </nav>
    </section>
</header>
