<form method="post" action="/upload">
    @csrf

    <div>
        Title: <input type="text" name="title" value="{{ old('title') }}">
        @error('title'){{ $message }}@enderror
    </div>

    <div>
        Description:
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description'){{ $message }}@enderror
    </div>

    <button type="submit">Save</button>
</form>