<div>
     <h2>Add New Shop</h2>
 </div>
 <div>
     <a href="{{ route('shops.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('shops.store') }}" method="POST">
     @csrf
 
     <div>
         <strong>Name:</strong>
         <input type="text" name="name" placeholder="Name">
     </div>
     <div>
         <strong>Description:</strong>
         <textarea style="height:150px" name="description" placeholder="Description"></textarea>
     </div>
     <div>
         <strong>Price:</strong>
         <input type="number" name="price" placeholder="Price">
     </div>
     <div>
         <strong>Postalcode:</strong>
         <input type="number" name="postalcode" placeholder="postalcode">
     </div>

     <div>
         <strong>Address:</strong>
         <input type="text" name="address" placeholder="address">
     </div>
     <div>
         <strong>Operating Hours:</strong>
         <input type="time" name="operating_hours" placeholder="operating_hours">
     </div>

     <div>
         <strong>Category:</strong>
         <select name="category_id">
         @foreach ($categories as $category)
         <option value="{{ $category->id }}">{{ $category->name }}</option>
         @endforeach
         </select>
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>