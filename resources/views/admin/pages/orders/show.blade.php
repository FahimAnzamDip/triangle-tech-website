@extends('admin.layouts.admin-layout')

@section('backend-styles')
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #invoice, #invoice * {
                visibility: visible;
            }
        }
    </style>
@endsection

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Order Details</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('orders.index') }}">Orders</a></div>
                <div class="breadcrumb-item">Details</div>
            </div>
        </div>

        <div class="section-body">
            <div class="invoice">
                <div class="invoice-print" id="invoice">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1>Invoice</h1>
                                <h1>Order #{{ $order->id }}</h1>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        Name: {{ $order->first_name . ' ' . $order->last_name }}<br>
                                        Address: {{ $order->address }}<br>
                                        Postcode: {{ $order->zip_code }}<br>
                                        City & Country: {{ $order->city }}, {{ $order->country }}
                                    </address>
                                </div>

                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        {{ $order->created_at->format("F j, Y, g:i a") }}<br><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">Order Summary</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="40">#</th>
                                        <th>Package Name</th>
                                        <th>Package Type</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Sub Total</th>
                                    </tr>
                                    @foreach($order->orderedPackages as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->package->package_title }}</td>
                                        <td>{{ $item->package->package_sub_title }}</td>
                                        <td class="text-center">৳ {{ number_format($item->package->package_price) }} BDT</td>
                                        <td class="text-center">{{ $item->quantity }}</td>
                                        <td class="text-center">৳ {{ number_format($item->package->package_price * $item->quantity) }} BDT</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-8">

                                </div>
                                <div class="col-lg-4 text-right">
                                    <hr class="mt-0 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name"><strong>Total Amount</strong></div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">
                                            ৳ {{ number_format($order->amount) }} BDT
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-md-right">
                    @if($order->status != 'Complete')
                    <div class="float-lg-left mb-lg-0 mb-3">
                        <a href="{{ route('orders.make.complete', $order->id) }}" class="btn btn-primary text-white"><i class="fas fa-credit-card"></i> Complete Order</a>
                        <a id="delete" href="{{ route('orders.delete', $order->id) }}" class="btn btn-danger text-white"><i class="fas fa-times"></i> Delete</a>
                    </div>
                    @endif
                    <button id="print" class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('backend-scripts')
    <script>
        $("#print").click(function (e) {
            e.preventDefault();
            window.print();
        });
    </script>
@endsection
