<x-layouts.app :title="__('Tags')" >

    @include('modals.tag-form')

    <div 
        x-data
        x-init="
            $store.tags.getTags(1);
        "
        class="flex h-full w-full flex-1 flex-col gap-4 overflow-hidden"
    >

        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <flux:icon.shield-check variant="outline" size="sm" class="text-accent w-4 h-4" />
                <h1 class="text-xl font-bold">{{__('Tags')}}</h1>
                <flux:badge size="sm" x-text="$store.tags.total" variant="pill"></flux:badge>
            </div>
            <flux:button x-on:click="$store.tags.openFormModal(null)" variant="primary" icon="plus" size="sm">{{__('New')}}</flux:button> 
        </div>

        <div x-cloak x-show="$store.tags.gettingData" class="flex justify-center items-center h-full">
            <x-spinner class="w-10 h-10" />
        </div>

        <div x-cloak x-show="$store.tags.tags.length === 0 && !$store.tags.gettingData" class="flex justify-center items-center h-full">
            <flux:text>{{__('No tags found')}}</flux:text>
        </div>

        <div class="overflow-x-auto">
            <table x-cloak x-show="$store.tags.tags.length > 0 && !$store.tags.gettingData">
                <thead>
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="tag in $store.tags.tags" :key="tag.id">
                        <tr x-on:click="$store.tags.openFormModal(tag)" class="cursor-pointer" x-bind:class="$store.tags.selectedTag?.id === tag.id && 'selected'">
                            <td x-text="tag.name"></td>
                            <td>
                                <div class="flex items-center gap-2 justify-end">
                                    <flux:icon.trash variant="outline" size="sm" class="text-danger w-4 h-4" x-on:click.stop="$store.tags.deleteTag(tag)"/>           
                                </div>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <!-- load more -->
        <div class="flex justify-center items-center" x-cloak x-show="$store.tags.currentPage < $store.tags.lastPage && $store.tags.tags.length > 0">
            <flux:button type="submit" variant="primary" size="xs" x-on:click="$store.tags.loadMore()" x-bind:disabled="$store.tags.loadingMore">
                {{__('Load More')}}
            </flux:button>
        </div>
    </div>

</x-layouts.app>