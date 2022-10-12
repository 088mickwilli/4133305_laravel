@extends('layout.master')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Math Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="col-md-4 m-auto">
                    <form action="{{route('calculator.cal')}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        <div class="card">
                            <div class="card-header">
                                Calculator
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="firstnumber" placeholder="Enter First number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="secondnumber" placeholder="Enter second number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <select name="operator" id="operator" class="form-control">
                                            <option value="">----</option>
                                            <option value="+">+</option>
                                            <option value="-">-</option>
                                            <option value="*">*</option>
                                            <option value="/">/</option>
                                            <option value="%">%</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning">คำตอบ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-mb-3 m-auto">
            @if (session('message'))
                <div class="alert alert-warning">
                    <h1>{{session('message')}}</h1>
                </div>
            @endif
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

@endsection