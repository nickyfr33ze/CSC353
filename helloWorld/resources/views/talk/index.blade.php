<ul>
    @foreach($talk as $talk)
    <li>
        <a href="/talk/{{ $talk->id }}/edit">{{ $talk->$talk }}"</a>
        <form method="post" action="/talk/{{ $talk->id }}">
            @crsf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>