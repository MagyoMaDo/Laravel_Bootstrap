<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootsratp w/ Vite</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])
    </head>
    <body>
     <div class="container py-4 px-3 mx-auto">
         <h1>Hello, Bootsratp and Vite!</h1>
         <button class="btn btn-primary">Primary button</button>     
        </div> 
    </body>
</html> 