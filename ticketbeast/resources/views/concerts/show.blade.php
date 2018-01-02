<h1>{{ $concert->title }}</h1>

<h2>{{ $concert->subtitle }}</h2>

<p>{{ $concert->formatted_date }}</p>

<p>Doors at {{ $concert->date->format('g:ia') }}</p>

<p>{{ number_format($concert->price /100, 2)}}</p>

<p>{{ $concert->venue }}</p>

<p>{{ $concert->address }}</p>

<p>{{ $concert->city }}</p>

<p>{{ $concert->postcode }}</p>

<p>{{ $concert->additional_info }}</p>