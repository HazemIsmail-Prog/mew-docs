<x-layouts.app :title="__('Contracts')" >

    @include('modals.contract-form')

    <div 
        x-data
        x-init="
            $store.contracts.getContracts(1);
        "
        class="flex h-full w-full flex-1 flex-col gap-4 overflow-hidden"
    >

        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <flux:icon.shield-check variant="outline" size="sm" class="text-accent w-4 h-4" />
                <h1 class="text-xl font-bold">{{__('Contracts')}}</h1>
                <flux:badge size="sm" x-text="$store.contracts.total" variant="pill"></flux:badge>
            </div>
            <flux:button x-on:click="$store.contracts.openFormModal(null)" variant="primary" icon="plus" size="sm">{{__('New')}}</flux:button> 
        </div>

        <div x-cloak x-show="$store.contracts.gettingData" class="flex justify-center items-center h-full">
            <x-spinner class="w-10 h-10" />
        </div>

        <div x-cloak x-show="$store.contracts.contracts.length === 0 && !$store.contracts.gettingData" class="flex justify-center items-center h-full">
            <flux:text>{{__('No contracts found')}}</flux:text>
        </div>

        <div class="overflow-x-auto">
            <table x-cloak x-show="$store.contracts.contracts.length > 0 && !$store.contracts.gettingData">
                <thead>
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="contract in $store.contracts.contracts" :key="contract.id">
                        <tr x-on:click="$store.contracts.openFormModal(contract)" class="cursor-pointer" x-bind:class="$store.contracts.selectedContract?.id === contract.id && 'selected'">
                            <td x-text="contract.name"></td>
                            <td>
                                <div class="flex items-center gap-2 justify-end">
                                    <flux:icon.trash variant="outline" size="sm" class="text-danger w-4 h-4" x-on:click.stop="$store.contracts.deleteContract(contract)"/>           
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <!-- load more -->
        <div class="flex justify-center items-center" x-cloak x-show="$store.contracts.currentPage < $store.contracts.lastPage && $store.contracts.contracts.length > 0">
            <flux:button type="submit" variant="primary" size="xs" x-on:click="$store.contracts.loadMore()" x-bind:disabled="$store.contracts.loadingMore">
                {{__('Load More')}}
            </flux:button>
        </div>
    </div>

</x-layouts.app>