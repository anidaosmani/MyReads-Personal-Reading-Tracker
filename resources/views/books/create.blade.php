<h1>Add Book</h1>

<form method="POST" action="{{ route('books.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Title">

    <input type="text" name="author" placeholder="Author">

    <input type="text" name="genre" placeholder="Genre">

    <select name="status">
        <option>Want To Read</option>
        <option>Currently Reading</option>
        <option>Finished</option>
    </select>

    <input type="number" name="rating">

    <textarea name="review"></textarea>

    <button type="submit">Save</button>
</form>