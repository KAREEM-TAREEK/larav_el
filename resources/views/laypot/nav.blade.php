 
<html>
    <head>
        <title> @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        @section('nav')
            <h1 style="color: rgb(124, 51, 51) ; text-align:center; margin-top:33px; background-color:rgba(153, 50, 204, 0.512)">hello world</h1>
           <nav class="navbar bg-body-tertiary">
            <form class="container-fluid justify-content-start">
               <a href="/users"><button          class="btn btn-outline-success me-2" type="button">users</button></a>
             <a href="/paste"> <button class="btn btn-sm btn-outline-secondary" type="button">Paste</button></a>
            </form>
          </nav>
        @stop

 
        <div class="container">
            @yield('content')
        </div>
        <div class="containerr">
            @yield('contenttt')
        </div>
    </body>
</html>