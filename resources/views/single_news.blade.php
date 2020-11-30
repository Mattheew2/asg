@extends('template')

@section('content')
    <div class="sub_page_content">
        <div class="row single_news">
            <div class="col-12 col-md-8">
                <h1>{{ $single_news['Title'] }}</h1>
                <h2>{{ $single_news['Subtitle'] }}</h2>
                <p>{{ $single_news['content'] }}</p>
            </div>
            <div class="col-12 col-md-4 news_photos">
                <img src="../img/blog_1.jpg" alt="">

                <img src="../img/blog_1.jpg" alt="">
            </div>
        </div>
        <div class="row other_news">
            @foreach ($last_news as $last)
                <div class="col-12 col-md-6">
                    <h3>{{ $last['Title'] }}</h3>
                    <h4>{{ $last['Subtitle'] }}</h4>
                    <p>{{ $last['description'] }}</p>
                    <div class="accent-button button">
                        <a href="{{ $last['id'] }}">Continue Reading</a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection('content')
