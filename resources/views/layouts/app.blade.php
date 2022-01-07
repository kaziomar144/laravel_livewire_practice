<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Project</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/all.min.css">
    
    <script src="{{asset('asset')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('asset')}}/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    @livewireStyles
</head>
<body>

   {{$slot}}
    
    @livewireScripts

    <script>
        window.livewire.on('studentAdded',()=>{
            $('#addStudentModal').modal('hide');
        });
        window.livewire.on('studentUpdated',()=>{
            $('#updateStudentModal').modal('hide');
        });
        window.livewire.on('fileuploaded',()=>{
            $('#form-upload')[0].reset();
        });
        window.livewire.on('imagesUploaded',()=>{
            $('#upload-images')[0].reset();
        });
    </script>
</body>
</html>