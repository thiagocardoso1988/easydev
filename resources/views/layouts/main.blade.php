<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Easydev Desenvolvimentos')</title>
    <!--[if IE]><link rel="shortcut icon" href="/images/logos/easydev_logo_text_normal_32.png"><![endif]-->
    <link rel="shortcut icon" href="/images/logos/easydev_logo_icon_normal_32.png" sizes="32x32"/>

    <link rel="stylesheet" href="/css/site.css">
  </head>
  <body>
    
    <div id="app">
      @yield('content')
    </div>

  </body>

  <script type="text/javascript" src="/js/site.js"></script>

</html>