<!-- <a href="{{ route('shops.create') }}"> Create New shop</a>では、商品データの新規登録ページへのリンクを作成しています-->
<!--route('shops.create')と記述すれば、/shops/createへのリンクを作成してくれます-->
@extends('layouts.common')
@include('layouts.header')
<a href="{{ route('shops.create') }}"> Create New Shop</a>
 
 <table>
     <tr>
         <th>Name</th>
         <th>Description</th>
         <th>Price</th>
         <th>Postalcode</th>
         <th>Address</th>
         <th>OperatingHours</th>
         <th>Category ID</th>
         <th >Action</th>
     </tr>

     <!-- @foreach〜@endforeachの繰り返し処理を行うことで、短いコードで複数の商品を表示すること-->

     @foreach ($shops as $shop)
     <tr>
         <td>{{ $shop->name }}</td>
         <td>{{ $shop->description }}</td>
         <td>{{ $shop->price }}</td>
         <td>{{ $shop->postalcode }}</td>
         <td>{{ $shop->address }}</td>
         <td>{{ $shop->operating_hours }}</td>
         <td>{{ $shop->category_id }}</td>
 
         <td>
        <!--<form>タグを使って、削除リクエストを送信するフォームを作成./shops/:idにDELETEリクエストを送ることでデータを削除-->
         <form action="{{ route('shops.destroy',$shop->id) }}" method="POST">

             <a href="{{ route('shops.show',$shop->id) }}">Show</a>
             <a href="{{ route('shops.edit',$shop->id) }}">Edit</a>

             @csrf
        <!--@method('DELETE')としてリクエストがDELETEであると分かるようにし、action="{{ route('shops.destroy',$shop->id) }}"でリクエストの送信先を指定-->   

                 @method('DELETE')
                 <button type="submit">Delete</button>
             </form>
         </td>
     </tr>
     @endforeach
 </table>
 @endsection

 @include('layouts.submenu')
 @include('layouts.footer')