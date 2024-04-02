<x-show-modal title="Show Skill">

    <div class="col mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input wire:model='name' type="text" id="emailBasic" class="form-control" placeholder="Name" />

      </div>
      <div class="col mb-0">
        <label for="dobBasic" class="form-label">Email</label>
        <input wire:model='email' type="text" id="dobBasic" class="form-control" placeholder="10" />
      </div>
      <div class="col mb-0">
        <label for="dobBasic" class="form-label">subject</label>
        <input wire:model='subject' type="text" id="dobBasic" class="form-control" placeholder="10" />
      </div>
      <div class="col-12 mb-0">
        <label for="dobBasic" class="form-label">message</label>
        <input wire:model='message' type="text" id="dobBasic" class="form-control" placeholder="10" />
      </div>
</x-show-modal>
