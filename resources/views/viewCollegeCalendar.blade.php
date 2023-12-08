@extends('layouts.master')

@section('content')


<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
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
        <div class="calendar" id='calendar'></div>
</div>

 @endsection