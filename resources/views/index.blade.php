<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <title>Car Application</title>
</head>
<body>  
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid bg-danger p-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white p-5" >
                     <h1 class="display-2">Cars</h1>
                     <p class="lead">A web application that creates cars...</p>
                    </div>
                    <div class="col-md-6">
                      <img src="img/car.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
             <form action="{{route('cars.create')}}" method="post">
                @csrf
                 <div class="row form-group">
                     <div class="col-md-12">
                         <label for="">Make: </label>
                         <input type="text" name="make" class="form-control" required>
                     </div>
                 </div>
                 <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Model: </label>
                        <input type="text" name="model" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Produced on: </label>
                        <input type="date" name="produced_on" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group pt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success w-20 float-right">Create</button>
                </div>
                </div>
             </form>
            </div>
            <div class="col-md-6 pt-4">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Produced on</th>
                        <th>Actions</th>
                    </tr>
                   @foreach ($cars as $car)
                   <tr>
                        <td>{{$car->make}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->produced_on}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                   </tr>

                   @endforeach
                </table>
            </div>
        </div>
    </div>


</body>
</html>