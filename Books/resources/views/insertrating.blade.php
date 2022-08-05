<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Rating</title>
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <h1 style="text-align:center">Insert Rating</h1>
    <form action="/insertrating" method="post">
      @csrf
      <div style="margin:10px">
        <label for="">Book Author :</label>
        <select name="author" id="">
          <option value="">Pilih Author</option>
          @foreach($dataauthors as $author)
          <option value="{{$author->id}}">{{$author->name}}</option>
          @endforeach
        </select>
      </div>
      <div style="margin:10px">
        <label for="">Book Name :</label>
        <select name="book" id="">
          <option value="">Pilih Book</option>
          @foreach($databooks as $book)
          <option value="{{$book->id}}">{{$book->book}}</option>
          @endforeach
        </select>
      </div>
      <div style="margin:10px">
        <label for="">Rating :</label>
        <select name="rating" id="">
          <option value="">Pilih Rating</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
      <button style="margin:10px" type="sumbit">Submit</button>
    </form>
  </body>

  </html>
</body>

</html>