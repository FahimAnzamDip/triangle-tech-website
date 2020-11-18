@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Failed Orders</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item ">Failed</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row mb-4">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="{{ route('orders.pending') }}" class="btn btn-info mr-3"><div class="badge badge-white">{{ \App\Models\Order::where('status', 'Pending')->count() }}</div> Pending</a>

                    <a href="{{ route('orders.index') }}" class="btn btn-primary mr-3"><div class="badge badge-white">{{ \App\Models\Order::where('status', 'Processing')->count() }}</div> Processing</a>

                    <a href="{{ route('orders.completed') }}" class="btn btn-success mr-3"><div class="badge badge-white">{{ \App\Models\Order::where('status', 'Complete')->count() }}</div> Completed</a>

                    <a href="{{ route('orders.canceled') }}" class="btn btn-warning"><div class="badge badge-white">{{ \App\Models\Order::where('status', 'Canceled')->count() }}</div> Canceled</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless text-center mb-0" id="datatable">
                            <thead>
                            <tr>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer Email</th>
                                <th scope="col">Ordered Status</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Ordered at</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $key => $order)
                                <tr>
                                    <td class="text-danger font-weight-bold">{{ $order->transaction_id }}</td>
                                    <td>{{ $order->first_name . ' ' . $order->last_name }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>
                                        @if($order->status == 'Processing')
                                            <div class="badge badge-primary">{{ $order->status }}</div>
                                        @elseif($order->status == 'Complete')
                                            <div class="badge badge-success">{{ $order->status }}</div>
                                        @elseif($order->status == 'Pending')
                                            <div class="badge badge-info">{{ $order->status }}</div>
                                        @elseif($order->status == 'Canceled')
                                            <div class="badge badge-danger">{{ $order->status }}</div>
                                        @elseif($order->status == 'Failed')
                                            <div class="badge badge-danger">{{ $order->status }}</div>
                                        @else
                                            <div class="badge badge-warning">{{ $order->status }}</div>
                                        @endif
                                    </td>
                                    <td>{{ $order->amount }} BDT</td>
                                    <td>{{ $order->created_at->format('jS F Y') }}</td>
                                    <td>
                                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary mb-1"><i class="fas fa-eye"></i></a>

                                        <a href="{{ route('orders.delete', $order->id) }}" id="delete" class="btn btn-danger mb-1"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
