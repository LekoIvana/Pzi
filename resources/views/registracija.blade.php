<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/logo1.png">
        <title>Tvoje krpice</title>
    
    @vite('resources/js/app.js')    
    </head>
    <body >
       <div class="container" id="app">
           <div>
               
                <registracija-component>
                    
                </registracija-component>
               
            </div> 
            
        </div>
    </body>
</html>