<x-layouts.app :title="__('Letters')" >

    @include('modals.quick-text')

    <div 
        x-data
        x-init="
            $store.letters.cover = '{{$cover}}';
            $store.letters.getLetters(1);

            $watch('$store.letters.filters', () => {
                $store.letters.getLetters(1);
            });
        "
    >

        <div class="flex gap-2 h-[calc(100vh-122px)]">

            <!-- Letters List Section -->
            <div class="w-1/4 flex flex-col h-full border border-accent rounded-md p-2 overflow-y-auto">
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center gap-2">
                        <flux:icon.shield-check variant="outline" size="sm" class="text-accent w-4 h-4" />
                        <h1 class="text-xl font-bold">{{__('Letters')}}</h1>
                        <flux:badge size="sm" x-text="$store.letters.total" variant="pill"></flux:badge>
                    </div>

                    <flux:button x-on:click="$store.letters.handleNewLetter()" variant="primary" icon="plus" size="sm">{{__('New')}}</flux:button> 
                </div>

                <div class="flex items-center gap-2 mb-2">
                    <flux:input
                        x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                        class="!w-2/5" 
                        type="number" 
                        x-model.debounce="$store.letters.filters.letter_id" 
                        placeholder="{{__('Letter ID')}}"
                    />
                    <flux:input
                        x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                        class="!w-3/5" 
                        type="text" 
                        x-model.debounce="$store.letters.filters.search" 
                        placeholder="{{__('Search')}}"
                    />
                </div>

                <flux:radio.group class="mb-2" x-model="$store.letters.filters.scope" variant="segmented" size="sm">
                    <flux:radio label="{{__('Mine')}}" value="mine" />
                    <flux:radio label="{{__('All')}}" value="all" />
                </flux:radio.group>

                <div x-cloak x-show="$store.letters.gettingData" class="flex justify-center items-center h-full">
                    <x-spinner class="w-10 h-10" />
                </div>
        
                <div x-cloak x-show="$store.letters.letters.length === 0 && !$store.letters.gettingData" class="flex justify-center items-center h-full">
                    <flux:text>{{__('No letters found')}}</flux:text>
                </div>


                <div class="flex flex-col gap-2">
                    <template x-for="letter in $store.letters.letters" :key="letter.id">
                        @include('includes.letter-card')
                    </template>
                </div>
        
                <!-- load more -->
                <div class="flex justify-center items-center mt-2" x-cloak x-show="$store.letters.currentPage < $store.letters.lastPage && $store.letters.letters.length > 0">
                    <flux:button type="submit" variant="primary" size="xs" x-on:click="$store.letters.loadMore()" x-bind:disabled="$store.letters.loadingMore">
                        {{__('Load More')}}
                    </flux:button>
                </div>
            </div>

            <!-- Form Section -->
            <div x-cloak x-show="$store.letters.selectedLetter" class=" flex-1  h-full border border-accent rounded-md p-2 overflow-y-auto">
                <form @submit.prevent="$store.letters.saveLetter()" class=" min-h-full flex flex-col gap-8 overflow-y-auto p-1">
                    <flux:field variant="inline" class="w-fit">
                        <flux:checkbox x-bind:checked="$store.letters.form.internal" x-model="$store.letters.form.internal" />
                        <flux:label>{{__('Internal')}}</flux:label>
                    </flux:field>

                    <flux:field variant="inline">
                        <flux:label>{{__('Sender')}}</flux:label>
                        <flux:input
                            x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                            required
                            type="text"
                            x-model="$store.letters.form.sender"
                            placeholder="{{__('Sender')}}"
                        />
                    </flux:field>


                    <flux:field variant="inline">
                        <flux:label>{{__('Receiver')}}</flux:label>
                        <flux:input.group>
                            <flux:select required class="max-w-fit" x-model="$store.letters.form.prefix">
                                <flux:select.option value="">---</flux:select.option>
                                <flux:select.option value="السيد">{{__('السيد')}}</flux:select.option>
                                <flux:select.option value="السادة">{{__('السادة')}}</flux:select.option>
                            </flux:select>
                            <flux:input
                                x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                                required
                                x-model="$store.letters.form.receiver"
                                placeholder="{{__('Receiver')}}"
                            />
                        </flux:input.group>
                    </flux:field>

                    <flux:field variant="inline" class="w-fit">
                        <flux:checkbox x-bind:checked="$store.letters.form.official" x-model="$store.letters.form.official" />
                        <flux:label>{{__('Official')}}</flux:label>
                    </flux:field>

                    <flux:field>
                        <flux:label>{{__('Address')}}</flux:label>
                        <flux:textarea
                            x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                            rows="auto"
                            resize="none"
                            x-model="$store.letters.form.address"
                            placeholder="{{__('Address')}}"
                        />
                    </flux:field>

                    <flux:field>
                        <flux:label>{{__('Subject')}}</flux:label>
                        <flux:textarea
                            x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                            required
                            rows="auto"
                            resize="none"
                            x-model="$store.letters.form.subject"
                            placeholder="{{__('Subject')}}"
                        />
                    </flux:field>


                    <!-- kendo editor -->
                    <flux:field>
                        <flux:label>{{__('Body')}}</flux:label>
                        <div class="k-rtl rounded-md border border-accent overflow-clip" style="height: 600px;">
                            <textarea
                                required
                                dir="rtl"
                                id="editor"
                                aria-label="editor"
                                style="height: 100%;"
                            ></textarea>
                        </div>
                    </flux:field>

                    
                    <flux:field variant="inline" class="w-fit">
                        <flux:checkbox x-bind:checked="$store.letters.form.code" x-model="$store.letters.form.code" />
                        <flux:label>{{__('Code')}}</flux:label>
                    </flux:field>

                    <flux:field variant="inline" class="w-fit">
                        <flux:checkbox x-bind:checked="$store.letters.form.has_attachments" x-model="$store.letters.form.has_attachments" />
                        <flux:label>{{__('Has Attachments')}}</flux:label>
                    </flux:field>

                    <flux:field>
                        <flux:label>{{__('Copy To')}}</flux:label>
                        <flux:textarea
                            x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                            required
                            rows="auto"
                            resize="none"
                            x-model="$store.letters.form.copy_to"
                            placeholder="{{__('Copy To')}}"
                        />
                    </flux:field>


                    <flux:field>
                        <flux:label>{{__('Line Height')}}</flux:label>
                        <div class="w-fit flex items-center gap-2">
                            <flux:button icon="plus" variant="subtle" size="sm" x-on:click="$store.letters.incrementLineSpacing()" />
                            <flux:text x-text="$store.letters.form.line_height?.toFixed(1)"></flux:text>
                            <flux:button icon="minus" variant="subtle" size="sm" x-on:click="$store.letters.decrementLineSpacing()" />
                        </div>
                    </flux:field>

                    <flux:field x-cloak x-show="$store.letters.pdfPath" variant="inline" class="w-fit">
                        <flux:switch x-model="$store.letters.showCover" x-on:change="$store.letters.handleShowCoverChange($event)" />
                        <flux:label>{{__('Show Cover')}}</flux:label>
                    </flux:field>

                    <flux:button x-show="$store.letters.form.can_edit" type="submit" size="sm" variant="primary" x-bind:disabled="$store.letters.saving">{{__('Save')}}</flux:button>
                </form>
            </div>

            <!-- Preview Section -->
            <div x-cloak x-show="$store.letters.selectedLetter" class="aspect-[203/297] h-full w-auto flex flex-col rounded-md border border-accent overflow-clip">

                <template x-if="$store.letters.selectedLetter === 'new'">
                    <div class="flex justify-center items-center h-full">
                        <flux:text>{{__('Save the letter to preview')}}</flux:text>
                    </div>
                </template>
                
                <template x-if="$store.letters.selectedLetter && $store.letters.selectedLetter !== 'new'">
                    <div class="relative h-full w-full">

                        <div 
                            class="absolute top-0 left-0 w-full h-full z-10 flex justify-center items-center"
                            x-show="$store.letters.gettingPdf"
                        >
                            <x-spinner class="w-10 h-10" />
                        </div>

                        <!-- PDF viewer -->
                        <div class="w-full h-full">
                            <object
                                id="pdfViewer"
                                x-bind:data="$store.letters.pdfPath"
                                type="application/pdf"
                                class="w-full h-full"
                                x-on:load="$store.letters.gettingPdf = false"
                                x-on:error="$store.letters.handlePdfError()"
                            ></object>
                        </div>
                    </div>
                </template>

            </div>
            
        </div>

    </div>

</x-layouts.app>

