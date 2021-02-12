<form method="post" action="/talk">
    @csrf
    Title: <input type="text" name="title">
    Description: <textarea name="description"></textarea>
    <button type="submit">Save</button>
</form>