<flux:modal name="permission-form" variant="flyout" class="w-dvw md:w-96" x-on:close="$store.permissions.closeFormModal()">
    <form class="space-y-4" x-on:submit.prevent="$store.permissions.savePermission()">
        <div>
            <flux:heading size="lg" x-text="$store.permissions.form.id ? '{{__('Edit Permission')}}' : '{{__('Create Permission')}}'"></flux:heading>
            <flux:text class="mt-2" x-text="$store.permissions.form.id ? $store.permissions.selectedPermission.name : '{{__('Create a new permission')}}'"></flux:text>
        </div>

        <div>
            <flux:label for="name">{{__('Name')}}</flux:label>
            <flux:input x-model="$store.permissions.form.name" />
            <flux:text x-show="$store.permissions.errors.name" class="text-red-500" x-text="$store.permissions.errors.name"></flux:text>
        </div>

        <div>
            <flux:label for="description">{{__('Description')}}</flux:label>
            <flux:input x-model="$store.permissions.form.description" />
            <flux:text x-show="$store.permissions.errors.description" class="text-red-500" x-text="$store.permissions.errors.description"></flux:text>
        </div>


        <div class="flex justify-end">
            <flux:button type="submit" size="sm" variant="primary" x-bind:disabled="$store.permissions.saving">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>