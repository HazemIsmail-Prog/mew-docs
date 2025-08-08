<div 
    class="document-card"
    x-on:click="$store.documents.openFormModal(document, document.type)"
    x-bind:class="{
        'selected': $store.documents.selectedDocument?.id === document.id,
        'document-card-in': document.type === 'in',
        'document-card-out': document.type === 'out'
    }"
>
    <div class="flex justify-between items-center gap-2">
        <div class="flex-1">
            <span class="document-title" x-html="document.title"></span>
            <div class="flex flex-wrap gap-1 mt-1 select-none">
                <template x-for="contract in document.contract_ids" :key="contract">
                    <flux:badge variant="pill" size="sm">
                        <span x-text="$store.documents.getContractNameById(contract)"></span>
                    </flux:badge>
                </template>
            </div>
            <div class="stakeholder-name" x-text="document.stakeholder_name"></div>
        </div>
        <template x-if="document.incomplete_steps.length > 0">
            <div class="flex flex-col gap-1 items-end w-[100px] overflow-hidden">
                <template x-for="step in document.incomplete_steps" :key="step.id">
                    <flux:badge size="xs" size="sm" color="red">
                        <span class="text-[10px] whitespace-pre-wrap" x-text="step.action"></span>
                    </flux:badge>
                </template>
            </div>
        </template>
        <button 
            tabindex="-1"
            class="text-gray-400 hover:text-danger transition-colors" 
            x-on:click.stop="$store.documents.deleteDocument(document)"
        >
            <flux:icon.trash variant="outline" size="sm" class="w-4 h-4"/>
        </button>
    </div>
</div>