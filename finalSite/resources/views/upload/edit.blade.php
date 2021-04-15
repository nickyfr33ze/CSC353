<form method="post" action="/upload/{{ $upload->id }}">
    @csrf
    @method('patch')

    <div>
        Title: <input type="text" name="title" value="{{ old('title', $upload->title) }}">
        @error('title'){{ $message }}@enderror
    </div>

    <div>
        Description:
        <textarea name="description">{{ old('description', $upload->description) }}</textarea>
        @error('description'){{ $message }}@enderror
    </div>

    <button type="submit">Save</button>
</form>