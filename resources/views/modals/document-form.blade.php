<flux:modal name="document-form" variant="flyout" class="w-dvw md:w-1/3 !p-4" x-on:close="$store.documents.closeFormModal()">
    <form class="space-y-4" x-on:submit.prevent="$store.documents.saveDocument()">
        <div>
            <flux:heading size="lg" x-text="$store.documents.form.id ? '{{__('Edit Document')}}' : '{{__('Create Document')}}'"></flux:heading>
        </div>

        @include('includes.steps-index')
        @include('includes.attachments-index')

        <template x-if="$store.documents.form.type">
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
                        selectedItemIds:$store.documents.form.contract_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.form.contract_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->

                <flux:text x-show="$store.documents.errors.contract_ids" class="text-red-500" x-text="$store.documents.errors.contract_ids"></flux:text>
                
                <template x-if="$store.documents.form.contract_ids.length > 0">
                    <div class="flex flex-wrap gap-1 mt-1 select-none">
                        <template x-for="contract in $store.documents.form.contract_ids" :key="contract">
                            <flux:badge variant="pill" size="sm">
                                <span x-text="$store.documents.getContractNameById(contract)"></span> <flux:badge.close tabindex="-1" @click="$store.documents.removeContract(contract)" class="cursor-pointer -me-3" />
                            </flux:badge>
                        </template>
                    </div>
                </template>
            </div>
        </template>

        <template x-if="$store.documents.form.type === 'in'">
            <div>
                <flux:label for="from_id">{{__('From')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return $store.documents.stakeholders.map(stakeholder => ({
                            id: stakeholder.id,
                            name: stakeholder.name
                        }));
                        },
                        selectedItemId:$store.documents.form.from_id,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemId"
                    x-modelable="$store.documents.form.from_id"
                >
                    <x-single-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->

                <flux:text x-show="$store.documents.errors.from_id" class="text-red-500" x-text="$store.documents.errors.from_id"></flux:text>
            </div>
        </template>

        <template x-if="$store.documents.form.type === 'out'">
            <div>
                <flux:label for="to_id">{{__('To')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return $store.documents.stakeholders.map(stakeholder => ({
                            id: stakeholder.id,
                            name: stakeholder.name
                        }));
                        },
                        selectedItemId:$store.documents.form.to_id,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemId"
                    x-modelable="$store.documents.form.to_id"
                >
                    <x-single-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->

                <flux:text x-show="$store.documents.errors.to_id" class="text-red-500" x-text="$store.documents.errors.to_id"></flux:text>
            </div>
        </template>

        <template x-if="$store.documents.form.type">
            <div>
                <flux:label for="tags">{{__('Tags')}}</flux:label>
                <!-- start stakeholder searchable select -->
                <div 
                    x-data="{
                        get items(){
                            return $store.documents.tags.map(tag => ({
                            id: tag.id,
                            name: tag.name
                        }));
                        },
                        selectedItemIds:$store.documents.form.tag_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.form.tag_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->

                <flux:text x-show="$store.documents.errors.tag_ids" class="text-red-500" x-text="$store.documents.errors.tag_ids"></flux:text>
                
                <template x-if="$store.documents.form.tag_ids.length > 0">
                    <div class="flex flex-wrap gap-1 mt-1 select-none">
                    <template x-for="tag in $store.documents.form.tag_ids" :key="tag">
                        <flux:badge variant="pill" size="sm">
                            <span x-text="$store.documents.getTagNameById(tag)"></span> <flux:badge.close tabindex="-1" @click="$store.documents.removeTag(tag)" class="cursor-pointer -me-3" />
                        </flux:badge>
                        </template>
                    </div>
                </template>
            </div>
        </template>

        <template x-if="$store.documents.form.type">
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
                        selectedItemIds:$store.documents.form.follow_ids,
                        placeholder: '{{ __('') }}'
                    }"
                    x-model="selectedItemIds"
                    x-modelable="$store.documents.form.follow_ids"
                >
                    <x-multipule-searchable-select />
                </div>
                <!-- end stakeholder searchable select -->

                <flux:text x-show="$store.documents.errors.follow_ids" class="text-red-500" x-text="$store.documents.errors.follow_ids"></flux:text>
                
                <template x-if="$store.documents.form.follow_ids.length > 0">
                    <div class="flex flex-wrap gap-1 mt-1 select-none">
                    <template x-for="follow in $store.documents.form.follow_ids" :key="follow">
                        <flux:badge variant="pill" size="sm">
                            <span x-text="$store.documents.getUserNameById(follow)"></span> <flux:badge.close tabindex="-1" @click="$store.documents.removeFollow(follow)" class="cursor-pointer -me-3" />
                        </flux:badge>
                        </template>
                    </div>
                </template>
            </div>
        </template>

        <div>
            <flux:label for="title">{{__('Title')}}</flux:label>
            <flux:textarea resize="none" rows="auto" x-model="$store.documents.form.title" />
            <flux:text x-show="$store.documents.errors.title" class="text-red-500" x-text="$store.documents.errors.title"></flux:text>
        </div>

        <div>
            <flux:label for="content">{{__('Content')}}</flux:label>
            <flux:textarea resize="none" rows="auto" x-model="$store.documents.form.content" />
            <flux:text x-show="$store.documents.errors.content" class="text-red-500" x-text="$store.documents.errors.content"></flux:text>
        </div>

        <div>
            <flux:label for="notes">{{__('Notes')}}</flux:label>
            <flux:textarea resize="none" rows="auto" x-model="$store.documents.form.notes" />
            <flux:text x-show="$store.documents.errors.notes" class="text-red-500" x-text="$store.documents.errors.notes"></flux:text>
        </div>

        <div class="flex justify-end">
            <flux:button type="submit" size="sm" variant="primary" x-bind:disabled="$store.documents.saving">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>