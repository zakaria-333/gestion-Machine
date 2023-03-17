
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<style>
        body{
                background-color:#F4F5D5;
        }
        </style>

    <title>Document</title>
    <style>h1 {text-align: center;}</style>
</head>
<body>

    
            <div class="container">
                
    @if (session()->has('nonsupp'))
            <h3 style="color:red">{{session()->get('nonsupp')}}</h3>
    @endif
    @if (session()->has('status'))
            <h3 style="color:green">{{session()->get('status')}}</h3>
    @endif
    


     <ul class="nav justify-content-center bg-dark py-3">
            <li class="nav-item">
                <a class="nav-link text-white" href={{route('create.index')}}>Salle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href={{route('createM.index')}}>Machine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href={{route('statiqtique')}}>Charts</a>
            </li>
        </ul>



    @yield('a')
    


            </div>


</body>

</html>