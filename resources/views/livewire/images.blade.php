<div>
    <section style="padding-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Upload Images</h4>
                        </div>
                    
                    <div class="card-body">
                        @if (session()->has('message'))
                        <div class="alert alert-{{session('msg-type')}}">{{session('message')}}</div>
                         @endif
                        <form id="upload-images" enctype="multipart/form-data" wire:submit.prevent="uploadImages">
                            @csrf
                            <div class="form-group">
                                <label for="">Choose Images</label>
                                <input type="file" name="images" class="form-control @error('images') is-invalid  @enderror" wire:model="images" multiple>
                                @error('images')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success float-end mt-2">Submit</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
