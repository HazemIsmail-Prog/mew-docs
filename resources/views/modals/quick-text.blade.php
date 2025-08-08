<flux:modal name="quick-text" class="md:w-96" x-on:close="$store.quickText.handleClose()">


    <div class="space-y-4">
        <div>
            <flux:heading size="lg">{{__('Quick Texts')}}</flux:heading>
            <!-- <flux:text class="mt-2">{{__('Add or search for quick texts')}}</flux:text> -->
        </div>
        <div class="flex items-center gap-2">
            <flux:textarea id="quick-text-search-textarea" rows="auto" resize="none" x-model="$store.quickText.search" placeholder="{{__('Search')}}"/>
            <flux:button icon="plus" variant="subtle" x-show="$store.quickText.filteredSortedQuickTexts.length === 0" x-on:click="$store.quickText.addQuickText()"/>
        </div>
    
        <div class="flex flex-col items-start justify-start gap-2">
            <template x-for="quickText in $store.quickText.filteredSortedQuickTexts" :key="quickText.id">
                <flux:badge
                    x-on:click="$store.quickText.selectQuickText(quickText.text)"
                    as="button"
                    size="lg"
                    class="w-full"
                >  
                    <span class="whitespace-pre-wrap text-start text-xs" x-text="quickText.text"></span>
                    <flux:spacer />
                    <flux:icon.x-mark
                        class="size-3 ms-2"
                        x-on:click.stop="$store.quickText.deleteQuickText(quickText.id)"
                    />        
                </flux:badge>
            </template>
        </div>
    </div>

</flux:modal>