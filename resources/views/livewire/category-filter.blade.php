<div>
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">{{$category->name}}</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <!-- Sidebar-->
          <aside class="col-lg-4">
            <!-- Sidebar-->
            <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar" style="max-width: 22rem;">
              <div class="offcanvas-cap align-items-center shadow-sm">
                <h2 class="h5 mb-0">Filters</h2>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                <!-- Categories-->
                <div class="widget widget-categories mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Categories</h3>
                  <div class="accordion mt-n1" id="shop-categories">
      
                    <!-- Watches-->
                    <div class="accordion-item">

                        @foreach ($category->subcategories as $subcategory)
                               <h3 class="accordion-header"><a class="accordion-button collapsed" href="#watches"  >{{$subcategory->name}}</a></h3> 
                        @endforeach
                  
                  
                    </div>
                    <!-- Accessories-->
                  
                  </div>
                </div>
                <!-- Price range-->
             
                <!-- Filter by Brand-->
             
                <!-- Filter by Size-->
              
                <!-- Filter by Color-->
               
              </div>
            </div>
          </aside>
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
            
              <div class="d-flex pb-3"></div>
              <div class="d-none d-sm-flex pb-3"><a class="btn btn-icon nav-link-style nav-link-light me-2" href="shop-grid-ls.html"><i class="bi bi-grid-fill "></i></a><a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100" href="#"><i class="b    "></i></a></div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">
                <!-- Product-->

                @foreach ($products as $product)
                    
           
                <div class="col-md-4 col-sm-6 px-2 mb-4">
                  <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="{{ Storage::url($product->images->first()->url) }}" alt="Product"></a>
                    <div class="card-body py-2">
                      <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{$product->name}}</a></h3>
                      <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">{{$product->price}}</span></div>
                       
                      </div>
                    </div>
                    <div class="card-body card-body-hidden">
                  
                      <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                     
                    </div>
                  </div>
                  <hr class="d-sm-none">
                </div>
                @endforeach
            </div>
            <div class="border-top pt-3 mt-3"></div>
            <!-- Product-->
  
          
            {{$products->links()}}
           
           
          </section>
        </div>
      </div>
</div>
