<main id="main">
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8 entries">
                    @forelse ($posts as $post)
                        <article class="entry">

                            <div class="entry-img">
                                @if ($post->imagem)
                                    <img src="{{ asset('appimgs/posts/' . $post->imagem) }}" alt="{{ $post->titulo }}"
                                        class="img-fluid" style="object-fit: cover;object-position: center">
                                @endif
                            </div>

                            <h2 class="entry-title">
                                <a href="#">{{ $post->titulo }}</a>
                            </h2>

                            <div class="entry-meta">

                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <a href="#">{{ $post->user->name }}</a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i>
                                        <a href="#"><time
                                                datetime="2020-01-01">{{ $post->updated_at->diffForHumans() }}</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{ $post->destaque }}
                                </p>
                                <div class="read-more">
                                    <a href="#">Ler Mais</a>
                                </div>
                            </div>

                        </article>
                    @empty
                        <article class="entry">
                            <h2 class="entry-title">
                                <p>Sem posts atÃ© agora!</p>
                            </h2>
                        </article>
                    @endforelse

                    {{-- {{$posts->links()}} --}}

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li>teste (2)</li>
                                <li>teste (1)</li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">posts Recentes</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($posts as $post)
                                <div class="post-item clearfix">
                                    @if ($post->imagem)
                                        <img src="{{ asset('appimgs/posts/' . $post->imagem) }}"
                                            alt="{{ $post->titulo }}">
                                    @endif
                                    <h4><a href="#">{{ $post->titulo }}</a></h4>
                                    <time datetime="2020-01-01">{{ $post->updated_at->diffForHumans() }}</time>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
