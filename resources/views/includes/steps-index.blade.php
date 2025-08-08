<div 
    class="steps-container"
    x-data
    x-show="$store.documents.form.id"
    x-model="$store.steps.selectedDocument"
    x-modelable="$store.documents.selectedDocument"
    x-init="
        $watch('$store.steps.selectedDocument', (value) => {
            if(value){
                $store.steps.getSteps(value.id);
            }else{
                $store.steps.resetAll();
            }
        }, {
            immediate: true
        });"
>

        <!-- flux heading -->
        <flux:heading size="lg" class="mb-2 text-accent font-bold">{{__('Steps')}}</flux:heading>

        <!-- steps list -->
        <template x-if="$store.steps.gettingData">
            <flux:icon.loading class="text-accent size-10 mx-auto my-4"/>
        </template>

        <template x-if="!$store.steps.gettingData">
            <div>
                <template x-if="$store.steps.steps?.length > 0">
                    <div 
                        x-ref="stepsList"
                        x-sort
                        x-sort:config="{ 
                            handle: '[x-sort\\:handle]',
                            onSort: (event) => {
                                $store.steps.updateStepsOrder(event);
                            }
                        }" 
                        class="steps-list"
                    >
                        <template x-for="step in $store.steps.steps" :key="step.id">

                            <div  x-sort:item x-bind:id="step.id" class="stepSelector">
                                <!-- normal mode -->
                                <template x-if="$store.steps.stepToDelete !== step.id && $store.steps.stepToEdit !== step.id">
                                    <div class="step-row">
                                        <flux:checkbox x-bind:checked="step.is_completed" x-on:change="$store.steps.toggleStepCompletion(step, $event)" />
                                        <p class="flex-1 whitespace-pre-wrap" x-text="step.action"></p>
                                        <flux:icon.arrows-up-down x-sort:handle variant="solid" class="text-accent size-4" />
                                        <flux:icon.pencil-square  x-on:click="$store.steps.editStep(step)" variant="solid" class="text-accent size-4" />
                                        <flux:icon.trash  x-on:click="$store.steps.stepToDelete = step.id" variant="solid" class="text-accent size-4" />
                                    </div>
                                </template>
                                <!-- edit mode -->
                                <template x-if="$store.steps.stepToEdit === step.id">
                                    <div class="step-row">
                                        <flux:textarea
                                            x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                                            rows="auto"
                                            resize="none"
                                            x-model="$store.steps.editingAction"
                                            x-on:keyup.ctrl.enter="$store.steps.updateStep(step)"
                                        ></flux:textarea>
                                        <flux:icon.check  x-on:click="$store.steps.updateStep(step)" variant="solid" class="text-accent size-4" />
                                        <flux:icon.no-symbol  x-on:click="$store.steps.stepToEdit = null" variant="solid" class="text-accent size-4" />
                                    </div>
                                </template>
                                <!-- delete mode -->
                                <template x-if="$store.steps.stepToDelete === step.id">
                                    <div class="step-row">
                                        <flux:checkbox x-bind:checked="step.is_completed" x-on:change="$store.steps.toggleStepCompletion(step, $event)" />
                                        <p class="flex-1 whitespace-pre-wrap" x-text="step.action"></p>
                                        <flux:icon.check  x-on:click="$store.steps.deleteStep(step)" variant="solid" class="text-accent size-4" />
                                        <flux:icon.no-symbol  x-on:click="$store.steps.stepToDelete = null" variant="solid" class="text-accent size-4" />
                                    </div>
                                </template>
                            </div>



                        </template>
                    </div>
                </template>

                <template x-if="$store.steps.steps?.length === 0">
                    <p class="text-accent text-sm h-10 flex items-center justify-center">{{__('No steps found')}}</p>
                </template>


            </div>
        </template>

        <div x-cloak x-show="!$store.steps.stepToEdit" class="step-form">
            <flux:textarea
                x-on:keyup.ctrl.space="$store.quickText.getQuickText($el)"
                x-on:keyup.ctrl.enter="$store.steps.addStep($store.steps.selectedDocument.id)"
                placeholder="{{__('New step')}}"
                rows="auto"
                resize="none"
                x-model="$store.steps.newAction"
            ></flux:textarea>
            <div x-cloak x-show="$store.steps.newAction" class="flex items-center gap-1">
                <flux:icon.check @click="$store.steps.addStep($store.steps.selectedDocument.id)" variant="solid" class="text-accent size-4" />
                <flux:icon.no-symbol @click="$store.steps.newAction = ''" variant="solid" class="text-accent size-4" />
            </div>
        </div>

</div>