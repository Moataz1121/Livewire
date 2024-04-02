<x-update-modal title="Add New Skill">
    <div class="col-6 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <input wire:model='name' type="text" id="emailBasic" class="form-control" placeholder="Name" />
      @include('admin.error' ,['prop' => 'name'])
      </div>
      <div class="col-6 mb-0">
        <label for="dobBasic" class="form-label">Link</label>
        <input wire:model='link' type="text" id="dobBasic" class="form-control" placeholder="link" />
        @include('admin.error' ,['prop' => 'link'])

      </div>

      <div class="col-6 mb-0">
        <label for="dobBasic" class="form-label">Image</label>
        <input type="file" wire:model ='image'>
        @include('admin.error' ,['prop' => 'image'])
      </div>
      <div class="col-6 mb-0">
        <label for="dobBasic" class="form-label">Category</label>
        <select wire:model='category_id' type="text" id="dobBasic" class="form-control" >
            @if (count($categories) > 0)
                <option value="" disabled>Select One</option>
                @foreach ($categories as $category)
                    <option value = "{{ $category->id }}" wire:key="Category-{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            @endif
        </select>
        @include('admin.error' ,['prop' => 'category_id'])

      </div>

    @if ($image)
        <img width="100%" height="150px" src="{{ $image->temporaryUrl() }}">
    @endif

      <div class="col-12 mb-0">
        <label for="dobBasic" class="form-label">descreption</label>
        <textarea wire:model='descreption'  class="form-control" placeholder="descreption" ></textarea>
        @include('admin.error' ,['prop' => 'descreption'])
      </div>

    </x-update-modal>
