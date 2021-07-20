<section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{{($section1->span1)}}</span>
              <span class="section-heading-lower">{{($section1->span2)}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset('img/'.$section1->imgSrc)}}" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{($section1->p1)}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>