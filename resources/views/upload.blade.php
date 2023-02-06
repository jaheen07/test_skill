<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
       

        
    </head>

    <body>

       <form action="{{url('/create_data')}}" method="post" class="mt-5 text-center" enctype="multipart/form-data">
        
            @csrf
            <input type="text" name="name" required class="mt-2" placeholder="name"><br>
            
            <input type="text" name="email" class="mt-2"placeholder="email" ><br>
            <p>choose your logo here</p>
            <input type="file" name="logo" class="mt-2" ><br>
            
            <input type="text" name="website" class="mt-2"placeholder="website" >

    
        
       <br>
       <button type="submit" class="btn btn-primary mt-3">submit</button>
    </form>

    </body>

</html>