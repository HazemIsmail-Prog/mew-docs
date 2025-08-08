<x-layouts.app :title="__('Roles')" >

    @include('modals.role-form')

    <div 
        x-data
        x-init="
            $store.roles.permissions = @js($permissions);
            $store.roles.getRoles(1);
        "
        class="flex h-full w-full flex-1 flex-col gap-4 overflow-hidden"
    >

        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <flux:icon.shield-check variant="outline" size="sm" class="text-accent w-4 h-4" />
                <h1 class="text-xl font-bold">{{__('Roles')}}</h1>
                <flux:badge size="sm" x-text="$store.roles.total" variant="pill"></flux:badge>
            </div>
            <flux:button x-on:click="$store.roles.openFormModal(null)" variant="primary" icon="plus" size="sm">{{__('New')}}</flux:button> 
        </div>

        <div x-cloak x-show="$store.roles.gettingData" class="flex justify-center items-center h-full">
            <x-spinner class="w-10 h-10" />
        </div>

        <div x-cloak x-show="$store.roles.roles.length === 0 && !$store.roles.gettingData" class="flex justify-center items-center h-full">
            <flux:text>{{__('No roles found')}}</flux:text>
        </div>

        <div class="overflow-x-auto">
            <table x-cloak x-show="$store.roles.roles.length > 0 && !$store.roles.gettingData">
                <thead>
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="role in $store.roles.roles" :key="role.id">
                        <tr x-on:click="$store.roles.openFormModal(role)" class="cursor-pointer" x-bind:class="$store.roles.selectedRole?.id === role.id && 'selected'">
                            <td x-text="role.name"></td>
                            <td>
                                <div class="flex items-center gap-2 justify-end">
                                    <flux:icon.trash variant="outline" size="sm" class="text-danger w-4 h-4" x-on:click.stop="$store.roles.deleteRole(role)"/>           
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <!-- load more -->
        <div class="flex justify-center items-center" x-cloak x-show="$store.roles.currentPage < $store.roles.lastPage && $store.roles.roles.length > 0">
            <flux:button type="submit" variant="primary" size="xs" x-on:click="$store.roles.loadMore()" x-bind:disabled="$store.roles.loadingMore">
                {{__('Load More')}}
            </flux:button>
        </div>
    </div>

</x-layouts.app>