<h1>{{ $lesson->title }}</h1>
<h3><a href="{{ route('author.view', ['author' => $lesson->author->id]) }}">{{ $lesson->author->name }}</a></h3>

<p>{{ $lesson->description }}</p>

<a href="{{ route('home') }}">Back</a>
