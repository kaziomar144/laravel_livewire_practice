<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    public $deleteId;
    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $searchTerm;

    public function resetInputFields()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }
    public function updated($filed)
    {
        $this->validateOnly($filed,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:15',
        ]);
    }
    public function store()
    {
        $validateData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:15',
        ]);
        Student::create($validateData);
        session()->flash('message','Student add successfully!');
        session()->flash('msg-type','success');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function edit($id)
    {
        $students = Student::whereId($id)->first();
        $this->ids = $students->id;
        $this->firstname = $students->firstname;
        $this->lastname = $students->lastname;
        $this->email = $students->email;
        $this->phone = $students->phone;
    }

    public function update()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:15',
        ]);
        if($this->ids){
            $students = Student::find($this->ids);
            $students->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);
            session()->flash('message','Student updated Successfully!');
            session()->flash('msg-type','success');
            $this->resetInputFields();
            $this->emit('studentUpdated');
        }
    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        $students = Student::find($this->deleteId)->delete();
        session()->flash('message','Student Record delete successfully!');
        session()->flash('msg-type','danger');
    }

    use WithPagination;
    public function render()
    {
        $searchTerm ='%' .$this->searchTerm. '%';
        $students = Student::where('firstname','LIKE',$searchTerm)
                ->orWhere('lastname','LIKE',$searchTerm)
                ->orWhere('email','LIKE',$searchTerm)
                ->orWhere('phone','LIKE',$searchTerm)
                ->orderBy('id','DESC')->paginate(5);
        return view('livewire.students',['students'=>$students]);
    }
}
