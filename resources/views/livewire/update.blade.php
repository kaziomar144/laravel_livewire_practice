<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <input type="hidden" name="id" wire:model="ids">
                        <label for="">First Name</label>
                        <input type="text" class="form-control @error('firstname') is-invalid  @enderror" name="firstname" wire:model.debounce.1000ms="firstname">
                        @error('firstname')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control @error('lastname') is-invalid  @enderror" name="lastname" wire:model.debounce.1000ms="lastname">
                        @error('lastname')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid  @enderror" name="email" wire:model.debounce.1000ms="email">
                        @error('email')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid  @enderror" name="phone" wire:model.debounce.1000ms="phone">
                        @error('phone')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-2" wire:click.prevent="update()">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
