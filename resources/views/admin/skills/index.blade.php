@extends('admin.master')
@section('skills-active' , 'active')

@section('content')


<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
<div class="mb-3">
          <h4 class="fw-bold py-3 mb-4 d-inline"> Skills</h4>
          <button type="button" class="btn btn-primary mx-3 mb-2" data-bs-toggle="modal" data-bs-target="#create">
                          Add New
          </button>
                         @livewire('admin.skills.create-skills')
                        <!-- Modal -->

</div>
          <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.skills.skills-data')

                 </div>
        </div>
        @livewire('admin.skills.edit-skills')
        @livewire('admin.skills.delete-skills')
        @livewire('admin.skills.show-skills')
    </div>
    <!-- / Content -->



@endsection
