<flux:modal name="stakeholder-form" variant="flyout" class="w-dvw md:w-96" x-on:close="$store.stakeholders.closeFormModal()">
    <form class="space-y-4" x-on:submit.prevent="$store.stakeholders.saveStakeholder()">
        <div>
            <flux:heading size="lg" x-text="$store.stakeholders.form.id ? '{{__('Edit Stakeholder')}}' : '{{__('Create Stakeholder')}}'"></flux:heading>
            <flux:text class="mt-2" x-text="$store.stakeholders.form.id ? $store.stakeholders.selectedStakeholder.name : '{{__('Create a new stakeholder')}}'"></flux:text>
        </div>

        <div>
            <flux:label for="name">{{__('Name')}}</flux:label>
            <flux:input x-model="$store.stakeholders.form.name" />
            <flux:text x-show="$store.stakeholders.errors.name" class="text-red-500" x-text="$store.stakeholders.errors.name"></flux:text>
        </div>


        <div class="flex justify-end">
            <flux:button type="submit" size="sm" variant="primary" x-bind:disabled="$store.stakeholders.saving">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>