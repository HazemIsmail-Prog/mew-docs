<x-layouts.app :title="__('Permissions')" >

    @include('modals.permission-form')

    <div 
        x-data
        x-init="
            $store.permissions.getPermissions(1);
        "
        class="flex h-full w-full flex-1 flex-col gap-4 overflow-hidden"
    >

        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <flux:icon.shield-check variant="outline" size="sm" class="text-accent w-4 h-4" />
                <h1 class="text-xl font-bold">{{__('Permissions')}}</h1>
                <flux:badge size="sm" x-text="$store.permissions.total" variant="pill"></flux:badge>
            </div>
            <flux:button x-on:click="$store.permissions.openFormModal(null)" variant="primary" icon="plus" size="sm">{{__('New')}}</flux:button> 
        </div>

        <div x-cloak x-show="$store.permissions.gettingData" class="flex justify-center items-center h-full">
            <x-spinner class="w-10 h-10" />
        </div>

        <div x-cloak x-show="$store.permissions.permissions.length === 0 && !$store.permissions.gettingData" class="flex justify-center items-center h-full">
            <flux:text>{{__('No permissions found')}}</flux:text>
        </div>

        <div class="overflow-x-auto">
            <table x-cloak x-show="$store.permissions.permissions.length > 0 && !$store.permissions.gettingData">
                <thead>
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Description')}}</th>                
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="permission in $store.permissions.permissions" :key="permission.id">
                        <tr x-on:click="$store.permissions.openFormModal(permission)" class="cursor-pointer" x-bind:class="$store.permissions.selectedPermission?.id === permission.id && 'selected'">
                            <td x-text="permission.name"></td>
                            <td x-text="permission.description"></td>
                            <td>
                                <div class="flex items-center gap-2 justify-end">
                                    <flux:icon.trash variant="outline" size="sm" class="text-danger w-4 h-4" x-on:click.stop="$store.permissions.deletePermission(permission)"/>           
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <!-- load more -->
        <div class="flex justify-center items-center" x-cloak x-show="$store.permissions.currentPage < $store.permissions.lastPage && $store.permissions.permissions.length > 0">
            <flux:button type="submit" variant="primary" size="xs" x-on:click="$store.permissions.loadMore()" x-bind:disabled="$store.permissions.loadingMore">
                {{__('Load More')}}
            </flux:button>
        </div>
    </div>

</x-layouts.app>