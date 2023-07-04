<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>The Aulab Post</title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-musthead></x-musthead>

    {{$slot}}
    
   
           
    <x-footer></x-footer>
      
        
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    <script src="https://kit.fontawesome.com/590be479bb.js" crossorigin="anonymous"></script>
</body>
</html>