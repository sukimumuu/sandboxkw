<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadProfile extends Component
{
    use WithFileUploads;


    
    public $avatar;

    protected $rules = [
        'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
    ];

    protected $messages = [
        'avatar.required' => 'Harap pilih gambar',
        'avatar.image' => 'File harus berupa gambar',
        'avatar.mimes' => 'File harus bertipe: jpeg, png, jpg, gif, svg',
        'avatar.max' => 'Ukuran file gambar maksimal 1MB',
    ];

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);

    }

    public function save()
    {
        $this->validate();

        if(Storage::disk("public")->exists(Auth::user()->avatars)) {
            Storage::disk("public")->delete(Auth::user()->avatars);
        }
        
        $path = Storage::disk("public")->putFileAs(
            "avatars/" . strtolower(Auth::user()->username),
            $this->avatar,
            $this->avatar->hashName(),
        );
        User::find(Auth::user()->id)->update(["avatars" => $path]);
    }

    public function render()
    {
        return view("livewire.upload-profile");
    }
}
