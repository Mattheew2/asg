@extends('template')

@section('content')

    <div class="slider">
        <div class="Modern-Slider content-section" id="top">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div>
                            <h1>Imprezy<br>ASG</h1>
                            <p>Regularie odbywające się spotkania dla pasjonatów airsoftu</p>
                            <div class="white-button button">
                                <a href="#featured">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div>
                            <h1>Szeroki wybór <br> replik</h1>
                            <p>Na immprezach możliwość wypożyczenia repliki i nie tylko
                                <br>z naszej szerokiej oferty</p>

                            <div class="white-button button">
                                <a href="#featured">Share More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div>
                            <h1>Organizujemy imprezy<br>integracyjne</h1>
                            <p>Wieczór kawalerski, integracja w firmie, spotkanie ze znajomymi...<br>Wszystko to
                                zorganizujesz z naszą pomocą</p>

                            <div class="white-button button">
                                <a href="#featured">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="section-content">
        <div class="tabs-content">
            <div class="wrapper">
                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1" class="row">
                        @foreach ($newsy as $news)
                            <div class="col-12 col-md-6 main_page_news">
                                <img src="img/blog_1.jpg" alt="">
                                <div class="text-content">
                                    <h3>{{ $news['Title'] }}</h3>
                                    <h4>{{ $news['Subtitle'] }}</h4>
                                    <span>{{ $news['Data'] }}</span>
                                    <p>{{ $news['description'] }}</p>

                                    <div class="accent-button button">
                                    <a href="news/{{$news['id']}}">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection('content')
