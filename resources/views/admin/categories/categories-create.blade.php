<x-create-modal title="Add New Skill">
    <div class="col-md-12 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input wire:model='name' type="text" id="emailBasic" class="form-control" placeholder="Name" />
      @include('admin.error' ,['prop' => 'name'])
      </div>


    </x-create-modal>
