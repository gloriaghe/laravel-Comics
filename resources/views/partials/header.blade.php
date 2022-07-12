<?php
$links = [
                [
                    'text' => "CHARACTERS",
                    'url' => "#",
                    'current' => false
                ],
                [
                    'text' => "COMICS",
                    'url' => "#",
                    'current' => true
                ],
                [
                    'text' => "MOVIES",
                    'url' => "#",
                    'current' => false
                ],
                [
                    'text' => "TV",
                    'url' => "#",
                    'current' => false
                ],
                [
                    'text' => "GAMES",
                    'url' => "#",
                    'current' => false
                ],
                [
                    'text' => "COLLECTIBLES",
                    'url' => "#",
                    'current' => false
                ],
                [
                    'text' => "VIDEOS",
                    'url' => "#",
                    'current' => false
                ],
                [
                    'text' => "FANS",
                    'url' => "#",
                    'current' => false
                ],
                [
                    'text' => "NEWS",
                    'url' => "#",
                    'current' => false
                ],
                [
                    'text' => "SHOP",
                    'url' => "#",
                    'current' => false
                ]
            ]
?>

<header>
    <section>

        <a href="#">
            <img src="../assets/img/dc-logo.png" alt="Logo Dc Comics">
        </a>
        <nav>
            <ul>

                    @foreach ($links as $link)
                      <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach


            </ul>
        </nav>
    </section>
</header>
