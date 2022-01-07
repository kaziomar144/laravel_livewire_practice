<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Livewire\WithFileUploads;
use Livewire\Component;

class Uploads extends Component
{
    public $title;
    public $filename;

    use WithFileUploads;
    public function fileUpload()
    {
        $validateData = $this->validate([
            'title'   => 'required',
            'filename'   => 'required'
        ]);
        $filename = $this->filename->store('files','public');
        $validateData['filename'] = $filename;
        Upload::create($validateData);
        session()->flash('message','File successfully uploaded!');
        session()->flash('msg-type','success');
        $this->emit('fileuploaded');
    }

    public function render()
    {
        return view('livewire.uploads');
    }
}
