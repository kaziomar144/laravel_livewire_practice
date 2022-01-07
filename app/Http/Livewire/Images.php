<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Images extends Component
{

    public $images = [];

    use WithFileUploads;
    public function uploadImages()
    {
        $validateData = $this->validate([
            'images' => 'required'
        ]);
        foreach($this->images as $key=>$image){
            $this->images[$key] = $image->store('images','public');
        }
        $this->images = json_encode($this->images);
        Image::create(['filename' => $this->images]);
        session()->flash('message','Images successfully uploaded');
        session()->flash('msg-type','success');
        $this->emit('imagesUploaded');
    }


    public function render()
    {
        return view('livewire.images');
    }
}
