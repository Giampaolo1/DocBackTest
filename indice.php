<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
      <p> [{{idNode}}] Level:{{ level }} iLeft:{{ iLeft }} iRight:{{ iRight }}</p>
    </script>

    <title>Organizational Chart</title>
  </head>
  <body>

    <div id="container">
    </div>

  </body>
</html>
