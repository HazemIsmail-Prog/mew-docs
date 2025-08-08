<div 
    class="attachments-container"
    x-data
    x-show="$store.documents.form.id"
    x-model="$store.attachments.selectedDocument"
    x-modelable="$store.documents.selectedDocument"
    x-init="
        $watch('$store.attachments.selectedDocument', (value) => {
            if(value){
                $store.attachments.getAttachments(value.id);
            }else{
                $store.attachments.resetAll();
            }
        }, {
            immediate: true
        });"
>

        <!-- flux heading -->
        <flux:heading size="lg" class="mb-2 text-accent font-bold">{{__('Attachments')}}</flux:heading>

        <!-- steps list -->
        <template x-if="$store.attachments.gettingData">
            <flux:icon.loading class="text-accent size-10 mx-auto my-4"/>
        </template>

        <template x-if="!$store.attachments.gettingData">
            <div>
                <template x-if="$store.attachments.attachments?.length > 0">
                    <div 
                        class="attachments-list"
                    >
                        <template x-for="attachment in $store.attachments.attachments" :key="attachment.id">

                            <div  x-sort:item x-bind:id="attachment.id" class="attachmentSelector">
                                <!-- normal mode -->
                                <template x-if="$store.attachments.attachmentToDelete !== attachment.id && $store.attachments.attachmentToEdit !== attachment.id">
                                    <div class="attachment-row">
                                        <a :href="attachment.full_url" class="flex-1" target="_blank">
                                            <p class="w-full whitespace-pre-wrap" x-text="attachment.description"></p>
                                        </a>
                                        <flux:icon.pencil-square  x-on:click="$store.attachments.editAttachment(attachment)" variant="solid" class="text-accent size-4" />
                                        <flux:icon.trash  x-on:click="$store.attachments.attachmentToDelete = attachment.id" variant="solid" class="text-accent size-4" />
                                    </div>
                                </template>
                                <!-- edit mode -->
                                <template x-if="$store.attachments.attachmentToEdit === attachment.id">
                                    <div class="attachment-row">
                                        <flux:textarea
                                            x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                                            rows="auto"
                                            resize="none"
                                            x-model="$store.attachments.editingDescription"
                                            x-on:keyup.ctrl.enter="$store.attachments.updateAttachment(attachment)"
                                        ></flux:textarea>
                                        <flux:icon.check  x-on:click="$store.attachments.updateAttachment(attachment)" variant="solid" class="text-accent size-4" />
                                        <flux:icon.no-symbol  x-on:click="$store.attachments.attachmentToEdit = null" variant="solid" class="text-accent size-4" />
                                    </div>
                                </template>
                                <!-- delete mode -->
                                <template x-if="$store.attachments.attachmentToDelete === attachment.id">
                                    <div class="attachment-row">
                                        <p class="flex-1 whitespace-pre-wrap" x-text="attachment.description"></p>
                                        <div x-show="!$store.attachments.deleting" class="flex items-center gap-2">
                                            <flux:icon.check  x-on:click="$store.attachments.deleteAttachment(attachment)" variant="solid" class="text-accent size-4" />
                                            <flux:icon.no-symbol  x-on:click="$store.attachments.attachmentToDelete = null" variant="solid" class="text-accent size-4" />
                                        </div>
                                        <div x-show="$store.attachments.deleting" class="flex items-center justify-center">
                                            <flux:icon.loading class="text-accent size-4" />                                
                                        </div>
                                    </div>  
                                </template>
                            </div>



                        </template>
                    </div>
                </template>

                <template x-if="$store.attachments.attachments?.length === 0">
                    <p class="text-accent text-sm h-10 flex items-center justify-center">{{__('No attachments found')}}</p>
                </template>


            </div>
        </template>

        <div x-cloak x-show="!$store.attachments.attachmentToEdit" class="attachment-form">
            <div class="flex items-center justify-center w-full" x-show="!$store.attachments.newFile" x-on:dragover.prevent
                x-on:dragleave.prevent x-on:drop.prevent="$store.attachments.handleFileDrop($event)">

                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-14 border border-accent border-dashed rounded-lg cursor-pointer">

                    <p class="text-sm text-accent select-none">
                        <span class="font-semibold">
                            {{ __('Click to upload') }}
                        </span>
                        {{ __('or drag and drop') }}
                    </p>

                    <input id="dropzone-file" type="file" class="hidden" x-ref="uploadInput"
                        x-on:change="$store.attachments.handleFileUpload($event)" />

                </label>

            </div>

            <!-- Description Input and Save/Cancel Buttons -->
            <div x-show="$store.attachments.newFile && !$store.attachments.saving" class="w-full flex items-center gap-2">
                <flux:textarea placeholder="Description"
                    rows="auto"
                    resize="none"
                    class="flex-1 rounded-md focus:outline-none focus:ring-0 border-none outline-none"
                    x-model="$store.attachments.newDescription" x-trap="$store.attachments.newFile"
                    x-on:keydown.ctrl.enter.prevent="$store.attachments.addAttachment($store.attachments.selectedDocument.id)" />

                <div class="flex items-center gap-2">
                    <flux:icon.check  x-on:click="$store.attachments.addAttachment($store.attachments.selectedDocument.id)" variant="solid" class="text-accent size-4" />
                    <flux:icon.no-symbol  x-on:click="$store.attachments.clearFileInput()" variant="solid" class="text-accent size-4" />
                </div>
            </div>

            <!-- Uploading Indicator -->
             <div x-show="$store.attachments.saving" class="flex items-center justify-center w-full">
                 <flux:icon.loading class="text-accent size-8"/>
             </div>























<!-- 
            <flux:textarea
                x-show="$store.attachments.newFile  && !$store.attachments.saving"
                x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                x-on:keyup.ctrl.enter="$store.attachments.addAttachment($store.attachments.selectedDocument.id)"
                placeholder="{{__('New attachment')}}"
                rows="auto"
                resize="none"
                x-model="$store.attachments.newDescription"
            ></flux:textarea>
            <div x-cloak x-show="$store.attachments.newDescription" class="flex items-center gap-1">
                <flux:icon.check @click="$store.attachments.addAttachment($store.attachments.selectedDocument.id)" variant="solid" class="text-accent size-4" />
                <flux:icon.no-symbol @click="$store.steps.newAction = ''" variant="solid" class="text-accent size-4" />
            </div> -->
        </div>

</div>