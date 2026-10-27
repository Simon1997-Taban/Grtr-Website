@extends('layouts.custom')

@section('content')
  @php
    $projects = [
      [
        'title' => 'Sustainable, gender-responsive resilience strengthening of South Sudanese refugees and Ugandan host community (SIR)',
        'duration' => 'November 2024–December 2028',
        'location' => 'Madi-Okollo, Terego and Yumbe districts',
        'partners' => 'WENIPS, PALMCORPS, GRTR and CEFORD; Welthunger Hilfe is the lead partner.',
      ],
      [
        'title' => 'Young Coaches Education 2025 & 2026',
        'partners' => 'Scort, the Football Club Social Alliance (FCSA) and UNHCR.',
        'objectives' => 'Train young adults to lead inclusive sports-for-protection activities supporting the physical and mental well-being of children aged 6–12.',
      ],
      [
        'title' => 'Provision of essential protection and education services in Madi-Okollo, Terego, Koboko and Yumbe Districts',
        'location' => 'Lot 1: Rhino Camp, Imvepi, Lobule and Bidi Bidi.',
        'objectives' => 'Improve social cohesion between refugee and host communities through sport, peacebuilding and protection.',
      ],
      [
        'title' => 'Improving Early Childhood Development Outcomes for Children 0–5 Years in Refugee Settings and Host Communities in Uganda',
        'partners' => 'The supplied information identifies the Ministry of Gender, Labour and Social Development (MGLSD) as a collaborator.',
        'objectives' => 'Strengthen early childhood development. Objective 3 covers parents’ knowledge, skills and nurturing-care practices.',
      ],
      [
        'title' => 'The Sustainable Urban Integration of Displacement-Affected Communities (SUIDAC) in Sub-Saharan African Cities Action in Arua, Uganda',
        'duration' => '24 months, starting June 2024.',
        'location' => 'Arua City and Koboko Municipality, Uganda.',
        'partners' => 'Funded by the European Union; ACC is the technical implementing partner for the West Nile region.',
        'objectives' => 'Improve displacement-affected communities’ self-reliance and social cohesion, and strengthen local administrations’ readiness to respond to their needs.',
      ],
      [
        'title' => 'Strengthening the Socio-Economic Capacity of Young People in Rhino Camp Refugee Settlement and Host Communities',
        'location' => 'Rhino Camp refugee settlement and host communities.',
        'objectives' => 'Build young people’s resilience and self-reliance through training in governance, leadership, enterprise, digital skills and financial literacy.',
      ],
      [
        'title' => 'Promoting social cohesion, peace building, and reconciliation efforts among forcibly displaced and stateless persons and the host community',
        'location' => 'Upper and lower Rhino, as described in the supplied project information.',
        'objectives' => 'Strengthen community protection and peaceful coexistence through positive interaction, awareness and skills that support household self-reliance.',
      ],
    ];
  @endphp

  <div class="page-title">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Projects</li>
        </ol>
      </div>
    </nav>
  </div>

  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <span class="description-title">Our work</span>
        <h1>Projects</h1>
        <p>Project information supplied to GRTR.</p>
      </div>

      <div class="project-grid">
        @foreach ($projects as $project)
          <article class="project-card" data-aos="fade-up">
            <h2>{{ $project['title'] }}</h2>
            @if (!empty($project['partners']))
              <p><strong>Donor / partner information:</strong> {{ $project['partners'] }}</p>
            @endif
            @if (!empty($project['duration']))
              <p><strong>Duration:</strong> {{ $project['duration'] }}</p>
            @endif
            @if (!empty($project['location']))
              <p><strong>Location:</strong> {{ $project['location'] }}</p>
            @endif
            @if (!empty($project['objectives']))
              <p><strong>Objectives:</strong> {{ $project['objectives'] }}</p>
            @endif
            <a class="btn btn-outline-primary" href="{{ url('/contact-us') }}">Ask about partnering or supporting this work</a>
          </article>
        @endforeach
      </div>

      <p class="project-information-note">Only supplied project information is shown. No project-specific galleries or unsupported donor and duration details have been inferred.</p>
    </div>
  </section>
@endsection
