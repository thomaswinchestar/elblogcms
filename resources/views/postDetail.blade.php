@extends('layouts.post')
@section('content')
<div class="row">
    <!--Grid column-->
    <div class="col-md-8 mb-4">
      <!--Section: Post data-mdb-->
      <section class="border-bottom mb-4">
        <img src="{{ asset('images/'.$post->featured) }}"
          class="img-fluid shadow-2-strong rounded mb-4" alt="" />

        <div class="row align-items-center mb-4">
          <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
            {{-- <img src="{{ asset('images/'.$post->profile_image) }}" class="rounded shadow-1-strong me-2"
              height="35" alt="" loading="lazy" /> --}}
            <span> Published <u>{{ $post->created_at->diffForHumans() }}</u> by</span>
            <a href="" class="text-dark">Admin</a>
          </div>

          {{-- <div class="col-lg-6 text-center text-lg-end">
            <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #3b5998;">
              <i class="fab fa-facebook-f"></i>
            </button>
            <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #55acee;">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #0082ca;">
              <i class="fab fa-linkedin"></i>
            </button>
            <button type="button" class="btn btn-primary px-3 me-1">
              <i class="fas fa-comments"></i>
            </button>
          </div> --}}
          <div class="col-md-6 text-center text-lg-end">
            <small>Category: <a href=""><span class="badge bg-primary">{{ $post->category->name }}</span></a></small>
            <small>Tag: @foreach ($post->tags as $t)
                <a href=""><span class="badge bg-primary">{{ $t->name }}</span></a>
            @endforeach</small>
        </div>
        </div>
      </section>
      <!--Section: Post data-mdb-->

      <!--Section: Text-->
      <section>
        <div class="row">

        </div>
        <h2 class="my-4">{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
      </section>
      <!--Section: Text-->

      <!--Section: Share buttons-->
      {{-- <section class="text-center border-top border-bottom py-4 mb-4">
        <p><strong>Share with your friends:</strong></p>

        <button type="button" class="btn btn-primary me-1" style="background-color: #3b5998;">
          <i class="fab fa-facebook-f"></i>
        </button>
        <button type="button" class="btn btn-primary me-1" style="background-color: #55acee;">
          <i class="fab fa-twitter"></i>
        </button>
        <button type="button" class="btn btn-primary me-1" style="background-color: #0082ca;">
          <i class="fab fa-linkedin"></i>
        </button>
        <button type="button" class="btn btn-primary me-1">
          <i class="fas fa-comments me-2"></i>Add comment
        </button>
      </section> --}}
      <!--Section: Share buttons-->

      <!--Section: Author-->
      {{-- <section class="border-bottom mb-4 pb-4">
        <div class="row">
          <div class="col-3">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(23).jpg"
              class="img-fluid shadow-1-strong rounded" alt="" />
          </div>

          <div class="col-9">
            <p class="mb-2"><strong>Anna Maria Doe</strong></p>
            <a href="" class="text-dark"><i class="fab fa-facebook-f me-1"></i></a>
            <a href="" class="text-dark"><i class="fab fa-twitter me-1"></i></a>
            <a href="" class="text-dark"><i class="fab fa-linkedin me-1"></i></a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
              inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
              Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
            </p>
          </div>
        </div>
      </section> --}}
      <!--Section: Author-->

      <!--Section: Comments-->
      <section class="border-bottom mb-3">

        <!-- Comment -->
        <div class="row mb-4">
          <div class="col-md-12">
              @include('comment')
          </div>
        </div>
      </section>
      <!--Section: Comments-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4 mb-4">
      <!--Section: Sidebar-->
      <section class="sticky-top" style="top:80px;">
        <!--Section: Ad-->
        <section class="text-center border-bottom pb-4 mb-4">
          {{-- <div class="bg-image hover-overlay ripple mb-4">
            <img
              src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.webp"
              class="img-fluid" />
            <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
              <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
            </a>
          </div> --}}
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">All Tag Lists</h5>
                @foreach ($tags as $t)
                <a href="{{ route('post.tag',$t->slug) }}">
                  <span class="badge bg-success">#{{ $t->name }}</span>
                </a>
                @endforeach
            </div>
          </div>
         </section>
        <!--Section: Ad-->

        <!--Section: Video-->
        <section class="text-center">
            <h5 class="mb-3">Related Articles</h5>
            @foreach ($relatedPosts as $r)
            <a href="{{ route('post.detail',$r->slug) }}">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img
                          src="{{ asset('images/'.$r->featured) }}"
                          alt=""
                          class="img-fluid rounded-start"
                        />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $r->title }}</h5>
                          <p class="card-text">
                            {{ substr($r->content,0,60) }}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </a>

              @endforeach
        </section>
        <!--Section: Video-->
      </section>
      <!--Section: Sidebar-->
    </div>
    <!--Grid column-->
  </div>
@endsection
