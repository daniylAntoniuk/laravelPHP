<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
class ProductController extends Controller
{

    public function index()
    {
        $products = \App\Product::all();

        return view('viewproducts', ['allProducts' => $products]);
    }


    public function create()
    {
        return view('createproduct');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $product = new Product([
            'name' => $request->get('name'),
            'price' => 45,
            'category_id' => 1,
            'count'=>0,
            'description' => $request->get('description')
        ]);
        $product->save();

        $listImages=$request-> get("productImages");
        foreach($listImages as $id)
        {
            $pi = ProductImage::find($id);
            $pi->product_id =  $product->id;
            $pi->save();
        }

        return redirect('/products')->with('success', 'Продукт успішно збережено!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = \App\Product::find( $id);
        return view('viewproduct',  ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\Product::find($id);
        return view('changeproduct',  ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product = \App\Product::find($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->save();

        $listImages=$request-> get("productImages");
        foreach($listImages as $id)
        {
            $pi = ProductImage::find($id);
            $pi->product_id =  $product->id;
            $pi->save();
        }
        return redirect('/products')->with('success', 'Продукт успішно змінено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Продукт успішно Видалено!');
    }

    public function getProd($id)
    {
//        $product = \App\Product::where('id', $id);
//        return view('viewproduct',  $product);
    }
    public function upload(Request $request)
    {
        $base64_image=$request->get("imageBase64");
        $img_url = Str::uuid().'.jpg';
        $path = public_path('images/105_').$img_url;
        my_image_resize(105,80, $path, $base64_image);
        $path = public_path('images/820_').$img_url;
        my_image_resize(820,620, $path, $base64_image);

        $productImage = new ProductImage([
            'name' => $img_url,
            'priority' => 1
        ]);
        $productImage->save();

        return response()->json(['id'=> $productImage->id, 'url'=>'/images/820_'.$img_url]);
    }
    public function removeImage($id)
    {


        $productImage = \App\ProductImage::find($id);
        $productImage->delete();
        return ("Ok");
    }
}
function my_image_resize($width, $height, $path, $data) //32x32
{
    list($type, $data) = explode(';', $data);
    list(, $data)      = explode(',', $data);
    $imgString = base64_decode($data);

    //Оригінал висота і ширина
    $image_resize=Image::make($data);
    $w= $image_resize->width();
    $h=$image_resize->height();
    $maxSize=0;
    //Обчислюємо максмильан знечення або ширина або висота
    if(($w>$h) and ($width>$height)) //204>247 and 32>32
        $maxSize=$width;
    else
        $maxSize=$height; //32
    //MaxSize=32
    $width=$maxSize; //32
    $height=$maxSize; //32
    $ration_orig=$w/$h; //204/247=0.82
    if(1>$ration_orig) //1>0.82 вірно
    {
        $width=ceil($height*$ration_orig); /*32*0.82=26.24 = 27 */     //34- all //10- records page  ceil(3.4)
    }
    else//Хибно
    {
        $height=ceil($width/$ration_orig);
    }
    //27x32

    //Створюємо новий файл
    $image=imagecreatefromstring($imgString);
    $tmp=imagecreatetruecolor($width,$height); //розмір нового зображення 27x32
    imagecopyresampled($tmp,$image,
        0,0,
        0,0,
        $width, $height,
        $w,$h
    );
    //Збереження зображення
    imagejpeg($tmp,$path,30);
    //imagepng($tmp,$path,5);
    //imagegif($tmp,$path);



    return $path;
//    //Очисчаємо память
    imagedestroy($image);
    imagedestroy($tmp);
}
