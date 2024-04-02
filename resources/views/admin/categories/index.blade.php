@extends('admin.master')
@section('categories-active' , 'active')

@section('content')


<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline"> Categories</h4>
            <button type="button" class="btn btn-primary mx-3 mb-2" data-bs-toggle="modal" data-bs-target="#create">
                Add New
            </button>
    </div>
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('admin.categories.categories-data')
                </div>
            </div>

            @livewire('admin.categories.categories-create')
            @livewire('admin.categories.categories-update')
            @livewire('admin.categories.categories-delete')

    </div>
    </div>
    <!-- / Content -->



@endsection
