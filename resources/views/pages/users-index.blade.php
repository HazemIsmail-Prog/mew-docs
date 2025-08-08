<x-layouts.app :title="__('Users')" >

    @include('modals.user-form')

    <div 
        x-data 
        x-init="
            $store.users.roles = @js($roles);
            $store.users.permissions = @js($permissions);
            $store.users.contracts = @js($contracts);
            $store.users.getUsers(1);
        " 
        class="flex h-full w-full flex-1 flex-col gap-4 overflow-hidden">

        <div class="flex justify-between items-center">
            <div class="flex items-baseline gap-2">
                <flux:icon.users variant="outline" size="sm" class="text-accent w-4 h-4" />
                <h1 class="text-xl font-bold">{{__('Users')}}</h1>
                <flux:badge size="sm" x-text="$store.users.total" variant="pill"></flux:badge>
            </div>
            <flux:button x-on:click="$store.users.openFormModal(null)" variant="primary" icon="plus" size="sm">{{__('New')}}</flux:button> 
        </div>

        <div x-cloak x-show="$store.users.gettingData" class="flex justify-center items-center h-full">
            <x-spinner class="w-10 h-10" />
        </div>

        <div x-cloak x-show="$store.users.users.length === 0 && !$store.users.gettingData" class="flex justify-center items-center h-full">
            <flux:text>{{__('No users found')}}</flux:text>
        </div>

        <div class="overflow-x-auto">
            <table x-cloak x-show="$store.users.users.length > 0 && !$store.users.gettingData" class="w-full">
                <thead>
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Username')}}</th>
                        <th>{{__('Status')}}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="user in $store.users.users" :key="user.id">
                        <tr x-on:click="$store.users.openFormModal(user)" class="cursor-pointer" x-bind:class="$store.users.selectedUser?.id === user.id && 'selected'">
                            <td x-text="user.name"></td>
                            <td x-text="user.email"></td>
                            <td x-text="user.username"></td>
                            <td>
                                <flux:switch x-bind:checked="user.is_active" x-on:click.stop="" x-on:change="$store.users.updateUserStatus(user, $event)" />
                            </td>
                            <td>
                                <div class="flex items-center gap-2 justify-end">
                                    <flux:icon.trash variant="outline" size="sm" class="text-danger w-4 h-4" x-on:click.stop="$store.users.deleteUser(user)"/>
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <!-- load more -->
        <div class="flex justify-center items-center" x-cloak x-show="$store.users.currentPage < $store.users.lastPage && $store.users.users.length > 0">
            <flux:button type="submit" variant="primary" size="xs" x-on:click="$store.users.loadMore()" x-bind:disabled="$store.users.loadingMore">
                {{__('Load More')}}
            </flux:button>
        </div>
    </div>

</x-layouts.app>