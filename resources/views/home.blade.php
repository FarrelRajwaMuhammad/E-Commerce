@extends('layouts.app')

@section('content')
    <section id="categories">
        <div class="container">
            <div class="menu">
                <div class="row row-cols-2">
                    <!-- Left cards -->
                    <div class="col-md-8">
                        <div class="row g-3">
                            <!-- Smaller cards -->
                            @foreach ($products as $item)                        
                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->product_name }}"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop" class="img-fluid" style="height: 200px">
                                        <div class="card-body text-center p-2">
                                            <h5 class="card-title mb-0">{{ $item->product_name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add On</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">.col-md-4</div>
                                <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                                <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    Level 1: .col-sm-9
                                    <div class="row">
                                        <div class="col-8 col-sm-6">
                                            Level 2: .col-8 .col-sm-6
                                        </div>
                                        <div class="col-4 col-sm-6">
                                            Level 2: .col-4 .col-sm-6
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
@endsection
