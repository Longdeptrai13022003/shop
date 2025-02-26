<base href="{{ env('APP_URL') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TranLong SHOP ADMIN DASHBOARD</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend/css/animate.css" rel="stylesheet">
    @if(isset($config['css']) && is_array($config['css']))
        @foreach ($config['css'] as $key=>$val)
            {!!'<link href="'.$val.'" rel="stylesheet"></link>'!!}
        @endforeach
    @endif
    <link href="backend/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="backend/css/customize.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="backend/js/jquery-3.1.1.min.js"></script>