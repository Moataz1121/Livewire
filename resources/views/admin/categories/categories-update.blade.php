<x-update-modal title="Edit Skill" >
    <div class="col-md-12 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input wire:model='name' type="text" id="emailBasic" class="form-control" placeholder="Name" />
        @include('admin.error' ,['prop' => 'name'])

      </div>

</x-update-modal>
