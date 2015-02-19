<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="http://www.eternallynocturnal.com/images/blackskull.jpg">
  <title>Stay Awake to Create</title>
   <link rel="stylesheet" href="{{public_path()}}/foundation/css/foundation.css">
   <link rel="stylesheet" href="{{public_path()}}/foundation/css/normalize.css">
   <link rel="stylesheet" href="{{public_path()}}/foundation/foundation-icons/foundation-icons.css" />
   <link rel="stylesheet" type="text/css" href="//localhost/enwebstore/public/date/jquery.datetimepicker.css"/ >
      <script src="http://www.eternallynocturnal.com/store/public/date/jquery.js"></script>
      <script src="http://www.eternallynocturnal.com/store/public/date/jquery.datetimepicker.js"></script>

 <script src="http://www.eternallynocturnal.com/store/public/foundation/js/vendor/modernizr.js"></script>


  <style>




    body {
      margin:0;
      width: 100%;
      font-family:'Lato', sans-serif;
      text-align:center;
      color: #ffffff;


        background: -webkit-gradient(radial, top center, 0px, top center, 100%, , color-stop(0%, rgba(99,3,35,1)), color-stop(100%, rgba(41,8,20,1)));
        background: -webkit-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(41,8,20,1) 100%);
        background: rgba(99,3,35,1);


        background: -moz-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -webkit-gradient(radial, top center, 0px, top center, 100%, , color-stop(0%, rgba(99,3,35,1)), color-stop(100%, rgba(7,0,16,1)));
        background: -webkit-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -o-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: -ms-radial-gradient(top center, ellipse cover, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        background: radial-gradient(ellipse at top center, rgba(99,3,35,1) 0%, rgba(7,0,16,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#036323', endColorstr='#072110', GradientType=1 );
        background-repeat: no-repeat;
        background-attachment: fixed;
    }









    }

    .mainbody{
      width: 80%;
      min-height: 900px;
      border-radius:30px;

      margin-left: 10%;
      background-color: #000000;
      color: #ffffff;
    }

    .blackouttext{
      color:#000000;
    }

    .whiteoutext{
      color:#ffffff;
    }

  


    a, a:visited {
      text-decoration:none;
    }

    h1 {
      font-size: 32px;
      margin: 16px 0 0 0;
      color:#ffffff;
    }
  </style>



  @section('style')


</head>



<body>



      {{--DATEPICKER INSTANTIATEX10--}}
            @foreach(range(1,10) as $datetimepicker)
              <script language="javascript">jQuery("#datetimepicker_{{$datetimepicker}}").datetimepicker(
                {theme:'dark',
                 format:'d.m.Y H:i',
                 step:15});</script>
            @endforeach
      {{--DATEPICKER END--}}



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56104944-1', 'auto');
  ga('send', 'pageview');

</script>



 <div class="row">
        <div class="large-12 columns">
         
     
         
          <div class="row">
            <div class="large-12 columns">


<ul class="example-orbit" data-orbit style="max-height:300px">
  <li>
    <img src="http://www.eternallynocturnal.com/images/halloween15.jpg" alt="slide 1" />
  </li>
  <li class="active">
    <img src="http://www.eternallynocturnal.com/images/iand.jpg" alt="slide 2" />

</ul>




              <nav class="top-bar" data-topbar>
                <ul class="title-area">
                   
                  <li class="name">
                    <h1>
                    </h1>
                  </li>
                  <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
                </ul>
             
                <section class="top-bar-section">

                  
                   
                  <ul class="right">
                    
                    <li class="divider"></li>
                    <li class="has-dropdown">
                      <a href="#">SHOP</a>
                      <ul class="dropdown">
                        
                     
                            @foreach(ProductCat::get() as $category)
                              
                            <li> <a style="color:#ffffff"{{link_to_route('sortProducts', Str::title($category->name), $category->name)}}</li>

                            @endforeach
                            <li>

                            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                                <input type="hidden" name="cmd" value="_s-xclick">

                                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                                ">
                              

                                <button type="submit" style="background-color:transparent;color:#ffffff"><i class="fi-shopping-cart"></i></button>
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                              </form>
                            </li>                          
                      </ul>

                  </ul>

                  <ul class="left">
                    <li class="divider"></li>
                    <li>
                      <a href="https://twitter.com/enclothingco" target="blank"><i class="fi-social-twitter" style="font-size:20px"></i></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="https://www.facebook.com/EternallyNocturnal" target="blank"><i class="fi-social-facebook" style="font-size:20px"></i></a>
                    </li>
                    

                  </ul>

                </section>
              </nav>
               
            </div>
          </div>

    




</div>
  <center>
<div style="min-height:100%;background-color:#000000;">

@yield('content')

</div>
</center>



  <script src="http://www.eternallynocturnal.com/store/public/foundation/js/vendor/jquery.js"></script>
  <script src="http://www.eternallynocturnal.com/store/public/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>


</body>
</html>
