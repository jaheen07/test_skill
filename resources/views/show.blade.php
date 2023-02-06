<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
       

        
    </head>

    <body>

       <table class="table">

       <tr>
       <th>name</th>
       <th>email</th>
       <th>logo</th>
       <th>website</th>
       
       </tr>
       @foreach ($data as $item)
       <tr>
       
           <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
             <td>{{$item->logo}}</td>
              <td>{{$item->website}}</td>
       
       </tr>
       @endforeach
       </table>

       <div>{{$data->links()}}</div>
    </body>

</html>