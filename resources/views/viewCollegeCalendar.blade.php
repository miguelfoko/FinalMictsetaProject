@extends('layouts.master')

@section('content')


  <main id="main">
      <!-- ======= Pricing Section ======= -->
   
    <?php $Events=[]; ?>
    @foreach ($collegecalendar as $ccalendar) 
      <?php
        $a=array("title"=>$ccalendar->eventtitle,
              "start"=>$ccalendar->startdate,
              "end"=>$ccalendar->enddate);
        array_push($Events,$a);
      ?>
    @endforeach

    <script>
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
           events: <?php echo json_encode($Events); ?>
    });
  });
</script>


      <div class="container" data-aos="fade-up">
      <div class="member2" >
         College Calendar
        </div>
        <div id='calendar'></div>
      </div>
   
  </main><!-- End #main -->

 @endsection