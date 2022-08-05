<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Famous Author</title>
  <style>
    table,
    td,
    th {
      border: 1px solid;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }
  </style>
</head>

<body>
  <table>
    <thead>

      <tr>
        <th>No</th>
        <th>Author Name</th>
        <th>Voter</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dataauthor as $author)
      <tr>
        <td>{{++$i}}</td>
        <td>{{$author->Author->name}}</td>
        <td>{{$author->voter}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>