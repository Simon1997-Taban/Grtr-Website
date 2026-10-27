@extends('layouts.custom')
@section('content')
 <!-- Page Title -->
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/what-we-do">Articles</a></li>
            <li class="current">There is talent hidden in the bushes</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
        <section id="blog-details" class="blog-details section">
	      <div class="container" data-aos="fade-up">
	      	<div class="article-hero">
          <div class="hero-background">
            <img src="{{ asset('theme/assets/img/blog/winning-team.svg') }}" alt="Machine Learning in Healthcare" class="hero-bg-image">
            <div class="hero-overlay"></div>
          </div>

          <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
            <!-- <div class="category-badges">
              <span class="badge">Healthcare</span>
              <span class="badge">AI &amp; ML</span>
            </div> -->
            <h1>There is talent hidden in the bushes</h1>
          </div>
        </div>
        <!-- article-hero -->
	        <div class="article-body">
	          <div class="sidebar-navigation" data-aos="fade-right">
	            <div class="nav-sticky">
	              <h3><i class="bi bi-list"></i> Related Posts</h3>
	              <ul class="content-nav">
	                <li><a href="/what-we-do/education">Education</a></li>
	                <li><a href="/what-we-do/research">Research</a></li>
	                <li><a href="/what-we-do/livelihood">Livelihood</a></li>
	                <li><a href="/what-we-do/peace-building">Peace Building</a></li>
	                <li><a href="/what-we-do/environment-protection">Environment Protection</a></li>
	                <li><a href="/what-we-do/wash">WASH</a></li>
	              </ul>
	            </div>
	          </div>
	          <main class="main-content">
	            <section id="overview" class="content-block" data-aos="fade-up">
	              <div class="intro-text">
	                <p class="lead-paragraph">
	                  We focus on inclusive learning, capacity building and technical suppport to build self confidence and resilience among the refugees and the host communities
	                </p>
	                <p>We promote formal and non-formal education as a second chance learning opportunity to the beneficiarie. Our education programs create awareness among the beneficiaries on crisis management, personal hygiene and sanitation, embracing vacinnation and other support programs, and death management. We also train women and girls on financial literacy, and encourgae them to save for the future.</p>
	              </div>
	            </section>
	          </main>
	        </div>
	      </div>
	    </section><!-- /Blog Details Section -->
@endsection