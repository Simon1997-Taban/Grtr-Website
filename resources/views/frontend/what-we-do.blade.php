@extends('layouts.custom')
@section('content')
	 <!-- Page Title -->
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">What we do</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="category-section" class="category-section section" data-aos="fade-up" data-aos-delay="10">

      <div class="container" data-aos="fade-up">
        <div class="row g-5">
        	<div class="col-12 text-center">
	        	<h6 class="display-5 fw-bold mb-4">Us in the communities</h6>
	            <p class="lead mb-4">We implement activities in the following thematic areas to support mainly the refugees and host communities.</p>
	        </div>
	    </div>
	    <div class="posts-grid">
	        <div class="row gy-4">
	            <div class="col-md-4 col-sm-12">
	              <article class="grid-post">
	                <div class="post-img">
	                  <img src="{{ asset('theme/assets/img/blog/blog-post-6.webp') }}" alt="" class="img-fluid" loading="lazy">
	                </div>
	                <div class="post-content">
	                  <h3 class="title">
	                    <a href="/what-we-do/livelihood">Livelihood</a>
	                  </h3>
	                  <p class="excerpt">GRTR offers support to refugees and host communities in difficult times as to meet the basic needs of life. In difficult times, refugees and the host communities are greatly affected, and need support to recover.
	                  </p>
	                  <a href="/what-we-do/livelihood" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
	                </div>
	              </article>
	            </div>
	            <!-- col-4 -->
	            <div class="col-md-4 col-sm-12">
	              <article class="grid-post">
	                <div class="post-img">
	                  <img src="{{ asset('theme/assets/img/blog/blog-post-6.webp') }}" alt="" class="img-fluid" loading="lazy">
	                </div>
	                <div class="post-content">
	                  <h3 class="title">
	                    <a href="/what-we-do/education">Education</a>
	                  </h3>
	                  <p class="excerpt">GRTR offers support to refugees and host communities in difficult times as to meet the basic needs of life. In difficult times, refugees and the host communities are greatly affected, and need support to recover.
	                  </p>
	                  <a href="/what-we-do/education" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
	                </div>
	              </article>
	            </div>
	            <!-- col-4 -->
	            <div class="col-md-4 col-sm-12">
	              <article class="grid-post">
	                <div class="post-img">
	                  <img src="{{ asset('theme/assets/img/blog/blog-post-6.webp') }}" alt="" class="img-fluid" loading="lazy">
	                </div>
	                <div class="post-content">
	                  <h3 class="title">
	                    <a href="/what-we-do/environment-protection">Environment Protection</a>
	                  </h3>
	                  <p class="excerpt">GRTR offers support to refugees and host communities in difficult times as to meet the basic needs of life. In difficult times, refugees and the host communities are greatly affected, and need support to recover.
	                  </p>
	                  <a href="/what-we-do/environment-protection" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
	                </div>
	              </article>
	            </div>
	            <!-- col-4 -->
	            <div class="col-md-4 col-sm-12">
	              <article class="grid-post">
	                <div class="post-img">
	                  <img src="{{ asset('theme/assets/img/blog/blog-post-6.webp') }}" alt="" class="img-fluid" loading="lazy">
	                </div>
	                <div class="post-content">
	                  <h3 class="title">
	                    <a href="/what-we-do/peace-building">Peace Building</a>
	                  </h3>
	                  <p class="excerpt">GRTR offers support to refugees and host communities in difficult times as to meet the basic needs of life. In difficult times, refugees and the host communities are greatly affected, and need support to recover.
	                  </p>
	                  <a href="/what-we-do/peace-building" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
	                </div>
	              </article>
	            </div>
	            <!-- col-4 -->
	            <div class="col-md-4 col-sm-12">
	              <article class="grid-post">
	                <div class="post-img">
	                  <img src="{{ asset('theme/assets/img/blog/blog-post-6.webp') }}" alt="" class="img-fluid" loading="lazy">
	                </div>
	                <div class="post-content">
	                  <h3 class="title">
	                    <a href="/what-we-do/wash">Water Sanitation & Hygiene</a>
	                  </h3>
	                  <p class="excerpt">GRTR offers support to refugees and host communities in difficult times as to meet the basic needs of life. In difficult times, refugees and the host communities are greatly affected, and need support to recover.
	                  </p>
	                  <a href="/what-we-do/wash" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
	                </div>
	              </article>
	            </div>
	            <!-- col-4 -->
	            <div class="col-md-4 col-sm-12">
	              <article class="grid-post">
	                <div class="post-img">
	                  <img src="{{ asset('theme/assets/img/blog/blog-post-6.webp') }}" alt="" class="img-fluid" loading="lazy">
	                </div>
	                <div class="post-content">
	                  <h3 class="title">
	                    <a href="/what-we-do/research">Research</a>
	                  </h3>
	                  <p class="excerpt">GRTR offers support to refugees and host communities in difficult times as to meet the basic needs of life. In difficult times, refugees and the host communities are greatly affected, and need support to recover.
	                  </p>
	                  <a href="/what-we-do/research" class="read-more">Continue Reading <i class="bi bi-arrow-right"></i></a>
	                </div>
	              </article>
	            </div>
	            <!-- col-4 -->
	        </div>
        </div>

      </div>

    </section><!-- /About Section -->
@endsection