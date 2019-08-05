<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <title>Document</title>



    <!-- libary css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    



    <!-- libary font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/da679a1af2.js"></script>



    <!-- custom css -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/reponsive.css">
 







</head>

<body>


    @include('header')
    @yield('content')
    @include('footer')

    <!-- libary js -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
   
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    
  

    
   

    
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