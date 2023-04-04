@extends('layouts.master')

@section('content')


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
    <br> <br>
    <br> <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
        <div class="member2" >
         Frequently Asked Questions
        </div>
    
            
            {{ $faqs->links() }}

            @foreach ($faqs as $faq) 
              <div class="faq-container">
            
                <div class="faq">
                    <h2 class="question">{{$faq->title}}</h2>
                    <div class="answer">
                      <p>{!! $faq->content !!}  </p>
                    </div>
                  </div>
                </div>    
            @endforeach  
            {{ $faqs->links() }}
        </div>  
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

 @endsection