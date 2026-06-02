<h1>Edit Book</h1>

<form method="POST"
      action="{{ route('books.update',$book) }}">

    @csrf
    @method('PUT')

    <input type="text"
           name="title"
           value="{{ $book->title }}">

    <button>
        Update
    </button>

</form>