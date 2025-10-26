@extends('layouts.custom')
@section('content')
 <!-- Page Title -->
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/what-we-do">What we do</a></li>
            <li class="current">Water, Sanitation & Hygiene</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
        <section id="blog-details" class="blog-details section">
	      <div class="container" data-aos="fade-up">
	        <div class="article-body">
	          <div class="sidebar-navigation" data-aos="fade-right">
	            <div class="nav-sticky">
	              <h3><i class="bi bi-list-ul"></i> Thematic areas</h3>
	              <ul class="content-nav">
	                <li><a href="/what-we-do/education">Education</a></li>
	                <li><a href="/what-we-do/research">Research</a></li>
	                <li><a href="/what-we-do/livelihood">Livelihood</a></li>
	                <li><a href="/what-we-do/peace-building">Peace Building</a></li>
	                <li><a href="/what-we-do/environment-protection">Environment Protection</a></li>
	                <li><a href="/what-we-do/wash" class="nav-link active">WASH</a></li>
	              </ul>
	            </div>
	          </div>
	          <main class="main-content">
	            <section id="overview" class="content-block" data-aos="fade-up">
	            	<div class="article-hero">
				          <div class="hero-background">
				            <img src="{{ asset('theme/assets/img/blog/livelihood.jpg') }}" alt="Machine Learning in Healthcare" class="hero-bg-image">
				            <!-- <div class="hero-overlay"></div> -->
				          </div>
				        </div>
	              <div class="intro-text">
	                <p class="lead-paragraph">
	                  Our environment, our responsibility!
	                </p>
	                <p>Sensitization of the society on climate change and and the need to protect the environment is necessary in mitigating the adverse effects that human activites impart on the environment especially in the refugee camps. We embrace tree planting and reafforestaion programs to initiate, recreate and recover from an ecosystem that has been disturbed.</p>
	              </div>
	            </section>
	          </main>
	        </div>
	      </div>
	    </section><!-- /Blog Details Section -->
@endsection