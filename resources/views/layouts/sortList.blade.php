@section('submenu')

<nav class="navbar navbar-expand-md navbar-light shadow-sm foodie-header-container">
   <div class="container">
     <a class="navbar-brand" href="{{ url('/') }}">

     <!--Logo and size-->
     <img src="{{asset('img/logo.png')}}" alt="Foodie" style="width: 100px; height: auto;">  

     </a>
     <form class="row g-1">
       <div class="col-auto">
       <h2 class="front-page-comment">おいしいお店を探す</h2>
         <input class="form-control foodie-header-search-input" placeholder="店名" >
       </div>
       <div class="col-auto">
         <button type="submit" class="btn foodie-header-search-button"><i class="fas fa-search foodie-header-search-icon"></i></button>
       </div>
       
       <div>
      <form action="#" method="GET">
        <select class="front-page-custum-pull" name="category" id="category">
          <option value="">カテゴリ</option>
          <option value="居酒屋">居酒屋</option>
          <option value="焼肉">焼肉</option>
          <option value="すし">すし</option>
          <option value="イタリアン">イタリアン</option>
          <option value="メキシカン">メキシカン</option>
          <option value="居酒屋">居酒屋</option>
          <option value="焼肉">焼肉</option>
          <option value="すし">すし</option>
          <option value="イタリアン">イタリアン</option>
          <option value="メキシカン">メキシカン</option>
      </select>
      <input class="front-search-button" type="submit" name="submit" value="検索" />
    </form>
     </div>
     </form>

     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
       <span class="navbar-toggler-icon"></span>
     </button>
 
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <!-- Right Side Of Navbar -->
       <ul class="navbar-nav ms-auto mr-5 mt-2">
         <!-- Authentication Links -->
         @guest

         <hr>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
         </li>
         <li class="nav-item mr-5">
           <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-shopping-cart"></i></a>
         </li>
         @else
         <li class="nav-item mr-5">
           <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             ログアウト
           </a>
 
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
           </form>
         </li>
         @endguest
       </ul>
     </div>
   </div>
 </nav>
@endsection