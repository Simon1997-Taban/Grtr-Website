@extends('layouts.custom')
@section('content')
	 <!-- Page Title -->
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="#">About us</a></li>
            <li class="current">Who we are</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="20">

        <div class="row g-5">
          <div class="col-lg-6">
            <h6 class="display-5 fw-bold mb-4">Our story</h6>
            <p class="lead mb-4">... transforming communities</p>
            <p class="mb-2 lh-lg">
              Global Rehabilitation and Transformation Response (GRTR) is a non-profit organization that aims to transform communities through providing services aligned with the Sustainable Development Goals (SDGs). We work with communities and offer support to underprivileged individuals and groups irrespective of their age, gender, race, nationality, political affiliation, socio-economic status or religious beliefs.
            </p>
            <p class="mb-2 lh-lg">
              The organization was conceived in 2019 by a group of humanitarian and development professionals who are passionate about enhancing the well-being of refugees in both Uganda and South Sudan. We are officially registered to operate in Arua city, Madi-Okollo, Terego and Yumbe districts, and are headquartered in Ofua II, Rhino Camp refugee settlement, North-western Uganda. We are also a legally registered entity in South Sudan.
            </p>
            <p class="mb-2 lh-lg">
              Conceived in 2019 by a group of humanitarian and development professionals who are passionate about enhancing the well-being of refugees in both Uganda and South Sudan, the Organization was legally registered to operate in Arua city, Madi-Okollo, Terego and Yumbe districts. We are headquartered in Ofua II, Rhinocamp Refugee Settlement in Terego District, North-western Uganda.
            </p>

            <!-- <div class="features">
              <div class="feature-item mb-4" data-aos="fade-up">
                <div class="feature-icon">
                  <i class="bi bi-rocket-takeoff"></i>
                </div>
                <div class="feature-content">
                  <h4>Pellentesque Dapibus</h4>
                  <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                </div>
              </div>

              <div class="feature-item mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon">
                  <i class="bi bi-globe2"></i>
                </div>
                <div class="feature-content">
                  <h4>Suspendisse Pulvinar</h4>
                  <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem.</p>
                </div>
              </div>

              <ul class="check-list" data-aos="fade-up" data-aos-delay="200">
                <li><i class="bi bi-check-circle"></i> Phasellus viverra nulla ut metus varius laoreet quisque rutrum aenean.</li>
                <li><i class="bi bi-check-circle"></i> Etiam ultricies nisi vel augue curabitur ullamcorper ultricies nisi nam.</li>
              </ul>

              <a href="#" class="btn btn-primary btn-lg mt-4" data-aos="fade-up" data-aos-delay="300">Learn More</a>
            </div> -->
          </div>
          <div class="col-lg-6 position-relative">
            <div class="about-img">
              <img src="{{ asset('theme/assets/img/about/about-us-1.webp') }}" class="img-fluid" alt="">
            </div>
            <section id="category-section" class="category-section">
              <div class="sidebar-posts">
                <article class="sidebar-post">
                  <div class="post-img">
                    <!-- <img src="{{ asset('theme/assets/img/blog/mission.png') }}" alt="" class="img-fluid" loading="lazy"> -->
                    <span class="post-category">Mission</span>
                  </div>
                  <div class="post-content">
                    <h4 class="title">
                      <a href="blog-details.html">A leading Organization for sustainable development</a>
                    </h4>
                    <!-- <div class="post-meta">
                      <span class="post-date">10 December 2023</span>
                    </div> -->
                  </div>
                </article>
                <article class="sidebar-post">
                  <div class="post-img">
                    <!-- <img src="{{ asset('theme/assets/img/blog/shared-vision.png') }}" alt="" class="img-fluid" loading="lazy"> -->
                    <span class="post-category">Vision</span>
                  </div>
                  <div class="post-content">
                    
                    <h4 class="title">
                      <a href="blog-details.html">To inform and transform communities by providing services aimed at attaining the sustainable development goals (SDGs)</a>
                    </h4>
                    <!-- <div class="post-meta">
                      <span class="post-date">10 December 2023</span>
                    </div> -->
                  </div>
                </article>
                <article class="sidebar-post">
                  <div class="post-img">
                    <!-- <img src="{{ asset('theme/assets/img/blog/value.png') }}" alt="" class="img-fluid" loading="lazy"> -->
                    <span class="post-category">Values</span>
                  </div>
                  <div class="post-content">
                    <h4 class="title">
                      <a href="blog-details.html">Professionalism, Innovation, Team work, Diversity</a>
                    </h4>
                    <!-- <div class="post-meta">
                      <span class="post-date">10 December 2023</span>
                    </div> -->
                  </div>
                </article>
              </div>
            </section>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
@endsection