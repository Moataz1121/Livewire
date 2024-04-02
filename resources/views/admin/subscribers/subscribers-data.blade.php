<div>
    <div class="mb-4">
        <input wire:model.live='search' class="form-control w-25" type="text" placeholder="search">
    </div>
    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
        <table class="table">
            <thead>
              <tr>
                <th width="90%">Project</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($data as $item)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->email }}</strong></td>

                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">

                          <a class="dropdown-item" href="#" wire:click.prevent ="$dispatch('deleteSkills' ,{ id: {{ $item->id }} } )"
                            ><i class="bx bx-trash me-1"></i> Delete</a
                          >

                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
          {{ $data->links() }}
          @else
          <span class="text-danger">Not Found</span>
        @endif


      </div> </div>
