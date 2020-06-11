<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Products | Product Store</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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


        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here's a list of available zoo products</h1>

        <div class="container">

        <div class="row">
            @foreach ($allProducts as $product)

                    <div class="card col-md-4 col-sm-6 p-2" style="width: 18rem;">
                        <img class="card-img-top mt-2" style="border-radius: 10px" src={{'images/820_'.$product->productImages[0]->name}} alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }}</p>
                            <a href="{{"/products/".$product->id}}" class="btn btn-primary">More info</a>
                            <a href="{{"/products/change/".$product->id}}" class="btn btn-warning mt-2 mb-2" >Change</a>
                            <a href="{{"/products/delete/".$product->id}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>



            @endforeach
        </div>
            {{ $allProducts->links() }}
        </div>

        <div class="container">
            <div class="row" id="row">




            </div>
        </div>
{{--        <nav aria-label="Page navigation example">--}}
{{--            <ul class="pagination">--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" onclick="prev()" aria-label="Previous">--}}
{{--                        <span aria-hidden="true">&laquo;</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="page-item"><a class="page-link" id="btnStart1" onclick="btnStart1Cl()">1</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btnStart2" onclick="btnStart2Cl()">2</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btnStart3" onclick="btnStart3Cl()">3</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btnStart">...</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btn1" onclick="btn1Cl()">1</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btn2" onclick="btn2Cl()">2</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btn3" onclick="btn3Cl()">3</a></li>--}}
{{--                <li class="page-item"><a class="page-link">...</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btnEnd1" onclick="btnEnd1Cl()">{{ceil(count($allProducts)/5)-4 }}</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btnEnd2" onclick="btnEnd2Cl()">{{ceil(count($allProducts)/5)-3 }}</a></li>--}}
{{--                <li class="page-item"><a class="page-link" id="btnEnd3" onclick="btnEnd3Cl()">{{ceil(count($allProducts)/5)-2 }}</a></li>--}}

{{--                <li class="page-item">--}}
{{--                    <a class="page-link" onclick="next()" aria-label="Next">--}}
{{--                        <span aria-hidden="true">&raquo;</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}


{{--        <script>--}}
{{--            let currentPage = 1;--}}

{{--            let arr = @json($allProducts);--}}

{{--            // for (let i = 1; i <= 300; i++) {--}}
{{--            //     arr.push(`${i}`);--}}
{{--            // }--}}

{{--            btnStart1.hidden = true;--}}
{{--            btnStart2.hidden = true;--}}
{{--            btnStart3.hidden = true;--}}
{{--            btnStart.hidden = true;--}}

{{--            for (let i = 0; i < 5; i++) {--}}
{{--                console.log(arr[i]);--}}
{{--                row.innerHTML += `<div class="card col-2"><img src="http://pcm.um.edu.my/wp-content/uploads/2017/11/empty-avatar-700x480.png" class="card-img-top" ><div class="card-body"><h4 class="card-title">${arr[i].name}</h4><h5>${arr[i].price}</h5></div></div>`;--}}
{{--            }--}}
{{--            let oldCount = 5;--}}
{{--            function loadNext(current) {--}}

{{--                if (current != 30) {--}}
{{--                    row.innerHTML = '';--}}
{{--                    let count = ((+oldCount + 5)).toString();--}}
{{--                    for (let i = oldCount; i < count; i++) {--}}
{{--                        row.innerHTML += `<div class="card col-2"><img src="http://pcm.um.edu.my/wp-content/uploads/2017/11/empty-avatar-700x480.png" class="card-img-top" ><div class="card-body"><h5 class="card-title">${arr[i].name}</h5></div></div>`;--}}
{{--                    }--}}
{{--                    oldCount = count;--}}
{{--                }--}}
{{--            }--}}
{{--            function loadPrev(current) {--}}

{{--                if (current != 1) {--}}
{{--                    row.innerHTML = '';--}}
{{--                    //let count = ((+oldCount - 12)).toString();--}}
{{--                    for (let i = oldCount - {{ceil(count($allProducts)/5) }}; i < oldCount - 5; i++) {--}}
{{--                        row.innerHTML += `<div class="card col-2"><img src="http://pcm.um.edu.my/wp-content/uploads/2017/11/empty-avatar-700x480.png" class="card-img-top" ><div class="card-body"><h5 class="card-title">${arr[i].name}</h5></div></div>`;--}}
{{--                    }--}}
{{--                    oldCount -= {{ceil(count($allProducts)/5) }}--}}
{{--                }--}}
{{--            }--}}
{{--            function load(current) {--}}
{{--                row.innerHTML = '';--}}
{{--                let count = (6 * (current));--}}
{{--                for (let i = count - 6; i < count; i++) {--}}
{{--                    row.innerHTML += `<div class="card col-2"><img src="http://pcm.um.edu.my/wp-content/uploads/2017/11/empty-avatar-700x480.png" class="card-img-top" ><div class="card-body"><h5 class="card-title">${arr[i].name}</h5></div></div>`;--}}
{{--                }--}}
{{--                //oldCount = count;--}}
{{--            }--}}

{{--            function  btnStart1Cl() {--}}
{{--                currentPage = 1;--}}
{{--                console.log(currentPage);--}}
{{--                load(currentPage);--}}
{{--                btn2.innerHTML = 2;--}}
{{--                btn1.innerHTML = 1;--}}
{{--                btn3.innerHTML =3;--}}
{{--            }--}}
{{--            function  btnStart2Cl(){--}}

{{--                currentPage = 2;--}}
{{--                console.log(currentPage);--}}
{{--                load(currentPage);--}}
{{--                btn2.innerHTML = 2;--}}
{{--                btn1.innerHTML = 1;--}}
{{--                btn3.innerHTML =3;--}}
{{--            }--}}
{{--            function btnStart3Cl() {--}}
{{--                currentPage = 3;--}}
{{--                console.log(currentPage);--}}
{{--                load(currentPage);--}}
{{--                btn2.innerHTML = 2;--}}
{{--                btn1.innerHTML = 1;--}}
{{--                btn3.innerHTML =3;--}}

{{--            }--}}
{{--            function btnEnd1Cl() {--}}
{{--                currentPage = btnEnd1.innerHTML;--}}
{{--                load(currentPage);--}}
{{--                //btn2.innerHTML = currentPage;--}}
{{--                //btn1.innerHTML = currentPage - 1;--}}
{{--                //btn3.innerHTML = +currentPage + 1;--}}
{{--            }--}}
{{--            function btnEnd2Cl() {--}}
{{--                currentPage = btnEnd2.innerHTML;--}}
{{--                load(currentPage);--}}
{{--                //btn2.innerHTML = currentPage;--}}
{{--                //btn1.innerHTML = currentPage - 1;--}}
{{--                //btn3.innerHTML = +currentPage + 1;--}}
{{--            }--}}
{{--            function btnEnd3Cl() {--}}

{{--                currentPage = btnEnd3.innerHTML;--}}
{{--                console.log(currentPage);--}}
{{--                load(currentPage);--}}
{{--                //btn2.innerHTML = currentPage;--}}
{{--                //btn1.innerHTML = currentPage - 1;--}}
{{--                //btn3.innerHTML = +currentPage + 1;--}}

{{--            }--}}
{{--            function btn1Cl() {--}}
{{--                currentPage = btn1.innerHTML;--}}
{{--                load(currentPage);--}}
{{--                if (currentPage == 1) {--}}

{{--                    btn2.innerHTML = 2;--}}
{{--                    btn1.innerHTML = 1;--}}
{{--                    btn3.innerHTML = 3;--}}
{{--                }--}}
{{--                else {--}}

{{--                    btn2.innerHTML = currentPage;--}}
{{--                    btn1.innerHTML = currentPage - 1;--}}
{{--                    btn3.innerHTML = +currentPage + 1;--}}
{{--                }--}}
{{--            }--}}
{{--            setInterval(function () {--}}
{{--                if (btn2.innerHTML >= 5) {--}}
{{--                    btnStart1.hidden = false;--}}
{{--                    btnStart2.hidden = false;--}}
{{--                    btnStart3.hidden = false;--}}
{{--                    btnStart.hidden = false;--}}
{{--                } else {--}}
{{--                    btnStart1.hidden = true;--}}
{{--                    btnStart2.hidden = true;--}}
{{--                    btnStart3.hidden = true;--}}
{{--                    btnStart.hidden = true;--}}
{{--                }--}}
{{--            }, 500);--}}
{{--            ///document.getElementById("btnStart1").hidden = true;--}}
{{--            function btn2Cl() {--}}

{{--                currentPage = btn2.innerHTML;--}}
{{--                load(currentPage);--}}
{{--                btn2.innerHTML = currentPage;--}}
{{--                btn1.innerHTML = currentPage - 1;--}}
{{--                btn3.innerHTML = +currentPage + 1;--}}
{{--            }--}}
{{--            function btn3Cl() {--}}
{{--                if (btn3.innerHTML != {{ceil(count($allProducts)/5)-2 }}) {--}}
{{--                    currentPage = btn3.innerHTML;--}}
{{--                    console.log(currentPage);--}}
{{--                    load(currentPage);--}}
{{--                    btn2.innerHTML = currentPage;--}}
{{--                    btn1.innerHTML = currentPage - 1;--}}
{{--                    btn3.innerHTML = +currentPage + 1;--}}
{{--                }--}}
{{--            }--}}
{{--            function next() {--}}
{{--                if (currentPage != {{ceil(count($allProducts)/5)-2 }}) {--}}
{{--                    ++currentPage;--}}
{{--                    console.log(currentPage);--}}
{{--                    btn2.innerHTML = currentPage;--}}
{{--                    btn1.innerHTML = currentPage - 1;--}}
{{--                    btn3.innerHTML = +currentPage + 1;--}}
{{--                    load(currentPage);--}}
{{--                }--}}
{{--            }--}}
{{--            function prev() {--}}


{{--                if (currentPage != 1) {--}}
{{--                    --currentPage;--}}
{{--                    console.log(currentPage);--}}
{{--                    btn2.innerHTML = currentPage;--}}
{{--                    btn1.innerHTML = currentPage - 1;--}}
{{--                    btn3.innerHTML = currentPage + 1;--}}
{{--                    load(currentPage);--}}
{{--                }--}}
{{--            }--}}
{{--        </script>--}}
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://kit.fontawesome.com/279e8c03ce.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </div>
</div>
</body>
</html>
