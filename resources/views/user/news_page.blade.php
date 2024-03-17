@extends('user.header_footer')

@section('main')

    <div id="Blog" class="blog-section">
        <div class="main-container">
            <div class="blog-container">
                <div class="blog-heading" style="text-align: center">
                    <h5 class="h2 _600-bold">{{ $post->news_topic }}</h5>
                </div>
                <div class="blog-para" >
                    <div class="paragraph-v-1 _500-medium">
                        {!! $post->news_page !!}
                    </div>
                </div>
                <div class="blog-card" >
                    <img alt="Blog post image" src="{{ asset("img/news/".$post->news_photo) }}"
                         class="img-fluid" >
                </div>
            </div>
        </div>
    </div>

@endsection
