<div>
    <button wire:click="addTags">click</button>
    <div wire:ignore>
        <select id="select-state{{ $reviewId }}" name="state[]" multiple placeholder="Add tag..." autocomplete="off"
        wire:model="tag_list">
        <option value="">Add tags ...</option>
        @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
        
    </select>
    </div>

    <script>
       
	new TomSelect(`#select-state{{ $reviewId }}`,{
        maxItems: 3,
		plugins: ['remove_button'],
		create: false,
        onItemAdd:function(){
			this.setTextboxValue('');
			this.refreshOptions();
		},
	});
	
    </script>
    {{-- <script>
        new TomSelect(`#select-state{{ $reviewId }}`, {
            maxItems: 3
        });
    </script> --}}
</div>
