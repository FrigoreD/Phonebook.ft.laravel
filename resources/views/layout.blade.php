<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Телефонный справочник</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<nav class ="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="#">Телефонный справочник</a>
</nav>
<div class="container">

    <div class="row">

        <div class="col-md-12">

            <form method="get" action="{{route('search')}}">
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="s" name="s"
                               placeholder="Search...">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary
                        btn-block">Search</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
          @yield('content')
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
