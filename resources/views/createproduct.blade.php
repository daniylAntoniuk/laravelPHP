<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Create Product | Product Store</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <form method="POST" action="{{ config('app.url')}}/products">
            <h1> Enter Details to create a product</h1>
            <div class="form-input">
                <label>Name</label> <input type="text" name="name">
            </div>

            <div class="form-input">
                <label>Description</label> <input type="text" name="description">
            </div>

            <div class="form-input">
                <label>Count</label> <input type="number" name="count">
            </div>

            <div class="form-input">
                <label>Price</label> <input type="number" name="price">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
