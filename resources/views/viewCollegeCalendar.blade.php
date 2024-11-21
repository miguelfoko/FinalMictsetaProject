@extends('layouts.master')

@section('content')


<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperCalendar">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Tvet College Times</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/resources">Resources</a></li>
      <li>College Calendar</li>
    </ul>
  </div>
</div>

<?php $Events=[]; ?> 
    @foreach ($collegecalendar as $ccalendar) 
      <?php
        //echo 'Before: '.$ccalendar->enddate;
        $start = strtotime($ccalendar->startdate);
        $stop=strtotime($ccalendar->enddate);

        //echo 'Start: '.date('Y-M-d', $start);

        $dd=new DateTime($ccalendar->startdate);
        $dd->modify('+1 day');

        $dd2=new DateTime($ccalendar->enddate);
        $dd2->modify('+2 day');

        //echo '<br> Stop: '.$dd->format('Y-M-d');
        $a=array("title"=>$ccalendar->eventtitle,
              "start"=>$dd->format('Y-M-d'),
              "end"=>$dd2->format('Y-M-d'));
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
<br><br>
        <div class="calendar" id='calendar'></div>
</div>

 @endsection