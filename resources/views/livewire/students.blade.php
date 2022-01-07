<div>
    <style>
        nav svg{
            height: 20px;
        }
    </style>
    @include('livewire.update')
    @include('livewire.create')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header d-flex justify-content-between">
                            <h3>All Student</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal" wire:click.prevent="resetInputFields()">
                                        Add Student
                                      </button>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Search..." wire:model="searchTerm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-{{session('msg-type')}}">{{session('message')}}</div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>lastname</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                            <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-info text-danger" data-bs-toggle="modal" data-bs-target="#deleteStudent" wire:click.prevent="deleteId({{$student->id}})"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                               
                            </table>
                            {{$students->links()}}
                            @include('livewire.delete')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
