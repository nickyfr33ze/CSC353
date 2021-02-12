<form method="post" action="/talk/{{ $talk->id }}">
    @csrf
    @method('patch')
    Title: <input type="text" name="title" value="{{ $talk->title }}">
    Description: <textarea name="description">
        {{ $talk->description }}
    </textarea>
    <button type="submit">Save</button>
</form>
