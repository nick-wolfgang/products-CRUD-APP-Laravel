

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="border-8 h-full bg-[url('../../../public/images/very-light-blue')]">
    
    <div class="mx-6 pt-6">
        <div class="align-center items-center justify-center bg-gray-200 p-4 bg-opacity-50 mb-6 h-20 rounded">
            <img class="h-10 z-0 m-0 p-0" src="{{asset('images/avatar2.jpg')}}" alt=""> 
            <div class="flex items-end">
                <h1 class=" text-sm font-bold w-auto">{{Auth::user()->name}}</h1>
                <div class="h-4 w-4 bg-green-500 rounded-full mr-4 z-10 border-2 border-gray-100"></div>
            </div>
        </div>
        <span class="">
            <a href="{{ route('products.index') }}">
                {{-- <form action="{{ route('products.search', ['name' => $product['name']]) }}" method="get">
                    <input type="text" name="name" id="name">
                </form> --}}
                <img src="../../../public/images/search-icons.png" alt="" class="">
                <input type="text" name="name" id="name" class="
                appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md 
                focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                 placeholder="Search products">
            </a>
        </span>
        <div class="">
            <h4 class="text-white hover:font-bold pt-10 text-base"><a href="{{ route('products.index') }}">Products List</a></h4>
            <hr class="mb-1">
            <h4 class="text-white hover:font-bold pt-10 text-base"><a href="{{ route('products.index') }}">About</a></h4>
            <hr class="mb-1">
            <h4 class="text-white hover:font-bold pt-10 text-base"><a href="{{ route('products.index') }}">Contact</a></h4>
            <hr class="mb-1">
        </div>
 
    </div>
</body>
</html>