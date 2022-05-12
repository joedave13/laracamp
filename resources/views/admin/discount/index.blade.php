@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">
                    Discount
                </div>
                <div class="card-body">
                    @include('components.alert')
                    <div class="row my-3">
                        <div class="col-md-12 d-flex flex-row-reverse">
                            <a href="{{ route('admin.discount.create') }}" class="btn btn-primary btn-sm">
                                Add Discount
                            </a>
                        </div>
                    </div>
                    {{-- <table class="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Camp</th>
                                <th>Price</th>
                                <th>Register Date</th>
                                <th>Paid Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($checkouts as $checkout)
                            <tr>
                                <td>{{ $checkout->user->name }}</td>
                                <td>{{ $checkout->camp->title }}</td>
                                <td>${{ $checkout->camp->price }}K</td>
                                <td>{{ $checkout->created_at->format('M d, Y') }}</td>
                                <td>
                                    @if ($checkout->payment_status == 'paid')
                                    <span class="badge bg-success">Paid</span>
                                    @else
                                    <span class="badge bg-warning">Waiting</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection