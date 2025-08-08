<flux:modal name="contract-form" variant="flyout" class="w-dvw md:w-96" x-on:close="$store.contracts.closeFormModal()">
    <form class="space-y-4" x-on:submit.prevent="$store.contracts.saveContract()">
        <div>
            <flux:heading size="lg" x-text="$store.contracts.form.id ? '{{__('Edit Contract')}}' : '{{__('Create Contract')}}'"></flux:heading>
            <flux:text class="mt-2" x-text="$store.contracts.form.id ? $store.contracts.selectedContract.name : '{{__('Create a new contract')}}'"></flux:text>
        </div>

        <div>
            <flux:label for="name">{{__('Name')}}</flux:label>
            <flux:input x-model="$store.contracts.form.name" />
            <flux:text x-show="$store.contracts.errors.name" class="text-red-500" x-text="$store.contracts.errors.name"></flux:text>
        </div>


        <div class="flex justify-end">
            <flux:button type="submit" size="sm" variant="primary" x-bind:disabled="$store.contracts.saving">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>