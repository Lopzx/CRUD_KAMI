<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Update Books</h1>
    <a href="{{route('getBooks')}}">View Books</a>
    <form method="POST" action="{{route("updateBook", ["id"=> $book->id])}}" enctype="multipart/form-data">
    @csrf
    @method("patch")
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" value="{{$book->title}}" id="title" placeholder="Input">
        <label for="author" class="form-label">Author</label>
        <input name="author" type="text" class="form-control" value="{{$book->author}}" id="author" placeholder="Input">
        <label for="date" class="form-label">Date</label>
        <input name="date" type="date" class="form-control" value="{{$book->release}}" id="date" placeholder="Input">
        <label for="price" class="form-label">Price</label>
        <input name="price" type="number" class="form-control" value="{{$book->price}}" id="price" placeholder="Input">
        <button type="submit" class="btn btn-success">Submit Book</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
