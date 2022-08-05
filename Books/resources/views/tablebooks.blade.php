<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Store</title>
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
    <form action="/viewtabel" method="post">
        @csrf
        <div>
            <label for="">Lisht Shown :</label>
            <select name="pagination" id="">
                <option value="">Pilih</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="60">60</option>
                <option value="70">70</option>
                <option value="80">80</option>
                <option value="90">90</option>
                <option value="100">100</option>
            </select>
        </div>
        <div style="margin-top: 10px">
            <label for="">Search :</label>
            <input type="text" name="search" placeholder="search">
        </div>
        <div style="padding-left :45px; margin:10px"><button type="submit">Submit</button></div>
    </form>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Book Name</th>
                <th>Category Name</th>
                <th>Author Name</th>
                <th>Average Rating</th>
                <th>Vooter</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ratings as $rating)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$databooks[$k++]->book}}</td>
                <td>{{$databooks[$j++]->category->category}}</td>
                <td>{{$databooks[$l++]->author->name}}</td>
                <td>

                    {{ $rating->average }}

                </td>
                <td>{{$rating->voter}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>