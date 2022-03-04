<div wire:init="loadProducts">
    @if (count($products))
      <section class="pt-3 pt-md-4">
        <div class="tns-carousel tns-controls-static tns-controls-outside tns-nav-enabled pt-2 mb-8">
            <div class="owl-carousel owl-theme">

                @foreach ($products as $product)
                    <div class="card product-card  ">
                        <div class="product-card-actions d-flex align-items-center">
                            <a class="btn-action nav-link-style me-2" href="#"><i class="ci-compare me-1"></i>compare

                            </a>

                        </div>


                        <a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html">
                            <img src="{{ Storage::url($product->images->first()->url) }}" alt="Product">
                        </a>






                        <div class="card-body py-2 "><a class="product-meta d-block fs-xs pb-1" href="#">Categiora</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v2.html">{{ $product->name }}</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span
                                        class="text-accent">${{ Str::limit($product->price, 20) }}</span></div>

                            </div>
                        </div>

                        <div class="product-floating-btn">
                            <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                    class="ci-cart fs-base ms-1"></i></button>
                        </div>



                    </div>
                @endforeach

            </div>
        </div>
    </section>  
    @else
    <section class="pt-3 pt-md-4">
    <div class="d-flex justify-content-center">
    <div class="spinner-border text-primary " role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
</section> 
    @endif
    
</div>
