@extends('layouts.app')

@section('content')
    <div class="container mx-auto sm:px-4 px-4">
        <h1 class="text-2xl font-bold mb-4">Crear Noticia</h1>
        <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <input type="text" name="title" id="title" placeholder="Título..." class="w-full border border-gray-300 p-2 rounded">
            </div>
            <textarea name="content" id="myeditorinstance" placeholder="Contenido..."></textarea>
            <div class="mb-4">
                <label for="media" class="block text-gray-700">Adjuntar Archivos Multimedia</label>
                <input type="file" name="media" id="media" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <!-- Botón de Guardar -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>

    <!-- Incluye la configuración de TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/teh5fmriwrpnbyahmkb3mkq0ah3zbps6pllriq67x1l71ucv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Utiliza el mismo selector que en el formulario
            plugins: 'autosave lists link image imagetools media table',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | link image media | table',
            menubar: 'file edit view insert format tools table',
            autosave_interval: "20s",
            autosave_restore_when_empty: true,
            autosave_prefix: "tinymce-autosave-{path}{query}-{id}-",
            autosave_retention: "30m",
            branding: false,
            images_upload_url: '/upload_image', // URL para subir imágenes
            images_upload_base_path: '/',
            images_upload_credentials: true,
            images_upload_handler: function (blobInfo, success, failure) {
                var formData;
                formData = new FormData();
                formData.append('image', blobInfo.blob(), blobInfo.filename());
                $.ajax({
                    url: '/upload_image', // URL para subir imágenes
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        success(data.location);
                    },
                    error: function (err) {
                        failure("HTTP Error: " + err.status + ", " + err.statusText);
                    }
                });
            },
        });
    </script>
@endsection
