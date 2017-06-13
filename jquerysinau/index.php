<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar jQuery</title>
  <script src="js/jquery-3.2.1.js"></script>
  <script>
     $(document).ready(function() {
       $("#tombol").click(function() {
           $(this).after('<p>Sedang Belajar jQuery di Duniailkom</p>');
       });
     });
     </script>
  </head>
  <body>
    <h1>Belajar jQuery di Duniailkom</h1>
    <button id="tombol">Click Me!</button>
  </body>
</html>
