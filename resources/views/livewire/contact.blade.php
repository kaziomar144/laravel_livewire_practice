<div>
    <section style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Contact Form</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="submitForm">
                                <div class="form-group">
                                    <label for="">Name:</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror" wire:model="name">
                                    @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" wire:model="email">
                                    @error('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Phone:</label>
                                    <input type="text" name="Phone" class="form-control @error('phone') is-invalid  @enderror" wire:model="phone">
                                    @error('phone')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Message:</label>
                                    <textarea name="msg" class="form-control @error('msg') is-invalid  @enderror" wire:model="msg"></textarea>
                                    @error('msg')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Submit</button>
                            </form>
                            {{-- {!! Form::submit($text, [$options]) !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
