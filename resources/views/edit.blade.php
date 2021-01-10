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
    <div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
         <form action="{{route('cars.update',["car"=>$car])}}" method="post">
            @csrf
             <div class="row form-group">
                 <div class="col-md-12">
                     <label for="">Make: </label>
                     <input type="text" name="make" class="form-control" value="{{$car->make}}">
                 </div>
             </div>
             <div class="row form-group">
                <div class="col-md-12">
                    <label for="">Model: </label>
                    <input type="text" name="model" class="form-control"value="{{$car->model}}" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="">Produced on: </label>
                    <input type="date" name="produced_on" class="form-control"value="{{$car->produced_on}}" >
                </div>
            </div>
            <div class="row form-group pt-3">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success w-20 float-right">Update</button>
            </div>
            </div>
         </form>
        </div>
    </div>
</div>
</body>
</html>