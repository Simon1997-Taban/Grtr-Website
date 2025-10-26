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
                <img src="{{ asset('theme/assets/img/blog/blog-hero-1.webp') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <!-- <span class="category">Lifestyle</span> -->
                  <h1>5 Efficient Rules How to Organize Working Place Relationship</h1>
                  <!-- <div class="meta">
                    <span class="author">BY <a href="#">Dary Smith</a></span>
                    <span class="date">02 Jan, 2024</span>
                    <span class="read-time">3 Minute Read</span>
                    <span class="views">1.9k views</span>
                  </div> -->
                  <a href="blog-details.html" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="blog-hero-item">
                <img src="{{ asset('theme/assets/img/blog/blog-hero-2.webp') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <!-- <span class="category">Business</span> -->
                  <h1>The Future of Remote Work and Digital Transformation</h1>
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
                <img src="{{ asset('theme/assets/img/blog/blog-hero-3.webp') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <!-- <span class="category">Technology</span> -->
                  <h1>Young Coach for Education</h1>
                  <!-- <div class="meta">
                    <span class="author">BY <a href="#">Sarah Williams</a></span>
                    <span class="date">10 Jan, 2024</span>
                    <span class="read-time">5 Minute Read</span>
                    <span class="views">3.1k views</span>
                  </div> -->
                  <a href="blog-details.html" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <div class="blog-hero-item">
                <img src="{{ asset('theme/assets/img/blog/blog-hero-4.webp') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <!-- <span class="category">Leadership</span> -->
                  <h1>Building High-Performance Teams in a Digital Age</h1>
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

            <div class="swiper-slide">
              <div class="blog-hero-item">
                <img src="{{ asset('theme/assets/img/blog/blog-hero-5.webp') }}" alt="Blog Hero Image" class="img-fluid">
                <div class="blog-hero-content">
                  <!-- <span class="category">Innovation</span> -->
                  <h1>Sustainable Business Practices for the Modern Enterprise</h1>
                  <!-- <div class="meta">
                    <span class="author">BY <a href="#">Emma Davis</a></span>
                    <span class="date">6 Jan, 2024</span>
                    <span class="read-time">3 Minute Read</span>
                    <span class="views">2.5k views</span>
                  </div> -->
                  <a href="blog-details.html" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div><!-- End slide item -->

          </div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

      </div>

    </section><!-- /Blog Hero Section -->

    <!-- Featured Posts Section -->
    <section id="featured-posts" class="featured-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Latest Posts</span>
        <h2>Latest Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="blog-posts-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4500
              },
              "slidesPerView": 1,
              "spaceBetween": 40,
              "centeredSlides": true,
              "breakpoints": {
                "768": {
                  "slidesPerView": 1.5,
                  "spaceBetween": 30
                },
                "1200": {
                  "slidesPerView": 2.2,
                  "spaceBetween": 40
                }
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              }
            }
          </script>

          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <article class="blog-card">
                <div class="blog-image">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-square-3.webp') }}" alt="Blog Image" loading="lazy">
                  <div class="category-badge">Technology</div>
                </div>
                <div class="blog-content">
                  <div class="author-info">
                    <img src="{{ asset('theme/assets/img/person/person-f-8.webp') }}" alt="Author" class="author-avatar">
                    <div class="author-details">
                      <span class="author-name">Rebecca Martinez</span>
                      <span class="publish-date">February 8, 2025</span>
                    </div>
                  </div>
                  <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod</a></h3>
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                  <div class="blog-footer">
                    <div class="reading-time">
                      <i class="bi bi-clock"></i>
                      <span>5 min read</span>
                    </div>
                    <a href="#" class="btn-read-more">
                      <span>Continue Reading</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <article class="blog-card">
                <div class="blog-image">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-square-7.webp') }}" alt="Blog Image" loading="lazy">
                  <div class="category-badge">Design</div>
                </div>
                <div class="blog-content">
                  <div class="author-info">
                    <img src="{{ asset('theme/assets/img/person/person-m-12.webp') }}" alt="Author" class="author-avatar">
                    <div class="author-details">
                      <span class="author-name">Alexander Thompson</span>
                      <span class="publish-date">February 12, 2025</span>
                    </div>
                  </div>
                  <h3><a href="#">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris</a></h3>
                  <p>Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit.</p>
                  <div class="blog-footer">
                    <div class="reading-time">
                      <i class="bi bi-clock"></i>
                      <span>8 min read</span>
                    </div>
                    <a href="#" class="btn-read-more">
                      <span>Continue Reading</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <article class="blog-card">
                <div class="blog-image">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-square-1.webp') }}" alt="Blog Image" loading="lazy">
                  <div class="category-badge">Business</div>
                </div>
                <div class="blog-content">
                  <div class="author-info">
                    <img src="{{ asset('theme/assets/img/person/person-f-3.webp') }}" alt="Author" class="author-avatar">
                    <div class="author-details">
                      <span class="author-name">Sophia Williams</span>
                      <span class="publish-date">February 15, 2025</span>
                    </div>
                  </div>
                  <h3><a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</a></h3>
                  <p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum ac turpis.</p>
                  <div class="blog-footer">
                    <div class="reading-time">
                      <i class="bi bi-clock"></i>
                      <span>3 min read</span>
                    </div>
                    <a href="#" class="btn-read-more">
                      <span>Continue Reading</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <article class="blog-card">
                <div class="blog-image">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-square-5.webp') }}" alt="Blog Image" loading="lazy">
                  <div class="category-badge">Lifestyle</div>
                </div>
                <div class="blog-content">
                  <div class="author-info">
                    <img src="{{ asset('theme/assets/img/person/person-m-7.webp') }}" alt="Author" class="author-avatar">
                    <div class="author-details">
                      <span class="author-name">Michael Chen</span>
                      <span class="publish-date">February 18, 2025</span>
                    </div>
                  </div>
                  <h3><a href="#">Excepteur sint occaecat cupidatat non proident sunt in culpa qui</a></h3>
                  <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante etiam sit amet orci eget eros faucibus tincidunt.</p>
                  <div class="blog-footer">
                    <div class="reading-time">
                      <i class="bi bi-clock"></i>
                      <span>6 min read</span>
                    </div>
                    <a href="#" class="btn-read-more">
                      <span>Continue Reading</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div><!-- End slide item -->

            <div class="swiper-slide">
              <article class="blog-card">
                <div class="blog-image">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-square-9.webp') }}" alt="Blog Image" loading="lazy">
                  <div class="category-badge">Marketing</div>
                </div>
                <div class="blog-content">
                  <div class="author-info">
                    <img src="{{ asset('theme/assets/img/person/person-f-11.webp') }}" alt="Author" class="author-avatar">
                    <div class="author-details">
                      <span class="author-name">Elena Rodriguez</span>
                      <span class="publish-date">February 21, 2025</span>
                    </div>
                  </div>
                  <h3><a href="#">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a></h3>
                  <p>Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin lorem quis bibendum magna.</p>
                  <div class="blog-footer">
                    <div class="reading-time">
                      <i class="bi bi-clock"></i>
                      <span>4 min read</span>
                    </div>
                    <a href="#" class="btn-read-more">
                      <span>Continue Reading</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div><!-- End slide item -->
          </div>

          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Featured Posts Section -->

    <!-- Category Section Section -->
    <section id="category-section" class="category-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Category Section</span>
        <h2>Category Section</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Main Featured Post -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-8">
            <article class="hero-post" data-aos="zoom-out" data-aos-delay="200">
              <div class="post-img">
                <img src="{{ asset('theme/assets/img/blog/blog-post-5.webp') }}" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="author-info">
                  <img src="{{ asset('theme/assets/img/person/person-m-8.webp') }}" alt="" class="author-avatar">
                  <div class="author-details">
                    <span class="author-name">Michael R.</span>
                    <span class="post-date">15 March 2024</span>
                  </div>
                </div>
                <h2 class="post-title">
                  <a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore</a>
                </h2>
                <p class="post-excerpt">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <div class="post-stats">
                  <span class="read-time"><i class="bi bi-clock"></i> 5 min read</span>
                  <span class="comments"><i class="bi bi-chat-dots"></i> 12 comments</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <div class="sidebar-posts">
              <article class="sidebar-post" data-aos="fade-left" data-aos-delay="300">
                <div class="post-img">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-8.webp') }}" alt="" class="img-fluid" loading="lazy">
                </div>
                <div class="post-content">
                  <span class="post-category">Design</span>
                  <h4 class="title">
                    <a href="blog-details.html">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</a>
                  </h4>
                  <div class="post-meta">
                    <span class="post-date">22 February 2024</span>
                  </div>
                </div>
              </article>

              <article class="sidebar-post" data-aos="fade-left" data-aos-delay="400">
                <div class="post-img">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-4.webp') }}" alt="" class="img-fluid" loading="lazy">
                </div>
                <div class="post-content">
                  <span class="post-category">Business</span>
                  <h4 class="title">
                    <a href="blog-details.html">Ut enim ad minima veniam quis nostrum exercitationem ullam</a>
                  </h4>
                  <div class="post-meta">
                    <span class="post-date">18 January 2024</span>
                  </div>
                </div>
              </article>

              <article class="sidebar-post" data-aos="fade-left" data-aos-delay="500">
                <div class="post-img">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-1.webp') }}" alt="" class="img-fluid" loading="lazy">
                </div>
                <div class="post-content">
                  <span class="post-category">Lifestyle</span>
                  <h4 class="title">
                    <a href="blog-details.html">Excepteur sint occaecat cupidatat non proident sunt in culpa</a>
                  </h4>
                  <div class="post-meta">
                    <span class="post-date">10 December 2023</span>
                  </div>
                </div>
              </article>

              <article class="sidebar-post" data-aos="fade-left" data-aos-delay="600">
                <div class="post-img">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-3.webp') }}" alt="" class="img-fluid" loading="lazy">
                </div>
                <div class="post-content">
                  <span class="post-category">Tech</span>
                  <h4 class="title">
                    <a href="blog-details.html">At vero eos et accusamus et iusto odio dignissimos ducimus</a>
                  </h4>
                  <div class="post-meta">
                    <span class="post-date">5 November 2023</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>

        <!-- Grid Posts -->
        <div class="posts-grid">
          <div class="row gy-4">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <article class="grid-post">
                <div class="post-img">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-6.webp') }}" alt="" class="img-fluid" loading="lazy">
                  <div class="post-overlay">
                    <span class="category-tag">Travel</span>
                  </div>
                </div>
                <div class="post-content">
                  <h3 class="title">
                    <a href="blog-details.html">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</a>
                  </h3>
                  <p class="excerpt">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  <div class="post-footer">
                    <div class="author-info">
                      <img src="{{ asset('theme/assets/img/person/person-f-7.webp') }}" alt="" class="author-img">
                      <span class="author-name">Sarah K.</span>
                    </div>
                    <span class="read-time">3 min read</span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <article class="grid-post">
                <div class="post-img">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-2.webp') }}" alt="" class="img-fluid" loading="lazy">
                  <div class="post-overlay">
                    <span class="category-tag">Health</span>
                  </div>
                </div>
                <div class="post-content">
                  <h3 class="title">
                    <a href="blog-details.html">Magna aliqua ut enim ad minim veniam quis nostrud exercitation</a>
                  </h3>
                  <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                  <div class="post-footer">
                    <div class="author-info">
                      <img src="{{ asset('theme/assets/img/person/person-m-12.webp') }}" alt="" class="author-img">
                      <span class="author-name">David L.</span>
                    </div>
                    <span class="read-time">4 min read</span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <article class="grid-post">
                <div class="post-img">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-10.webp') }}" alt="" class="img-fluid" loading="lazy">
                  <div class="post-overlay">
                    <span class="category-tag">Finance</span>
                  </div>
                </div>
                <div class="post-content">
                  <h3 class="title">
                    <a href="blog-details.html">Ullamco laboris nisi ut aliquip ex ea commodo consequat</a>
                  </h3>
                  <p class="excerpt">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <div class="post-footer">
                    <div class="author-info">
                      <img src="{{ asset('theme/assets/img/person/person-f-11.webp') }}" alt="" class="author-img">
                      <span class="author-name">Emily T.</span>
                    </div>
                    <span class="read-time">6 min read</span>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
              <article class="grid-post">
                <div class="post-img">
                  <img src="{{ asset('theme/assets/img/blog/blog-post-7.webp') }}" alt="" class="img-fluid" loading="lazy">
                  <div class="post-overlay">
                    <span class="category-tag">Education</span>
                  </div>
                </div>
                <div class="post-content">
                  <h3 class="title">
                    <a href="blog-details.html">Excepteur sint occaecat cupidatat non proident sunt in culpa qui</a>
                  </h3>
                  <p class="excerpt">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                  <div class="post-footer">
                    <div class="author-info">
                      <img src="{{ asset('theme/assets/img/person/person-m-9.webp') }}" alt="" class="author-img">
                      <span class="author-name">Alex M.</span>
                    </div>
                    <span class="read-time">2 min read</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Category Section Section -->
@endsection
