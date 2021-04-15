<form method="post" action="/talk/{{ $download->id }}">
    @csrf
    @method('patch')

    <div>
        Title: <input type="text" name="title" value="{{ old('title', $download->title) }}">
        @error('title'){{ $message }}@enderror
    </div>

    <div>
        Description:
        <textarea name="description">{{ old('description', $talk->description) }}</textarea>
        @error('description'){{ $message }}@enderror
    </div>

    <button type="submit">Save</button>
</form>