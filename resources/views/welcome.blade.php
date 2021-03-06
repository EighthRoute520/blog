<!DOCTYPE html>  
<html lang="{{ config('app.locale') }}">  
<head>  
    <meta charset="utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
    <title>天下博客</title>  
</head> 

<body>  
    <div id="app"></div>  
    <script src="{{ mix('js/manifest.js') }}"></script> 
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>  
</body>  
</html>