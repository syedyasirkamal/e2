<!doctype html>
<html lang='en'>
<head>

    <title>Project 1 - High/Low Guessing game</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link rel="stylesheet" href="css/style.css" />

    @yield('head')

</head>
<body>


<div class="container">
<img src="images/logo.png" alt="logo" /><br />

<main>
 <div id="str"> 
    @yield('message')
    </div>
      @yield('form')
      <div id="attempts">  
        @yield('attempts')
      </div>
</main>

</div>

@yield('body')

</body>
<div id="attempts"> 
    @yield('links')
    </div>
</html>