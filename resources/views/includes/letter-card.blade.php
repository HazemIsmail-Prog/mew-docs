<div 
    class="letter-card"
    x-on:click="$store.letters.handleLetterSelection(letter)"
    x-bind:class="{
        'selected': $store.letters.selectedLetter?.id === letter.id,
    }"
>
    <div class="flex justify-between items-center gap-2">
        <div class="flex-1">
            <span class="letter-subject" x-html="letter.subject"></span>
            <div class="letter-sender" x-text="letter.sender"></div>
            <div class="letter-receiver" x-text="letter.receiver"></div>
            <div class="letter-user" x-text="letter.user.name"></div>

        </div>

        <button 
            x-show="letter.can_duplicate"
            tabindex="-1"
            class="text-gray-400 hover:text-danger transition-colors" 
            x-on:click.stop="$store.letters.handleDuplicateLetter(letter)"
        >
            <flux:icon.document-duplicate variant="outline" size="sm" class="w-4 h-4"/>
        </button>

        <button 
            x-show="letter.can_delete"
            tabindex="-1"
            class="text-gray-400 hover:text-danger transition-colors" 
            x-on:click.stop="$store.letters.deleteLetter(letter)"
        >
            <flux:icon.trash variant="outline" size="sm" class="w-4 h-4"/>
        </button>
    </div>
</div>