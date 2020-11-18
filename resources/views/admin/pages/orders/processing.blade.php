@extends('admin.layouts.admin-layout')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Processing Orders</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item ">Processing Orders</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row mb-4">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="#" class="btn btn-success"><div class="badge badge-white">0</div> Completed Orders</a>
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
                                <th scope="col">Ordered Packages</th>
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
                                    <td><div class="badge badge-info">{{ $order->orderedPackages->count() }}</div></td>
                                    <td>{{ $order->amount }} BDT</td>
                                    <td>{{ $order->created_at->format('jS F Y') }}</td>
                                    <td>
                                        <a href="" class="btn btn-success mb-1"><i class="fas fa-check"></i></a>

                                        <a href="" class="btn btn-info mb-1"><i class="fas fa-eye"></i></a>

                                        <a href="" id="delete" class="btn btn-danger mb-1"><i class="fas fa-trash"></i></a>
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
