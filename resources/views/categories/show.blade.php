<x-app-layout>
  
<div class="container">
  
     <figure class="mb-4">
   
        <img class=" img-fluid w-100 rounded mx-auto d-block m-5" style="height:20em;object-fit: cover;"  src="{{Storage::url($category->image)}}" alt="">
    </figure>

 
</div>   
@livewire('category-filter', ['category' => $category])
</x-app-layout>