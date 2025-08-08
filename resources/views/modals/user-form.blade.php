<flux:modal name="user-form" variant="flyout" class="w-dvw md:w-96" x-on:close="$store.users.closeFormModal()">
    <form class="space-y-4" x-on:submit.prevent="$store.users.saveUser()">
        <div>
            <flux:heading size="lg" x-text="$store.users.form.id ? '{{__('Edit User')}}' : '{{__('Create User')}}'"></flux:heading>
            <flux:text class="mt-2" x-text="$store.users.form.id ? $store.users.selectedUser.name : '{{__('Create a new user')}}'"></flux:text>
        </div>

        <div>
            <flux:label for="name">{{__('Name')}}</flux:label>
            <flux:input x-model="$store.users.form.name" />
            <flux:text x-show="$store.users.errors.name" class="text-red-500" x-text="$store.users.errors.name"></flux:text>
        </div>

        <div>
            <flux:label for="email">{{__('Email')}}</flux:label>
            <flux:input dir="ltr" x-model="$store.users.form.email" type="email" />
            <flux:text x-show="$store.users.errors.email" class="text-red-500" x-text="$store.users.errors.email"></flux:text>
        </div>

        <div>
            <flux:label for="username">{{__('Username')}}</flux:label>
            <flux:input dir="ltr" x-model="$store.users.form.username" />
            <flux:text x-show="$store.users.errors.username" class="text-red-500" x-text="$store.users.errors.username"></flux:text>
        </div>

        <div>
            <flux:label for="password">{{__('Password')}}</flux:label>
            <flux:input x-model="$store.users.form.password" type="password" />
            <flux:text x-show="$store.users.errors.password" class="text-red-500" x-text="$store.users.errors.password"></flux:text>
        </div>

        <template x-if="$store.users.modalVisible">
            <div>
                <flux:label for="contract_ids">{{__('Contracts')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return $store.users.contracts.map(contract => ({
                            id: contract.id,
                            name: contract.name
                        }));
                        },
                        selectedItemIds:$store.users.form.contract_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.users.form.contract_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->

                <flux:text x-show="$store.users.errors.to_id" class="text-red-500" x-text="$store.users.errors.to_id"></flux:text>
                
                <template x-if="$store.users.form.contract_ids.length > 0">
                    <div class="flex flex-wrap gap-1 mt-1 select-none">
                        <template x-for="contract in $store.users.form.contract_ids" :key="contract">
                            <flux:badge variant="pill" size="sm">
                                <span x-text="$store.users.getContractNameById(contract)"></span> <flux:badge.close tabindex="-1" @click="$store.users.removeContract(contract)" class="cursor-pointer -me-3" />
                            </flux:badge>
                        </template>
                    </div>
                </template>
            </div>
        </template>

        <div>
            <flux:checkbox.group label="{{__('Roles')}}">
                <template x-for="role in $store.users.roles" :key="role.id">
                    <flux:field variant="inline">
                        <flux:checkbox x-on:change="$store.users.toggleRole(role.id)" x-bind:checked="$store.users.form.role_ids?.includes(role.id) ?? false"/>
                        <flux:label x-text="role.name"></flux:label>
                    </flux:field>
                </template>
            </flux:checkbox.group>
            <flux:text x-show="$store.users.errors.role_ids" class="text-red-500" x-text="$store.users.errors.role_ids"></flux:text>
        </div>

        <div>
            <flux:checkbox.group label="{{__('Permissions')}}">
                <template x-for="permission in $store.users.permissions" :key="permission.id">
                    <flux:field variant="inline">
                        <flux:checkbox x-on:change="$store.users.togglePermission(permission.id)" x-bind:checked="$store.users.form.permission_ids?.includes(permission.id) ?? false"/>
                        <flux:label x-text="permission.description"></flux:label>
                    </flux:field>
                </template>
            </flux:checkbox.group>
            <flux:text x-show="$store.users.errors.permission_ids" class="text-red-500" x-text="$store.users.errors.permission_ids"></flux:text>
        </div>

        <div class="flex justify-end">
            <flux:button type="submit" size="sm" variant="primary" x-bind:disabled="$store.users.saving">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>