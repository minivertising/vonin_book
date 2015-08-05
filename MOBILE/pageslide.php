
<!doctype html>
<html lang="en">
<head>
<title>jQuery PageSlide Demo</title>
 
    <link rel="stylesheet" href="../lib/pageslide/pageslide.css">
<style>
#modal{display:none;}
</style>
</head>
<body>
<div id="content">
<ul>
<li>
<a href="#modal2" class="second">Slide to the left, and display hidden content from this page in a modal pane.</a>
</li>
</ul>
<div id="modal2">
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type='text/javascript' src='../lib/pageslide/pageslide.js'></script>
<script>
        /* Slide to the left, and make it model (you'll have to call $.pageslide.close() to close) */
        $(".second").pageslide({ direction: "left", modal: true });
    </script>
 
 
</body>
</html>
