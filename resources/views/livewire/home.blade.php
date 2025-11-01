<div class="w-full flex">
   <x-sidebar></x-sidebar>
   <main class="w-3/5">
      @if (Route::currentRouteName() != 'profile')
      <x-navbar></x-navbar>
      @endif
      @if (Route::is('profile'))
      <livewire:profile>
      @endif
   </main>
   <x-widgetbar></x-widgetbar>
</div>
