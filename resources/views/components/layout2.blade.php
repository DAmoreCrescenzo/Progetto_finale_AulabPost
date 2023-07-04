<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>The Aulab Post</title>
</head>
<body>
    <x-navbar></x-navbar>
    

    
    
    {{$slot}}
    
   
           
    
    
    <x-footer></x-footer>
    <script src="https://kit.fontawesome.com/590be479bb.js" crossorigin="anonymous"></script>
    {{-- <script src="https://unpkg.com/@popperjs/core@2%22%3E"></script> --}}
   
</body>
</html>