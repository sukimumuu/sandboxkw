<form class="flex flex-col gap-8" wire:submit.prevent="save"
    x-data="{ isUploading: false, progress: 0 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
>
    <div class="w-40 h-40 rounded-full overflow-hidden relative mx-auto">
        @if($avatar) 
            <img id="preview-avatar" src="{{ $avatar->temporaryUrl() }}">
        @endif
        <img id="avatar-img" src="{{ Auth::user()->avatars ? Storage::url(Auth::user()->avatars) : 'https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp' }}" alt="">
        <input class="w-40 h-40 rounded-full bg-gray-300 absolute top-0 opacity-0" id="avatar" type="file" wire:model="avatar">
    </div>
    <div wire:loading wire:target="avatar">Mengunggah...</div>
    <div x-show="isUploading">
        <progress max="100" x-bind:value="progress"></progress>
    </div>
    @error('avatar') <span class="text-red-500">{{ $message }}</span> @enderror
    <button class="btn btn-primary" type="submit">Simpan Avatar</button>
</form>