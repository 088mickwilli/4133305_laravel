<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF BOOK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleleapis.com/ajax/Libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
        <div class="col-lg-12" style="margin-top: 15px">
        <div class="pull-left">
        <h2>Generate PDF Using DomPDF</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{route('book-pdf',['download'=>'pdf'])}}">Download PDF</a>
        </div>
        </div>
        </div>
        <br>
        <table class="table table-bordered">
        <tr>
        <th>Book</th>
        <th>Name</th>
        <th>Country</th>
        </tr>
        @foreach ($book as $books)
        <tr>
        <td>{{ $books->book}}</td>
        <td>{{ $books->name}}</td>
        <td>{{ $books->country}}</td>
        </tr>
        @endforeach
        </table>
        {{$book->links('pagination::bootstrap-4')}}
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
