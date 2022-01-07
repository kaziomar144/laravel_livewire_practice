<div>
    <section style="padding-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        <div class="card-body">
                            @if (session()->has('message'))
                            <div class="alert alert-{{session('msg-type')}}">{{session('message')}}</div>
                             @endif
                            <form wire:submit.prevent="fileUpload" id="form-upload" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title"></label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid  @enderror" wire:model="title">
                                    @error('title')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="filename"></label>
                                    <input type="file" name="filename" class="form-control @error('filename') is-invalid  @enderror" wire:model="filename">
                                    @error('filename')
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
