@extends('frontend.layouts.app')
@section('content')
<style>
    figure.image{
        display: none;
    }
</style>
    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper sliderFeaturedPosts">
                            <div class="swiper-wrapper">
                                @foreach ($recent_post as $item)
                                    <div class="swiper-slide">
                                        <a href="{{ route('single-post', ['post' => $item->id]) }}" class="img-bg d-flex align-items-end"
                                            style="background-image: url('frontend/assets/img/post-slide-1.jpg');">
                                            <div class="img-bg-inner">
                                                <h2>{{ $item->title }}</h2>
                                                <p>{!! Str::limit($item->description, 250, '...') !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->

        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1">
                            <a href="{{ route('single-post', ['post' => $post->id]) }}"><img src="frontend/assets/img/post-landscape-1.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span>
                                <span>{{ $post->created_at->isoFormat('D MMMM Y') }}</span>
                            </div>
                            <h2><a href="{{ route('single-post', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
                            <p class="mb-4 d-block">{!!! Str::limit($post->description, 300, '...') !!}</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="frontend/assets/img/person-1.jpg" alt=""
                                        class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">{{ $post->user->name }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                @foreach ($posts as $post)
                                    @if ($loop->index < 3)
                                        <div class="post-entry-1">
                                            <a href="{{ route('single-post', ['post' => $post->id]) }}"><img src="frontend/assets/img/post-landscape-2.jpg"
                                                    alt="" class="img-fluid"></a>
                                            <div class="post-meta"><span class="date">{{ $post->category->name }}</span>
                                                <span class="mx-1">&bullet;</span> <span>{{ $post->created_at->isoFormat('D MMMM Y') }}</span>
                                            </div>
                                            <h2><a href="{{ route('single-post', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="col-lg-4 border-start custom-border">
                                @foreach ($posts as $post)
                                    @if ($loop->index >= 4 && $loop->index <= 5)
                                        <div class="post-entry-1">
                                            <a href="{{ route('single-post', ['post' => $post->id]) }}"><img src="frontend/assets/img/post-landscape-2.jpg"
                                                    alt="" class="img-fluid"></a>
                                            <div class="post-meta"><span class="date">{{ $post->category->name }}</span>
                                                <span class="mx-1">&bullet;</span> <span>{{ $post->created_at->isoFormat('D MMMM Y') }}</span>
                                            </div>
                                            <h2><a href="{{ route('single-post', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- recent Section -->
                            <div class="col-lg-4">

                                <div class="trending">
                                    <h3>Recent Posts</h3>
                                    <ul class="trending-post">
                                        @foreach ($recent_post as $item)
                                        <li>
                                            <a href="{{ route('single-post', ['post' => $item->id]) }}">
                                                <h3>{{ $item->title }}</h3>
                                                <span class="author">{{ $item->user->name }}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div> <!-- End recent Section -->
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>
        </section> <!-- End Post Grid Section -->

        <!-- ======= Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Technology</h2>
                    <div><a href="category.html" class="more">See All Technology</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        @foreach ($post_tech as $data)
                        <div class="d-lg-flex post-entry-2">
                            <a href="{{ route('single-post', ['post' => $data->id]) }}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                <img src="frontend/assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date"></span>{{ $data->category->name }}<span class="mx-1">&bullet;</span> <span>{{ $data->created_at->isoFormat('D MMMM Y') }}</span></div>
                                <h3><a href="{{ route('single-post', ['post' => $data->id]) }}">{{ $data->title }}</a></h3>
                                <p>{!! Str::limit($data->description, 200, '...') !!}</p>
                                <p class="mt-0"><a href="{{ route('single-post', ['post' => $data->id]) }}">Selengkapnya</a></p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="frontend/assets/img/person-2.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">{{ $data->user->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-3">
                        @foreach ($all_post_tech as $data)
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">{{ $data->category->name }}</span> <span
                                    class="mx-1">&bullet;</span> <span>{{ $data->created_at->isoFormat('D MMMM Y') }}</span></div>
                            <h2 class="mb-2"><a href="{{ route('single-post', ['post' => $data->id]) }}">{{ $data->title }}</a></h2>
                            <span class="author mb-3 d-block">{{ $data->user->name }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Health</h2>
                    <div><a href="category.html" class="more">See All Health</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        @foreach ($post_health as $data)
                        <div class="d-lg-flex post-entry-2">
                            <a href="{{ route('single-post', ['post' => $data->id]) }}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                <img src="frontend/assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date"></span>{{ $data->category->name }}<span class="mx-1">&bullet;</span> <span>{{ $data->created_at->isoFormat('D MMMM Y') }}</span></div>
                                <h3><a href="{{ route('single-post', ['post' => $data->id]) }}">{{ $data->title }}</a></h3>
                                <p>{!! Str::limit($data->description, 200, '...') !!}</p>
                                <p class="mt-0"><a href="{{ route('single-post', ['post' => $data->id]) }}">Selengkapnya</a></p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="frontend/assets/img/person-2.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">{{ $data->user->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-3">
                        @foreach ($all_post_health as $data)
                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">{{ $data->category->name }}</span> <span
                                    class="mx-1">&bullet;</span> <span>{{ $data->created_at->isoFormat('D MMMM Y') }}</span></div>
                            <h2 class="mb-2"><a href="{{ route('single-post', ['post' => $data->id]) }}">{{ $data->title }}</a></h2>
                            <span class="author mb-3 d-block">{{ $data->user->name }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Culture Category Section -->

    </main>
@endsection
