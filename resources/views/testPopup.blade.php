<html lang="en">
<head>
    <title>How to Add Popup modal in jquery LaravelAmit</title>  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <style type="text/css">
    #popup{
        display: none;
    }
    </style>
</head>
<body>
<button>Open Modal</button>
<div id="popup" title="DevOpsSchool">
  <p class="text-justify px-2">DevOpsSchool have well-equipped high-tech infrastructure to conduct DevOps Training with lab facility and real time projects. Our DevOps Course is designed as per industry trend which helps professionals to achieve their career goal with industry growth.</p>
</div>
<script type="text/javascript">
    $("button").click(function(){
        $( "#popup" ).dialog();
    });
</script>
</body>
</html>