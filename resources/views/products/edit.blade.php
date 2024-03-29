@extends('layouts.app')


@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<div class=" w-full">
       
    
      <hr class="bg-gray-700 h-3 mb-2 rounded">
       <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
       
         <form  action="{{route('products.update', ['id' => $product['id']]) }}" method="POST" >
            @method('put')
           @csrf
           <div class="flex flex-col flex-wrap -mb-8 -mr-6 p-8">
               <div class="flex flex-col py-2">
                   <span>Name</span>
                   <input type="text" name="name" id="name" value="{{old('name')}}"  placeholder="Product name" class="border  p-1 rounded-md @error('name') border-red-500 @enderror"/>
                   @error('name')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>

               <div class="flex flex-col py-2">
                   <span>Description</span>
                   <textarea type="text" name="description" value="{{old('description')}}" id="description"   placeholder="Product Description" class="border  p-1 rounded-md @error('description') border-red-500 @enderror"></textarea>
                   @error('description')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
                  
                 
               </div>

               <div class="flex flex-col py-2">
                   <span>Price</span>
                   <input type="number" name="price" value="{{old('price')}}" id="price"  placeholder="Product price" class="border  p-1 rounded-md @error('price') border-red-500 @enderror"/>
                   <!-- @error('price')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror -->
               </div>

               <div class="flex flex-col py-2">
                   <span>Quantity</span>
                   <input type="number" name="quantity" value="{{old('quantity')}}" id="quantity"  placeholder="Product quantity" class="border  p-1 rounded-md @error('quantity') border-red-500 @enderror"/>
                   @error('quantity')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>

               <div class="flex flex-col py-2">
                   <span>Min Stock</span>
                   <input type="number" name="stock_min" value="{{old('stock_min')}}" id="stock_min"  placeholder="Product Minimum Stock" class="border  p-1 rounded-md @error('stock_min') border-red-500 @enderror"/>
                   @error('stock_min')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
           </div>
           <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
               <button type="submit" class="text-indigo-400 bg-blue-500 p-2 rounded-md text-white hover:text-indigo-600" >Save Product</button>
           </div>
         </form>
       </div>
     </div>

     <div class="flex flex-column bg-sky-800">
        <div class="">
          <h1 class="h-4 w-full bg-sky-500"></h1>
        </div>
      
        <div class="flex flex-row justify-evenly">
          <div class="flex flex-column p-2 mt-10">
            <h3 class="font-body text-white text-2xl ml-4 cursor-pointer">Shoppy<span class="text-orange-500">.me</span></h3>
          </div>
            <div class="p-8">
                <h3 class=""><strong>Pour mieux nous connaitre</strong></h3>
                <div class="">
                    <ul>
                        <li><a class="hover:underline" href="#">A propos de <strong>Shoppy</strong></a></li>
                        <li><a class="hover:underline" href="#">Carrières</a></li>
                        <li><a class="hover:underline" href="#"></a>Durabilité</li>
                    </ul>
                </div>
            </div>
            <div class="p-8">
                <h3 class=""><strong>Gagner de l'Argent</strong></h3>
                <div class="">
                    <ul>
                        <li><a class="hover:underline" href="#">Vendez sur <strong>Shoppy</strong></a></li>
                        <li><a class="hover:underline" href="#">Devenez partenaire</a></li>
                        <li><a class="hover:underline" href="#"></a>Faites la promotion de vos produits</li>
                    </ul>
                </div>
            </div>
            <div class="p-8">
                <h3 class=""><strong>Moyens de paiement</strong></h3>
                <div class="">
                    <ul>
                        <li><a class="hover:underline" href="#">Carte de Paiement</a></li>
                        <li><a class="hover:underline" href="#">Paiement en plusieurs fois</a></li>
                        <li><a class="hover:underline" href="#"></a>Cartes Cadeaux</li>
                    </ul>
                </div>
            </div>
            <div class="p-8">
                <h3 class=""><strong>Besoin d'aide ?</strong></h3>
                <div class="">
                    <ul>
                        <li><a class="hover:underline" href="#">Voir vos commandes</a></li>
                        <li><a class="hover:underline" href="#">Suivre vos commandes</a></li>
                        <li><a class="hover:underline" href="#"></a>Tarifs et <br> options de livraison</li>
                        <li><a class="hover:underline" href="#"></a>Retours et <br> remplacements</li>
                        <li><a class="hover:underline" href="#"></a>Infos sur notre <br> market place</li>
                        <li><a class="hover:underline" href="#"></a>Service client</li>
                        <li><a class="hover:underline" href="#"></a>Accessibilité</li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
</body>
</html>

@endsection