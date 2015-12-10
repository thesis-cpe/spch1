<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <input type="checkbox" id="yourBox" />
        <input type="text" id="yourText" disabled /><input type="text" id="yourText2" disabled />
        
        
      
        <script>
            document.getElementById('yourBox').onchange = function () {
                document.getElementById('yourText').disabled = !this.checked;
                document.getElementById('yourText2').disabled = !this.checked;
            };
        </script>
    </body>
</html>
