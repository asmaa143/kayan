        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css Start-->

        {{-- @if ( LaravelLocalization::getCurrentLocale() == 'ar')
                arabic
                <link href="{{ URL::asset('assets/css/app-rtl.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />
        @endif
        @if ( LaravelLocalization::getCurrentLocale() == 'en')
                english
                <link href="{{ URL::asset('assets/css/app.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />
        @endif --}}

        <link href="{{ URL::asset('assets/css/app.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />


        <!-- App Css End-->