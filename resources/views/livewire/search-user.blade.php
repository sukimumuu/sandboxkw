<div class="mb-3 relative">
<label class="input">
<svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <g
    stroke-linejoin="round"
    stroke-linecap="round"
    stroke-width="2.5"
    fill="none"
    stroke="currentColor"
    >
    <circle cx="11" cy="11" r="8"></circle>
    <path d="m21 21-4.3-4.3"></path>
    </g>
</svg>
<input type="search" id="searchUsers" class="grow" wire:model.live="search" placeholder="Cari pengguna..." />
<kbd class="kbd kbd-sm">/</kbd>
</label>
@if ($users->count() > 0)
<ul class="border border-gray-300 rounded-sm absolute w-full bg-base-100 p-2">
    @foreach ($users as $user)
    <li class="hover:bg-base-300 cursor-pointer mb-2 p-3 rounded-sm flex items-center gap-3" wire:key="{{ $user->username }}">
        <img src="{{ $user->avatars ? Storage::url($user->avatars) : 'https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp' }}" alt="" class="w-10 h-10 rounded-full">
        <a href="">{{ $user->name }}</a>
    </li>
    @endforeach
</ul>
@endif
</div>