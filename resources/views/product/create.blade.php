<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>crete PRoduct</h1>
    <H1>hi</H1>
    <div>
        @ig($errors->any())
        <ul>
            @foreach(@errors->all() as$error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="save a New Product">
        </div>


    </form>
</body>
</html>