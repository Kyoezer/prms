<div class="bg-gray-100 px-4 pt-2 pb-4 my-4 rounded shadow">
  <div class="flex flex-col md:flex-row justify-between gap-4">

       <!-- Parliament -->
    <div class="mt-2 w-full">
      <select name="parliament_id" class="form-control" wire:model.lazy="parliament_id" required>
        <option value=''>Select Parliament</option>
        @foreach ($parliaments as $item)
          <option value={{$item->id}}>{!! $item->name !!}</option>
        @endforeach  
      </select>
      <x-jet-input-error for="parliament_id" class="mt-2" />
    </div>

        <!-- Session -->
    <div class="mt-2 w-full">
      <select name="session_id" class="form-control" wire:model.lazy="session_id" required>
        <option value=''>Select Session</option>
        @foreach ($parSessions as $item)
          <option value={{$item->id}}>{!! $item->name !!}</option>
        @endforeach  
      </select>
       <x-jet-input-error for="session_id" class="mt-2" />
    </div>


       <!-- Categories -->
    <div class="mt-2 w-full">
      <select name="category_id" class="form-control" wire:model.lazy="category_id" required>
        <option value=''>Select Category</option>
        @foreach ($categories as $item)
          <option value={{$item->id}}>{!! $item->name !!}</option>
        @endforeach  
      </select>
      <x-jet-input-error for="category_id" class="mt-2" />
    </div>

     <!-- Search Key -->
    <div class="mt-2 w-full">
        <x-jet-input type="text" class="mt-1 form-control w-full" placeholder="search key" wire:model="search_key" />
       <x-jet-input-error for="search_key" class="mt-2" />
    </div>

    <div class="mt-3 w-72">
    <x-jet-button class="py-2 rounded bg-blue-400 hover:bg-blue-300 hover:text-gray-700" wire:click="searchArchives" wire:loading.attr="disabled">
       <i class="fa fa-search fa-lg"></i> {{ __('Search') }}
    </x-jet-button>
    </div>
  </div>
</div>