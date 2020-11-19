<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Details From TTL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Override some Bootstrap CDN styles - normally you should apply these through your Bootstrap variables / sass -->
    <style>
        body { font-family: "Roboto", serif; font-size: 0.8rem; font-weight: 400; line-height: 1.4; color: #333333; }
        h1, h2, h4, h5 { font-weight: 700; color: #333333; }
        h1 { font-size: 2rem; }
        h2 { font-size: 1.6rem; }
        h4 { font-size: 1.2rem; }
        h5 { font-size: 1rem; }
        .table { color: #333333; }
        .table td, .table th { border-top: 1px solid #333333; }
        .table thead th { vertical-align: bottom; border-bottom: 2px solid #333333; }

        @page {
            margin-top: 2.5cm;
            margin-bottom: 2.5cm;
        }

        @page :first {
            margin-top: 0;
            margin-bottom: 2.5cm;
        }
    </style>

</head>
<body>

<div style="background-color: #000000; height: 10px;"></div>

<div class="container-fluid pt-2 pt-md-4 px-md-5">

    <!-- Invoice heading -->

    <table class="table table-borderless">
        <tbody>
        <tr>
            <td class="border-0">
                <div class="row">
                    <div class="col-md text-center text-md-left mb-3 mb-md-0">
{{--                        <img class="logo img-fluid mb-3" src="https://docamatic.s3-eu-west-1.amazonaws.com/assets/360_logo.png" style="max-height: 140px;"/>--}}
                        <br>

                        <h3 class="mb-1"><a href="https://triangeltech.com">Triangle Technologeis Ltd</a></h3>
                        Plot #02, Road #12, Sector #10,<br>
                        Uttara Dhaka 1230<br>
                        <strong>+8801904654712</strong> <br>
                        <strong>+8801810536303</strong>
                    </div>

                    <div class="col text-center text-md-right">

                        <!-- Dont' display Bill To on mobile -->
                        <span class="d-block">
                            <h4>Billed To</h4>
                        </span>

                        <h5 class="mb-0">Name: {{ $order->first_name . ' ' . $order->last_name }}</h5>
                        Address: {{ $order->address }}<br/>
                        Zip: {{ $order->zip_code }}<br/>
                        City: {{ $order->city }}, Country: {{ $order->country }}<br/>
                        Email: {{ $order->email }} <br/>
                        Phone: {{ $order->phone }}

                        <h6 class="mb-0 mt-3">{{ $order->created_at->format("F j, Y, g:i a") }}</h6>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>

    <!-- Invoice items table -->

    <table class="table">
        <thead>
        <tr>
            <th>Summary</th>
            <th class="text-right">Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->orderedPackages as $item)
        <tr>
            <td>
                <h5 class="mb-1">{{ $item->package->package_title }}</h5>
                ({{ $item->package->package_sub_title }}) &times; <strong>{{ $item->quantity }}</strong>
            </td>
            <td class="font-weight-bold align-middle text-right text-nowrap">{{ number_format($item->quantity * $item->package->package_price) }} BDT</td>
        </tr>
        @endforeach
        <tr class="border-top border-light">
            <td colspan="2" class="text-right border-0 pt-4"><h5>Total: {{ number_format($order->amount) }} BDT</h5></td>
        </tr>
    </table>

    <!-- Thank you note -->

    <h5 class="text-center pt-2">
        Thank you for your Order!
    </h5>
</div>
</body>
