<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticketbeast</title>
  <link
    rel="stylesheet"
    type="text/css"
    href="/css/app.css"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat&display=swap"
  />
</head>
<body class="bg-gray-200 antialised">
  @include('layouts.navbar')
  <main>
    @yield('content')
  </main>
</body>
</html>
