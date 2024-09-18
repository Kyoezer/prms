 <!-- Show add/Edit Modal -->
      <x-jet-dialog-modal wire:model="confirmItemAdd">
          <x-slot name="title">
              <span class="font-bold uppercase"> {{ isset( $this->user->id) ? 'EDIT SESSION' : 'ADD NEW SESSION' }}</span>
          </x-slot>

          <x-slot name="content">
               <!-- parliamentsession Name -->
              <div class="mt-4">
                  <div class="col-span-6 sm:col-span-4">
                      <x-jet-label for="name" value="{{ __('Session Name') }}" />
                      <x-jet-input type="text" class="mt-1 block w-full" wire:model.lazy="parliamentsession.name" />
                      <x-jet-input-error for="parliamentsession.name" class="mt-2" />
                  </div>
              </div>

                <div class="mt-4">
                  <div class="col-span-6 sm:col-span-4">
                      <x-jet-label for="shortCode" value="{{ __('Short Description') }}" />
                      <x-jet-input type="text" class="mt-1 block w-full" wire:model.lazy="shortCode" />
                      <x-jet-input-error for="shortCode" class="mt-2" />
                  </div>
              </div>
          </x-slot>
  
          <x-slot name="footer">
              <x-jet-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                  {{ __('Cancel') }}
              </x-jet-secondary-button>

              <x-jet-button class="ml-2 bg-blue-400 hover:bg-blue-300 hover:text-gray-700" wire:click="store" wire:loading.attr="disabled">
                  {{ __('Save') }}
              </x-jet-button>
          </x-slot>
      </x-jet-dialog-modal>