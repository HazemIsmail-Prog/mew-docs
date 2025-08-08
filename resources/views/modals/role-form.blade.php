<flux:modal name="role-form" variant="flyout" class="w-dvw md:w-96" x-on:close="$store.roles.closeFormModal()">
    <form class="space-y-4" x-on:submit.prevent="$store.roles.saveRole()">
        <div>
            <flux:heading size="lg" x-text="$store.roles.form.id ? '{{__('Edit Role')}}' : '{{__('Create Role')}}'"></flux:heading>
            <flux:text class="mt-2" x-text="$store.roles.form.id ? $store.roles.selectedRole.name : '{{__('Create a new role')}}'"></flux:text>
        </div>

        <div>
            <flux:label for="name">{{__('Name')}}</flux:label>
            <flux:input x-model="$store.roles.form.name" />
            <flux:text x-show="$store.roles.errors.name" class="text-red-500" x-text="$store.roles.errors.name"></flux:text>
        </div>

        <div>
            <flux:checkbox.group label="{{__('Permissions')}}">
                <template x-for="permission in $store.roles.permissions" :key="permission.id">
                    <flux:field variant="inline">
                        <flux:checkbox x-on:change="$store.roles.togglePermission(permission.id)" x-bind:checked="$store.roles.form.permission_ids?.includes(permission.id) ?? false"/>
                        <flux:label x-text="permission.description"></flux:label>
                    </flux:field>
                </template>
            </flux:checkbox.group>
            <flux:text x-show="$store.roles.errors.permission_ids" class="text-red-500" x-text="$store.roles.errors.permission_ids"></flux:text>
        </div>


        <div class="flex justify-end">
            <flux:button type="submit" size="sm" variant="primary" x-bind:disabled="$store.roles.saving">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>