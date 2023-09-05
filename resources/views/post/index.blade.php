@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4 fetured-post blog-post " data-aos="fade-up">
                    <div class="blog-post-thumbnail-wrapper">
                        <a href="{{ route('post.showP', $post->id) }}"><img src="{{ 'storage/' . $post->preview_image }}" alt="blog post"></a>
                    </div>
                    <p class="blog-post-category ">{{ $post->category   ->title }}</p>
                    <a href="{{ route('post.showP', $post->id) }}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
        <div class="row">

            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach($randomPosts as $post)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <a href="{{ route('post.showP', $post->id) }}"><img src="{{ 'storage/' . $post->preview_image }}" alt="blog post"></a>
                                </div>
                                <p class="blog-post-category">{{ $post->category   ->title }}</p>
                                <a href="{{ route('post.showP', $post->id) }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{ $post->title }}</h6>
                                </a>
                            </div>

                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>

</main>
@endsection
