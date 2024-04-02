<x-create-modal title="Add New Counter">
    <div class="col mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input wire:model='name' type="text" id="emailBasic" class="form-control" placeholder="Name" />
      @include('admin.error' ,['prop' => 'name'])
      </div>
      <div class="col mb-0">
        <label for="dobBasic" class="form-label">Count</label>
        <input wire:model='count' type="number" id="dobBasic" class="form-control" placeholder="10" />
        @include('admin.error' ,['prop' => 'count'])

      </div>
      <div class="col mb-0">
        <label for="dobBasic" class="form-label">Icon</label>
        <input wire:model='icon' type="text" id="dobBasic" class="form-control" placeholder="icon" />
        @include('admin.error' ,['prop' => 'icon'])

      </div>

    </x-create-modal>
