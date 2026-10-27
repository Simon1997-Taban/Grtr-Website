@extends('layouts.custom')

@section('content')
        <!-- Blog Hero Section -->
    <section id="blog-hero" class="blog-hero section">

      <div class="container-fluid p-0" data-aos="fade">

        <div class="blog-hero-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 1000,
              "effect": "fade",
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="blog-hero-item">
                <img src="{{ asset('theme/assets/img/blog/winning-team.svg') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <h1>Promoting sports for peace..</h1>
                  <!-- <div class="meta">
                    <span class="author">BY <a href="#">Dary Smith</a></span>
                    <span class="date">02 Jan, 2024</span>
                    <span class="read-time">3 Minute Read</span>
                    <span class="views">1.9k views</span>
                  </div> -->
                  <a href="/blog/article/there-is-talent-hidden-in-the-bushes-/{{1}}" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="blog-hero-item">
                <img src="{{ asset('theme/assets/img/blog/digital-literacy.jpg') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <!-- <span class="category">Business</span> -->
                  <h1>Building digital skills in the refugee camps</h1>
                  <!-- <div class="meta">
                    <span class="author">BY <a href="#">Mark Johnson</a></span>
                    <span class="date">12 Jan, 2024</span>
                    <span class="read-time">4 Minute Read</span>
                    <span class="views">2.3k views</span>
                  </div> -->
                  <a href="blog-details.html" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="blog-hero-item">
                <img src="{{ asset('theme/assets/img/blog/land-rights.jpg') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <!-- <span class="category">Technology</span> -->
                  <h1>Know your land rights</h1>
                  <a href="blog-details.html" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="blog-hero-item">
                <img src="{{ asset('theme/assets/img/blog/skilling-youth.jpg') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <!-- <span class="category">Leadership</span> -->
                  <h1>Empowering youth-led enterprises in the refugee camps</h1>
                  <!-- <div class="meta">
                    <span class="author">BY <a href="#">David Chen</a></span>
                    <span class="date">8 Jan, 2024</span>
                    <span class="read-time">4 Minute Read</span>
                    <span class="views">2.7k views</span>
                  </div> -->
                  <a href="blog-details.html" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End slide item -->

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

      </div>

    </section><!-- /Blog Hero Section -->

    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5 align-items-center">
          <div class="col-lg-6 position-relative">
            <div class="about-img" data-aos="fade-right">
              <img src="{{ asset('theme/assets/img/blog/livelihood.jpg') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <h2 class="display-4 fw-bold mb-4">... a helping hand</h2>
            <!-- <p class="lead mb-4">Too often we underestimate the power of a touch, a smile, a kind word, a listening ear, an honest compliment, or the smallest act of caring, all of which have the potential to turn a life around</p> -->

            <div class="features">
              <div class="featured-quote bg-primary-subtle rounded-4" data-aos="zoom-in">
                <blockquote class="p-4">                  
                  <p class="lead"><i class="bi bi-quote"></i>Too often we underestimate the power of a touch, a smile, a kind word, a listening ear, an honest compliment, or the smallest act of caring, all of which have the potential to turn a life around<i class="bi bi-quote"></i></p>
                  <footer>LEO BUSCAGLIA</footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Category Postst Section -->
    <section id="latest-posts" class="latest-posts section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">us in the community</span>
        <h2>us in the community</h2>
        <p>We tailor our activities to transform the lives of people in the rural communities of Africa </p>
      </div>
      <!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="150">
            <article class="featured-post position-relative h-50">
              <figure class="featured-media m-0">
                <img src="{{ asset('theme/assets/img/blog/education.jpg') }}" alt="Featured post image" class="img-fluid w-100" loading="lazy">
              </figure>

              <div class="featured-content">
                
                <h3 class="title">Education</h3>
                <p class="excerpt d-none d-md-block">We promote formal and non-formal education as a second chance learning opportunity in the communities we serve.</p>

                <a href="/what-we-do/education" class="readmore stretched-link"><span>Continue</span><i class="bi bi-arrow-right"></i></a>
              </div>
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </article>
          </div><!-- End Featured Post -->

          <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="150">
            <article class="featured-post position-relative h-50">
              <figure class="featured-media m-0">
                <img src="{{ asset('theme/assets/img/blog/vsla-group.jpg') }}" alt="Featured post image" class="img-fluid w-100" loading="lazy">
              </figure>

              <div class="featured-content">
                
                <h3 class="title">Livelihood support</h3>
                <p class="excerpt d-none d-md-block">Encouraging members of the community to embrace savings culture through the village savings and loans associations promotes</p>

                <a href="/what-we-do/livelihood" class="readmore stretched-link"><span>Continue</span><i class="bi bi-arrow-right"></i></a>
              </div>
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </article>
          </div><!-- End Featured Post -->

          <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="150">
            <article class="featured-post position-relative h-50">
              <figure class="featured-media m-0">
                <img src="{{ asset('theme/assets/img/blog/barca-sports.jpg') }}" alt="Featured post image" class="img-fluid w-100" loading="lazy">
              </figure>

              <div class="featured-content">
                
                <h3 class="title">Peace building</h3>
                <p class="excerpt d-none d-md-block">We implement programs that promote peaceful coexistence in diversity. Through sports, the youth live in harmony and work together for</p>

                <a href="/what-we-do/peace-building" class="readmore stretched-link"><span>Continue</span><i class="bi bi-arrow-right"></i></a>
              </div>
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </article>
          </div><!-- End Featured Post -->

          <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="150">
            <article class="featured-post position-relative h-50">
              <figure class="featured-media m-0">
                <img src="{{ asset('theme/assets/img/blog/tree-planting.jpg') }}" alt="Featured post image" class="img-fluid w-100" loading="lazy">
              </figure>

              <div class="featured-content">
                
                <h3 class="title">Environment protection</h3>
                <p class="excerpt d-none d-md-block">We embrace tree planting and reafforestaion programs to initiate, recreate and recover from an ecosystem that has been</p>

                <a href="/what-we-do/environment-protection" class="readmore stretched-link"><span>Continue</span><i class="bi bi-arrow-right"></i></a>
              </div>
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </article>
          </div><!-- End Featured Post -->

          <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="150">
            <article class="featured-post position-relative h-50">
              <figure class="featured-media m-0">
                <img src="{{ asset('theme/assets/img/blog/wash-session.jpg') }}" alt="Featured post image" class="img-fluid w-100" loading="lazy">
              </figure>

              <div class="featured-content">
                
                <h3 class="title">Water, Sanitation & Hygiene</h3>
                <p class="excerpt d-none d-md-block">We promote formal and non-formal education as a second chance learning opportunity to the beneficiarie. Our education programs</p>

                <a href="/what-we-do/wash" class="readmore stretched-link"><span>Continue</span><i class="bi bi-arrow-right"></i></a>
              </div>
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </article>
          </div><!-- End Featured Post -->

          <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="150">
            <article class="featured-post position-relative h-50">
              <figure class="featured-media m-0">
                <img src="{{ asset('theme/assets/img/blog/community-research.jpg') }}" alt="Featured post image" class="img-fluid w-100" loading="lazy">
              </figure>

              <div class="featured-content">
                
                <h3 class="title">Research</h3>
                <p class="excerpt d-none d-md-block">Quisquam perferendis officiis incidunt, facilisis aliquet consectetur lorem luctus. Ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <a href="/what-we-do/research" class="readmore stretched-link"><span>Continue</span><i class="bi bi-arrow-right"></i></a>
              </div>
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
            </article>
          </div><!-- End Featured Post -->
      </div>
    </section>

    <!-- Featured Posts Section -->
    <section id="featured-posts" class="featured-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Stories from the Field</span>
        <h2>Stories from the Field</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <p class="text-center">No published news stories are available yet.</p>

    </section><!-- /Featured Posts Section -->


@endsection
