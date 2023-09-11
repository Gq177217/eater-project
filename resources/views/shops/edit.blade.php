<!--createアクションの時と同じように、フォームを作成しています。異なっている点としては、value="{{ $shop->name }}"のように初期値に既存の商品のデータを使用しているところです。-->

<div>
     <h2>Edit Shop</h2>
 </div>
 <div>
     <a href="{{ route('shops.index') }}"> Back</a>
 </div>
 
 <!--@method('PUT')としてリクエストがPUTであると分かるようにし、action="{{ route('shops.update',$shop->id) }}"でリクエストの送信先を指定-->

 <form action="{{ route('shops.update',$shop->id) }}" method="POST">
     @csrf
     @method('PUT')
 
     <div>
         <strong>Name:</strong>

         <!--inputタグなどの初期値.value="{{ $shop->name }}"のように初期値に既存の商品のデータを使用. /shops/:idにPUTでリクエストを送ることでデータを更新.-->
         <input type="text" name="name" value="{{ $shop->name }}" placeholder="Name">
     </div>
     <div>
         <strong>Description:</strong>
         <textarea style="height:150px" name="description" placeholder="description">{{ $shop->description }}</textarea>
     </div>
     <div>
         <strong>Price:</strong>
         <input type="number" name="price"  value="{{ $shop->price }}">
     </div>
     <div>
         <strong>Category:</strong>
         <select name="category_id">
         @foreach ($categories as $category)
             @if ($category->id == $shop->category_id)
             <!--selectedを追加することで登録済みの商品のカテゴリ名を表示-->
                 <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
             @else
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
             @endif
         @endforeach
         </select>
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>