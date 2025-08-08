<x-layouts.app :title="__('Documents')" >

    @include('modals.quick-text')
    @include('modals.document-form')

    <div 
        x-data
        x-init="
            $store.documents.authUserStakeholderId = {{ auth()->user()->stakeholder_id }};
            $store.documents.stakeholders = @js($stakeholders);
            $store.documents.tags = @js($tags);
            $store.documents.users = @js($users);
            $store.documents.contracts = @js($contracts);
            $watch('$store.documents.filters', () => {
                $store.documents.getDocuments(1);
            });
        "
        class="flex h-full w-full flex-1 flex-col gap-4 overflow-hidden"
    >

        <!-- header -->
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-2">
                <flux:icon.shield-check variant="outline" size="sm" class="text-accent w-4 h-4" />
                <h1 class="text-xl font-bold">{{__('Documents')}}</h1>
                <flux:badge size="sm" x-text="$store.documents.total" variant="pill"></flux:badge>
            </div>
            <div>
                <flux:button x-on:click="$store.documents.openFormModal(null, 'out')" variant="danger" icon="plus" size="sm">{{__('Outbox')}}</flux:button>
                <flux:button x-on:click="$store.documents.openFormModal(null, 'in')" variant="primary" icon="plus" size="sm">{{__('Inbox')}}</flux:button>
            </div>
        </div>

        <!-- filters row -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-8 gap-2">

            <!-- search -->
            <div>
                <flux:label for="search">{{__('Search')}}</flux:label>
                <flux:input type="text" x-model.debounce.500ms="$store.documents.filters.search" />
            </div>

            <!-- contracts -->
            <div>
                <flux:label for="contract_ids">{{__('Contracts')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return $store.documents.contracts.map(contract => ({
                            id: contract.id,
                            name: contract.name
                        }));
                        },
                        selectedItemIds:$store.documents.filters.contract_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.filters.contract_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->

                
                <template x-if="$store.documents.filters.contract_ids.length > 0">
                    <div class="flex flex-wrap gap-1 mt-1 select-none">
                        <template x-for="contract in $store.documents.filters.contract_ids" :key="contract">
                            <flux:badge size="sm">
                                <span class="text-xs whitespace-pre-wrap" x-text="$store.documents.getContractNameById(contract)"></span> <flux:badge.close tabindex="-1" @click="$store.documents.removeContract(contract)" class="cursor-pointer -me-3" />
                            </flux:badge>
                        </template>
                    </div>
                </template>
            </div>

            <!-- stakeholders -->
            <div>
                <flux:label for="stakeholder_ids">{{__('Stakeholders')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return $store.documents.stakeholders.map(stakeholder => ({
                            id: stakeholder.id,
                            name: stakeholder.name
                        }));
                        },
                        selectedItemIds:$store.documents.filters.stakeholder_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.filters.stakeholder_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->
                
                <template x-if="$store.documents.filters.stakeholder_ids.length > 0">
                    <div class="flex flex-wrap gap-1 mt-1 select-none">
                        <template x-for="stakeholder in $store.documents.filters.stakeholder_ids" :key="stakeholder">
                            <flux:badge size="sm">
                                <span class="text-xs whitespace-pre-wrap" x-text="$store.documents.getStakeholderNameById(stakeholder)"></span> <flux:badge.close tabindex="-1" @click="$store.documents.removeStakeholder(stakeholder)" class="cursor-pointer -me-3" />
                            </flux:badge>
                        </template>
                    </div>
                </template>
            </div>

            <!-- follow -->
            <div>
                <flux:label for="follow_ids">{{__('Followers')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return $store.documents.users.map(user => ({
                            id: user.id,
                            name: user.name
                        }));
                        },
                        selectedItemIds:$store.documents.filters.follow_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.filters.follow_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->
                
                <template x-if="$store.documents.filters.follow_ids.length > 0">
                    <div class="flex flex-wrap gap-1 mt-1 select-none">
                        <template x-for="follow in $store.documents.filters.follow_ids" :key="follow">
                            <flux:badge size="sm">
                                <span class="text-xs whitespace-pre-wrap" x-text="$store.documents.getUserNameById(follow)"></span> <flux:badge.close tabindex="-1" @click="$store.documents.removeFollow(follow)" class="cursor-pointer -me-3" />
                            </flux:badge>
                        </template>
                    </div>
                </template>
            </div>

            <!-- tags -->
            <div>
                <flux:label for="tag_ids">{{__('Tags')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return $store.documents.tags.map(tag => ({
                            id: tag.id,
                            name: tag.name
                        }));
                        },
                        selectedItemIds:$store.documents.filters.tag_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.filters.tag_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->
                
                <template x-if="$store.documents.filters.tag_ids.length > 0">
                    <div class="flex flex-wrap gap-1 mt-1 select-none">
                        <template x-for="tag in $store.documents.filters.tag_ids" :key="tag">
                            <flux:badge size="sm">
                                <span class="text-xs whitespace-pre-wrap" x-text="$store.documents.getTagNameById(tag)"></span> <flux:badge.close tabindex="-1" @click="$store.documents.removeTag(tag)" class="cursor-pointer -me-3" />
                            </flux:badge>
                        </template>
                    </div>
                </template>
            </div>

            <!-- types -->
            <div>
                <flux:label for="type_ids">{{__('Type')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return [{id: 'in', name: '{{__('Inbox')}}'}, {id: 'out', name: '{{__('Outbox')}}'}];
                        },
                        selectedItemIds:$store.documents.filters.type_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.filters.type_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->                
            </div>

            <!-- status -->
            <div>
                <flux:label for="status_ids">{{__('Status')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return [{id: 'completed', name: '{{__('Completed')}}'}, {id: 'pending', name: '{{__('Pending')}}'}];
                        },
                        selectedItemIds:$store.documents.filters.status_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.filters.status_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->
            </div>

            <!-- clear filters button -->
            <div>
                <flux:label for="search"></flux:label>
                <flux:button variant="primary" size="sm" class="w-full" x-on:click="$store.documents.clearFilters()">{{__('Clear')}}</flux:button>
            </div>

        </div>

        <!-- loading -->
        <div x-cloak x-show="$store.documents.gettingData" class="flex justify-center items-center h-full">
            <x-spinner class="w-10 h-10" />
        </div>

        <!-- no documents -->
        <div x-cloak x-show="$store.documents.documents.length === 0 && !$store.documents.gettingData" class="flex justify-center items-center h-full">
            <flux:text>{{__('No documents found')}}</flux:text>
        </div>

        <!-- documents list -->
        <div class="flex flex-col gap-2" x-cloak x-show="$store.documents.documents.length > 0 && !$store.documents.gettingData">
            <template x-for="document in $store.documents.documents" :key="document.id">
                @include('includes.documents-card')
            </template>
        </div>

        <!-- load more button -->
        <div class="flex justify-center items-center" x-cloak x-show="$store.documents.currentPage < $store.documents.lastPage && $store.documents.documents.length > 0">
            <flux:button type="submit" variant="primary" size="xs" x-on:click="$store.documents.loadMore()" x-bind:disabled="$store.documents.loadingMore">
                {{__('Load More')}}
            </flux:button>
        </div>
    </div>

</x-layouts.app>