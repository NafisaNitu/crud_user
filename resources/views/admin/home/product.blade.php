<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Category wise Product</h1>
        <span>Product Category: </span>
        <select style="width: 200px" class="productcategory" id="prod_cat_id">

            <option value="0" disabled="true" selected="true">-Select-</option>
{{--            @foreach($prod as $cat)--}}
{{--                <option value="{{$cat->id}}">{{$cat->product_cat_name}}</option>--}}
{{--            @endforeach--}}
            <option value="">Mina</option>

        </select>

        <span>Product Name: </span>
        <select style="width: 200px" class="productname">

            <option value="0" disabled="true" selected="true">Product Name</option>
        </select>

        <span>Product Price: </span>
        <input type="text" class="prod_price">

    </center>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</body>
</html>
