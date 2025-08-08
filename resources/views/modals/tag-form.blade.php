<flux:modal name="tag-form" variant="flyout" class="w-dvw md:w-96" x-on:close="$store.tags.closeFormModal()">
    <form class="space-y-4" x-on:submit.prevent="$store.tags.saveTag()">
        <div>
            <flux:heading size="lg" x-text="$store.tags.form.id ? '{{__('Edit Tag')}}' : '{{__('Create Tag')}}'"></flux:heading>
            <flux:text class="mt-2" x-text="$store.tags.form.id ? $store.tags.selectedTag.name : '{{__('Create a new tag')}}'"></flux:text>
        </div>

        <div>
            <flux:label for="name">{{__('Name')}}</flux:label>
            <flux:input x-model="$store.tags.form.name" />
            <flux:text x-show="$store.tags.errors.name" class="text-red-500" x-text="$store.tags.errors.name"></flux:text>
        </div>


        <div class="flex justify-end">
            <flux:button type="submit" size="sm" variant="primary" x-bind:disabled="$store.tags.saving">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>