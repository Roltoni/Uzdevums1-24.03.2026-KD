<h2>{{ $singleBook->title }}</h2>
<h3>{{ $singleBook->author }}</h3>
<p>{{ $singleBook->released_at }}</p>
<form action="/books/{{$singleBook->id}}/destroy" method="POST">
    @csrf
    @method("DELETE")
    <input type="submit" value="DELETE">
<form>
<a href="/books">All books</a>