<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View categories | Product Store</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
<div class="flex-center position-ref full-height p-3 mt-3">
    <div class="content">
        <h1>Категорії зоомагазину</h1>

        <div class="container">
            <div class="row">

                @foreach ($allCategories as $category)

                    <div class="col-4">

                        <div class="modal fade" id="modal{{ $category->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="/images/{{ $category->image }}" alt="prodImg" style="height: 300px;width: 300px;border-radius: 20px"/>
                                        <p style="margin-bottom: 1px;" class="mt-2">Name:</p>
                                        <h4>{{ $category->name }}</h4>
                                        <p>Description:</p>
                                        <div class="p-2" style=" margin-right: 10px;margin-left: 10px">{!! $category->description!!}</div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex " style="width: 18rem;" >
                            <div class="d-flex justify-content-center text-center">
                                <img class="card-img-top mt-2" src="/images/{{ $category->image }}" style="height: 200px;width: 200px;border-radius: 20px" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->name }}</h5>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $category->id }}">More info</button>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
        </div>


    </div>
</div>
</body>
<script src={{ asset('js/app.js') }}></script>

</html>
