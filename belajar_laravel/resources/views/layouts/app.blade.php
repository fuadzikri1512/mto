<html>   
<head>     
	<title>App Name - @yield('title')</title> 
 
    <!-- BOOTSTRAP CSS -->     
    <link       rel="stylesheet"       
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"       
    integrity="sha384Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"       
    crossorigin="anonymous"     />   
</head>   
<body>     @section('navbar') Navbar dari Layout     <hr />     @show 
 
    <div class="container">       
    @yield('content')     
</div>   
</body> 
</html> 