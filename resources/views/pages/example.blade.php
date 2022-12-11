@extends('layouts.app')

@section('title', 'Hello, world!')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card rounded-4 shadow-sm">
                        <div class="card-header">
                            <nav>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="card-body  p-5">
                            <h1>
                                <i class="bi bi-people-fill me-2"></i>
                                Users
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
