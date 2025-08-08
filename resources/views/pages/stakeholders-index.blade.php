<x-layouts.app :title="__('Stakeholders')" >

    @include('modals.stakeholder-form')

    <div 
        x-data
        x-init="
            $store.stakeholders.getStakeholders(1);
        "
        class="flex h-full w-full flex-1 flex-col gap-4 overflow-hidden"
    >

        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <flux:icon.shield-check variant="outline" size="sm" class="text-accent w-4 h-4" />
                <h1 class="text-xl font-bold">{{__('Stakeholders')}}</h1>
                <flux:badge size="sm" x-text="$store.stakeholders.total" variant="pill"></flux:badge>
            </div>
            <flux:button x-on:click="$store.stakeholders.openFormModal(null)" variant="primary" icon="plus" size="sm">{{__('New')}}</flux:button> 
        </div>

        <div x-cloak x-show="$store.stakeholders.gettingData" class="flex justify-center items-center h-full">
            <x-spinner class="w-10 h-10" />
        </div>

        <div x-cloak x-show="$store.stakeholders.stakeholders.length === 0 && !$store.stakeholders.gettingData" class="flex justify-center items-center h-full">
            <flux:text>{{__('No stakeholders found')}}</flux:text>
        </div>

        <div class="overflow-x-auto">
            <table x-cloak x-show="$store.stakeholders.stakeholders.length > 0 && !$store.stakeholders.gettingData">
                <thead>
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="stakeholder in $store.stakeholders.stakeholders" :key="stakeholder.id">
                        <tr x-on:click="$store.stakeholders.openFormModal(stakeholder)" class="cursor-pointer" x-bind:class="$store.stakeholders.selectedStakeholder?.id === stakeholder.id && 'selected'">
                            <td x-text="stakeholder.name"></td>
                            <td>
                                <div class="flex items-center gap-2 justify-end">
                                    <flux:icon.trash variant="outline" size="sm" class="text-danger w-4 h-4" x-on:click.stop="$store.stakeholders.deleteStakeholder(stakeholder)"/>           
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <!-- load more -->
        <div class="flex justify-center items-center" x-cloak x-show="$store.stakeholders.currentPage < $store.stakeholders.lastPage && $store.stakeholders.stakeholders.length > 0">
            <flux:button type="submit" variant="primary" size="xs" x-on:click="$store.stakeholders.loadMore()" x-bind:disabled="$store.stakeholders.loadingMore">
                {{__('Load More')}}
            </flux:button>
        </div>
    </div>

</x-layouts.app>