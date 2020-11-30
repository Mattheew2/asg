@extends('template')

@section('content')
    <div class="sub_page_content">
        <div class="row">
            @foreach ($every_news as $all_news)
                <div class="col-12 col-md-6 main_page_news">
                    <img src="img/blog_1.jpg" alt="">
                    <div class="text-content">
                        <h3>{{ $all_news['Title'] }}</h3>
                        <h4>{{ $all_news['Subtitle'] }}</h4>
                        <span>{{ $all_news['Data'] }}</span>
                        <p>{{ $all_news['description'] }}</p>

                        <div class="accent-button button">
                            <a href="news/{{ $all_news['id'] }}">Continue Reading</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection('content')
