<x-app-layout>

    <div class="container py-8">
        @foreach ($categories as $category)
            
   
        <section>
            
           
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                    <h2 class="h3 mb-0 pt-3 me-3">    {{$category->name}}</h2>
                    <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="{{route('categories.show',$category)}}">Ver mas<i
                                class="bi bi-plus-square-fill ms-1 me-n1"></i></a></div>
                </div>
            

            @livewire('category-products', ['category' => $category])
        </section>

        @endforeach
    </div>
@push('carusel-productos')
    
    <script>
        Livewire.on('carusel',function(id){

 $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

        });
 
   
      </script>
@endpush
</x-app-layout>