<x-app-layout>
    @include('includes.page-title')

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $title }}</h3>
        </div>

        <form action="{{ route('dropzone.store') }}" method="POST" enctype="multipart/form-data" id="image-upload"
            class="dropzone">
            @csrf
            <div>
                <h4>Upload Multiple Image By Click On Box</h4>
            </div>
        </form>

    </div>

</x-app-layout>
<script type="text/javascript">
    Dropzone.autoDiscover = false;

    var dropzone = new Dropzone('#image-upload', {

        thumbnailWidth: 200,
        maxFilesize: 10, //MB
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return time + file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 5000,
        removedfile: function(file)
            {
                var name = file.upload.filename;
                console.log(file);
                return;
            $.ajax({
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                type: 'POST',
                url: '{{ url("dropzone/delete") }}',
                data: {filename: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
        success: function(file, response) {
            console.log(response);
        },
        error: function(file, response) {
            return false;
        }

    });
</script>
