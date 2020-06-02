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
        <h1>Here's a list of available categories</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($allCategories as $category)
                <tr>
                    <th scope="row"><h4>{{ $category->name }}</h4></th>
                    <td><div class="p-2" style="border: black 0.5px solid; border-radius: 10px; margin-right: 10px;margin-left: 10px">{!! $category->description  !!}</div></td>
                    <td><img src="/images/{{ $category->image }}" alt="prodImg" style="height: 200px;width: 200px;border-radius: 20px"/></td>
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>
</div>
</body>
</html>
