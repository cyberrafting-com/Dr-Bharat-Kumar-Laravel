<!DOCTYPE html>
<html>

<head>
    @include('includes.head')              
</head>    

<body>
    <div class="page-wrapper">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>          
</body>

</html>         
