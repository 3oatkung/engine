<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="google-site-verification" content="vzNW_JGI1BXSjHaZe8qcydfcpYnuOX3e8tsfhT4TYsw" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">        
        <link rel="stylesheet" href="{{url()}}/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url()}}/assets/typicons/typicons.min.css">
        <link rel="stylesheet" href="{{url()}}/assets/css/animate.css">
		<link rel="stylesheet" href="{{url()}}/assets/css/form-elements.css">
        <link rel="stylesheet" href="{{url()}}/assets/css/style.css">
        <link rel="stylesheet" href="{{url()}}/assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        [endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{url()}}/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url()}}/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url()}}/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url()}}/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="{{url()}}/assets/ico/apple-touch-icon-57-precomposed.png">
        
        @yield('facebookPixel')

</head>
<body>

    @yield('content')

</body>
</html>