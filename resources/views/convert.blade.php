<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/convert.css') }}">
    <title>Currency Converter</title>
</head>
<body>
<div class="container">
        <h1>Currency Converter: </h1> 
    <form action="{{ route('convert') }}" method="GET">
    <div class="select">
        <div class="form-group">
            <input name="input" placeholder="Enter amount" class="form-control">
        </div>

        <div class="form-group">
            <label>From</label>
            <select name="dropdown" class="form-control">
                <option value="EUR">EUR - Euro</option>
            </select>
        </div>

        <div class="form-group">
            <label>To</label>
            <select name="dropdown1" class="form-control">
                <option value="EUR">EUR - Euro</option>
                <option value="USD">USD - US Dollar</option>
                <option value="JPY">JPY - Japanese Yen</option>
                <option value="BGN">BGN - Bulgarian lev</option>
                <option value="CZK">CZK - Czech koruna</option>
                <option value="DKK">DKK - Danish krone</option>
                <option value="GBP">GBP - British Pound</option>
                <option value="HUF">HUF - Hungarian forint</option>
                <option value="PLN">PLN - Polish zloty</option>
                <option value="RON">RON - Romanian leu</option>
                <option value="SEK">SEK - Swedish krona</option>
                <option value="CHF">CHF - Swiss franc</option>
                <option value="ISK">ISK - Icelandic krona</option>
                <option value="NOK">NOK - Norwegian krone</option>
                <option value="HRK">HRK - Croatian kuna</option>
                <option value="RUB">RUB - Russian rouble</option>
                <option value="TRY">TRY - Turkish lira</option>
                <option value="AUD">AUD - Australian dollar</option>
                <option value="BRL">BRL - Brazilian real</option>
                <option value="CAD">CAD - Canadian dollar</option>
                <option value="CNY">CNY - Chinese yuan renminbi</option>
                <option value="HKD">HKD - Hong Kong dollar</option>
                <option value="IDR">IDR - Indonesian rupiah</option>
                <option value="ILS">ILS - Israeli shekel</option>
                <option value="INR">INR - Indian rupee</option>
                <option value="KRW">KRW - South Korean won</option>
                <option value="MXN">MXN - Mexican peso</option>
                <option value="MYR">MYR - Malaysian ringgit</option>
                <option value="NZD">NZD - New Zealand dollar</option>
                <option value="PHP">PHP - Philippine piso</option>
                <option value="SGD">SGD - Singapore dollar</option>
                <option value="THB">THB - Thai baht</option>
                <option value="ZAR">ZAR - South African rand</option>
            </select>
        </div>
    </div>  
        <button type="submit" class="btn btn-primary">Convert</button>
    </form>
    @if(isset($result))
        <h3>{{ $amount }} {{ $from }} = {{$result}} {{ $to }}</h3>
    @endif
</div>



    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>