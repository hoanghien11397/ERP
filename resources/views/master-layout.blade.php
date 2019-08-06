<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <title>Document</title>




    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/da679a1af2.js"></script>



    <!-- custom css -->

    <link href="css/style.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">
 







</head>

<body>


    @include('header')
    @yield('content')
    @include('footer')

    <!-- libary js -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    
  

    
   

    
    <!-- custom js -->


    <script>
 

    $(function() {
          
       
        // back to top


        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#goTop').fadeIn();
            } else {
                $('#goTop').fadeOut();
            }


        });

        $('#goTop').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });

    

    </script>

</body>

</html>