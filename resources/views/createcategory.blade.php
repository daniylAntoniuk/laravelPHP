<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Create Product | Product Store</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/froala_editor.css">
    <link rel="stylesheet" href="/css/plugins/emoticons.css">
    <link rel="stylesheet" href="/css/froala_style.css">
    <link rel="stylesheet" href="/css/plugins/code_view.css">
    <link rel="stylesheet" href="/css/plugins/image_manager.css">
    <link rel="stylesheet" href="/css/plugins/image.css">
    <link rel="stylesheet" href="/css/plugins/table.css">
    <link rel="stylesheet" href="/css/plugins/video.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="p-5 ">
        <form method="POST" action="{{ config('app.url')}}/category" enctype="multipart/form-data">
            @csrf
            <h1> Enter Details to create a category</h1>
            <div class="form-group">
                <label>Name</label> <input  class="form-control" type="text" name="name">
            </div>


            <textarea id='edit' style="margin-top: 30px;" name="description" placeholder="Type some text">

            </textarea>
            <div class="form-group d-flex flex-column mt-2">
                <label for="last_name">Фото:</label>
                <img src="/images/200_default.png" style="height: 200px;width: 200px; border-radius: 15px" id="output" alt="Обрати фото">

                <div class="input-group mb-3 mt-2">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" onchange="loadFile(event)" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <script>
                    function loadFile(event) {

                        //alert("t");
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                        output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                        }


                    };
                </script>
            </div>



            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="/js/froala_editor.min.js"></script>
<script type="text/javascript" src="/js/plugins/align.min.js"></script>
<script type="text/javascript" src="/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="/js/plugins/image.min.js"></script>
<script type="text/javascript" src="/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="/js/plugins/link.min.js"></script>
<script type="text/javascript" src="/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="/js/plugins/table.min.js"></script>
<script type="text/javascript" src="/js/plugins/video.min.js"></script>
<script type="text/javascript" src="/js/plugins/url.min.js"></script>
<script type="text/javascript" src="/js/plugins/entities.min.js"></script>

<script>
    function cl(){
        console.log(getElementById("edit"));
    }
    (function () {
        const editorInstance = new FroalaEditor('#edit', {
            enter: FroalaEditor.ENTER_P,
            placeholderText: null,
            events: {
                initialized: function () {
                    const editor = this
                    this.el.closest('form').addEventListener('submit', function (e) {

                    })
                }
            }
        })
    })()
</script>
</html>
