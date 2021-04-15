<a href="/upload/create">Upload a new file</a>

<ul>
    @foreach($uploads as $upload)
      <li>
          <a href="/upload/{{ $upload->id }}/edit">{{ $upload->title }}</a>
          <form method="post" action="/upload/{{ $upload->id }}">
              @csrf
              @method('delete')
              <button type="submit">Delete</button>
          </form>
      </li>
    @endforeach
</ul>