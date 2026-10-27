@extends('layouts.custom')

@section('content')
  @php
    $partners = [
      ['name' => 'Barça Foundation', 'logo' => 'barca-foundation.png'],
      ['name' => 'Danish Refugee Council', 'logo' => 'danish-refugee-council.png'],
      ['name' => 'UNHCR', 'logo' => 'unhcr.jpg'],
    ];
  @endphp

  <div class="page-title">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Donors &amp; Partners</li>
        </ol>
      </div>
    </nav>
  </div>

  <section class="section">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <span class="description-title">Donors &amp; Partners</span>
        <h1>Donors &amp; Partners</h1>
      </div>

      <div class="partner-grid" aria-label="Donor and partner logos listed alphabetically">
        @foreach ($partners as $partner)
          <article class="partner-card">
            <img src="{{ asset('theme/assets/img/donors/' . $partner['logo']) }}" alt="{{ $partner['name'] }} logo" loading="lazy">
            <h2>{{ $partner['name'] }}</h2>
            @if (!empty($partner['website']) || !empty($partner['support_type']) || !empty($partner['project']) || !empty($partner['period']))
              <dl>
                @if (!empty($partner['website']))
                  <dt>Website</dt><dd><a href="{{ $partner['website'] }}">{{ $partner['website'] }}</a></dd>
                @endif
                @if (!empty($partner['support_type']))
                  <dt>Support type</dt><dd>{{ $partner['support_type'] }}</dd>
                @endif
                @if (!empty($partner['project']))
                  <dt>Funded project</dt><dd>{{ $partner['project'] }}</dd>
                @endif
                @if (!empty($partner['period']))
                  <dt>Partnership period</dt><dd>{{ $partner['period'] }}</dd>
                @endif
              </dl>
            @endif
          </article>
        @endforeach
      </div>

      <p class="text-center mt-4">Partner websites, support types, funded projects, and partnership periods can be added when supplied.</p>
      <div class="text-center mt-4">
        <a class="btn btn-primary" href="mailto:info@grtr-u.org?subject=Become%20a%20Partner">Become a Partner</a>
      </div>
    </div>
  </section>
@endsection
