@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    Edit Discount
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.discount.update', $discount->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                name="name" id="name" value="{{ old('name') ?? $discount->name }}" required>
                            @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Code</label>
                            <input type="text" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}"
                                name="code" id="code" maxlength="5" value="{{ old('code') ?? $discount->code }}"
                                required>
                            @if ($errors->has('code'))
                            <small class="text-danger">{{ $errors->first('code') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                name="description" id="description"
                                rows="5">{{ old('description') ?? $discount->description }}</textarea>
                            @if ($errors->has('description'))
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Percentage (%)</label>
                            <input type="number"
                                class="form-control {{ $errors->has('percentage') ? 'is-invalid' : '' }}"
                                name="percentage" id="percentage" min="1" max="1000"
                                value="{{ old('percentage') ?? $discount->percentage }}" required>
                            @if ($errors->has('percentage'))
                            <small class="text-danger">{{ $errors->first('percentage') }}</small>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection