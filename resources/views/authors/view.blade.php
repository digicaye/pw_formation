<h1>{{ $author->name }}</h1>

<h3>Lessons:</h3>
@foreach($author->lessons as $lesson)
    <li><a href="{{ route('lesson.view', ['lesson' => $lesson->slug]) }}">{{ $lesson->title }}</a></li>
@endforeach
