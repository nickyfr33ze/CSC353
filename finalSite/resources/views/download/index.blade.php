<a href="/download/create">Download a new file</a>

<ul>
    @foreach($downloads as $download)
      <li>
          <a href="/download/{{ $download->id }}/edit">{{ $download->title }}</a>
          <form method="post" action="/download/{{ $download->id }}">
              @csrf
              @method('delete')
              <button type="submit">Delete</button>
          </form>
      </li>
    @endforeach
</ul>