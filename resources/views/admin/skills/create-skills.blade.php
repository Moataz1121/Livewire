<x-create-modal title="Add New Skill">
<div class="col mb-0">
    <label for="emailBasic" class="form-label">Name</label>
    <input wire:model='name' type="text" id="emailBasic" class="form-control" placeholder="Name" />
  @include('admin.error' ,['prop' => 'name'])
  </div>
  <div class="col mb-0">
    <label for="dobBasic" class="form-label">Progress</label>
    <input wire:model='progress' type="text" id="dobBasic" class="form-control" placeholder="10" />
    @include('admin.error' ,['prop' => 'progress'])

  </div>

</x-create-modal>
