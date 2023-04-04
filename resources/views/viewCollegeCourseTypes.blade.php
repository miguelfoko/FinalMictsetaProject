@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Trainers</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

     <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <br><br>
      <div class="container" data-aos="fade-up">
      <div class="member2" >
         College Course Type
        </div>
      @foreach ($collegecoursetype as $cctype) 
          <h3>Overview </h3>
          {!! $cctype->overview !!}

          <br>
          
          <h3>Industry  Fields </h3>
          {!! $cctype->industryFields !!}

          <br>
          
          <h3>Types of courses </h3>
          {!! $cctype->typeOfCourses !!}
      @endforeach
      @foreach ($coursetype as $ctype)
           <table class="table table-bordered">
                <tr bg-color="cyan" class="question">
                    <td><b>Course Type</b></td> 
                    <td width=80%><b>{!! $ctype->type !!}</b></td>
                </tr>
                    <td><b>Description</b></td> 
                    <td with=17%>{!! $ctype->description !!}</td>
                </tr>
                    <td><b>Duration</b></td>  
                    <td with=17%>{!! $ctype->duration !!}</td>
                </tr>
                    <td><b>Qualification</b></td> 
                    <td width=17%>{!! $ctype->qualification !!}</td>
                </tr>
                    <td><b>Admission Requirements</b></td> 
                    <td width=17%>{!! $ctype->admissionRequirements !!}</td>
                </tr>
                    <td><b>Resources</b></td> 
                    <td width=17%>{!! $ctype->resources !!}</td>
                </tr>
        </table>
        @endforeach
        {{ $coursetype->links() }}
      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->
  @endsection