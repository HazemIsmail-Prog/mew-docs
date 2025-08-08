<div x-data="searchableSelectComponent"  @click.away="open = false">
    <div class="relative">

        <flux:input
            x-model="search" 
            @focus="open = true"
            @keydown.escape.stop="open = false"
            @keydown.tab.stop="open = false"
            @keydown.arrow-up.prevent="navigateUp"
            @keydown.arrow-down.prevent="navigateDown"
            @keydown.enter.prevent="selectHighlighted"
            @blur="search = items.find(a => a.id == selectedItemId)?.name"
            @input="handleSearch" 
            x-bind:placeholder="placeholder" 
            x-ref="searchInput"
            x-bind:title="selectedItemId ? items.find(a => a.id == selectedItemId)?.name : ''"
        >
            <x-slot name="iconTrailing">
                <flux:button tabindex="-1" x-show="selectedItemId" x-cloak @click="clearSelection" size="sm" variant="subtle" icon="x-mark" class="-me-3" />
            </x-slot>
        </flux:input>


        <div 
            tabindex="-1"
            x-show="open"
            x-anchor.offset.5="$refs.searchInput"
            class="absolute hidden-scrollbar text-xs z-50 w-full bg-white dark:bg-gray-800 rounded-md shadow-lg border border-gray-200 dark:border-gray-700 max-h-60 overflow-y-auto"
        >
            <div class="py-1" x-ref="optionsContainer">
                <template x-for="(option, index) in filteredItems" :key="option.id">
                    <div
                        @click="handleSelect(option)"
                        :class="{
                            'bg-accent/50 !text-accent-foreground': selectedItemId == option.id,
                            'bg-accent/10': highlightedIndex === index
                        }"
                        class="px-4 py-2 cursor-pointer text-gray-900 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 text-start"
                        :id="'option-' + index"
                        x-text="option.name"
                    ></div>
                </template>
            </div>
        </div>
    </div>
</div>
<script>
    function searchableSelectComponent() {
        return {
            open: false,
            search: '',
            filteredItems: [],
            highlightedIndex: -1,

            init() {
                this.search = this.items.find(a => a.id == this.selectedItemId)?.name;
                this.$watch('open', () => {
                    this.filteredItems = this.items;
                    this.highlightedIndex = -1;
                });
                
                // Watch for changes in items array
                this.$watch('items', () => {
                    this.filteredItems = this.items;
                    this.highlightedIndex = -1;
                    
                    // Check if currently selected item still exists in the new items array
                    if (this.selectedItemId && !this.items.find(item => item.id == this.selectedItemId)) {
                        this.selectedItemId = null;
                        this.search = '';
                    } else if (this.selectedItemId) {
                        this.search = this.items.find(a => a.id == this.selectedItemId)?.name || '';
                    }
                });
            },
            
            handleSearch() {
                if (!this.search) {
                    this.filteredItems = this.items;
                }
                this.filteredItems = this.items;
                this.filteredItems = this.filteredItems.filter(option => 
                    option.name.toLowerCase().includes(this.search.toLowerCase())
                );
                this.highlightedIndex = -1;
            },

            navigateUp() {
                if (!this.open) {
                    this.open = true;
                    return;
                }
                this.highlightedIndex = this.highlightedIndex > 0 ? this.highlightedIndex - 1 : this.filteredItems.length - 1;
                this.scrollToHighlighted();
            },

            navigateDown() {
                if (!this.open) {
                    this.open = true;
                    return;
                }
                this.highlightedIndex = this.highlightedIndex < this.filteredItems.length - 1 ? this.highlightedIndex + 1 : 0;
                this.scrollToHighlighted();
            },

            scrollToHighlighted() {
                this.$nextTick(() => {
                    const highlighted = this.$refs.optionsContainer.querySelector(`#option-${this.highlightedIndex}`);
                    if (highlighted) {
                        highlighted.scrollIntoView({ block: 'nearest' });
                    }
                });
            },

            selectHighlighted() {
                if (this.highlightedIndex >= 0 && this.filteredItems[this.highlightedIndex]) {
                    this.handleSelect(this.filteredItems[this.highlightedIndex]);
                }
            },

            handleSelect(option) {
                this.selectedItemId = option.id;
                this.search = option.name;
                this.open = false;
            },

            clearSelection() {
                this.selectedItemId = null;
                this.search = '';
                this.open = false;
            }
        }
    }
</script>