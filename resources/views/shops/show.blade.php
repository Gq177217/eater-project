<!--$shop変数に保存されている商品の名前などを、ビューで表示しています。-->
<div>
     <h2> Show Shop</h2>
 </div>
 <div>
     <a href="{{ route('shops.index') }}"> Back</a>
 </div>
 
 <div>
     <strong>Name:</strong>
     {{$shop->name}}
 </div>
 
 <div>
     <strong>Description:</strong>
     {{$shop->description}}
 </div>
 
 <div>
     <strong>Price:</strong>
     {{$shop->price}} 
 </div>

 <div>
     <strong>Postalcode:</strong>
     {{$shop->postalcode}} 
 </div>

 <div>
     <strong>Address:</strong>
     {{$shop->price}} 
 </div>

 <div>
     <strong>OperatingHours:</strong>
     {{$shop->operating_hours}} 
 </div>
