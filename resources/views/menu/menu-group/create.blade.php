@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Menu Group and Menu</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Menu Group Management</h2>

            <div class="card">
                <div class="card-header">
                    <h4>Create Menu Group</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('menu-group.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Menu Group Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                    <a class="btn btn-secondary" href="{{ route('menu-group.index') }}">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection