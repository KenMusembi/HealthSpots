<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="response"> API response here</div>

    <script>
  //   fetch('api/v1/hospitals') .then(function(response) {response.text().then(function(data) {document.getElementById('response').innerHTML=data;});}) .catch(function(err) {console.log('Error: ' + err);});

  <script> fetch('api/v1/hospitals') .then(function(response) {response.json().then(function(data) {var str=JSON.stringify(data.cars); document.getElementById('response').innerHTML=str;});}) .catch(function(err) {console.log('Error: ' + err);});</script>
   </script>
  </body>
</html>
