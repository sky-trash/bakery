<h1>Добро пожаловать!</h1>

<h2>Последние статьи</h2>
<ul>
@foreach($articles as $article)
    <li><strong>{{ $article->title }}</strong>: {{ $article->description }}</li>
@endforeach
</ul>

<h2>Актуальные акции</h2>
<ul>
@foreach($promotions as $promo)
    <li><strong>{{ $promo->title }}</strong>: {{ $promo->description }}</li>
@endforeach
</ul>
