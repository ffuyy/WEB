<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>炸鍋</title>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>    
    <script>
        function progress() {
        var store = "fried";
        var sel = $("#sel").val();
        var id = $("#id").val();
        var bdaytime= $("#bdaytime").val();
        $.ajax({
        url: "post.php",
        data: {
            store : store,
            sel : sel,
            id : id,
            bdaytime : bdaytime
            },
        type: "POST",
        datatype: "html",
            success: function( output ) {
           $( "#out" ).html(output);
            },
        error : function(){
            window.alert( "Request failed." );
        }
        });
        document.getElementById("submit").onclick = null;
    }
    </script>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <style>
.button-54 {
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  color: #000;
  cursor: pointer;
  border: 3px solid;
  padding: 0.25em 0.5em;
  box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-54:active {
  box-shadow: 0px 0px 0px 0px;
  top: 5px;
  left: 5px;
}

@media (min-width: 768px) {
  .button-54 {
    padding: 0.25em 0.75em;
  }
}
    </style>
</head>
<body style ="padding-top: 0px; background-color: rgb(238,238,238);">
    <section class="bg-gray200 pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <article class="card">        
                <div class="card-body" style ="text-align: center;">
                <h1 class="card-title display-4">炸鍋</h1><br>
    				<form action = "#" method = "post">
                    <h2>1. 沙茶鍋 $89</h2>
                        <h2>2. 鮮味鍋 $89</h2>
                        <h2>3. 咖哩鍋 $89</h2>
                        <h2>4. 麻辣鍋 $89</h2>
                        <h2>5. 菇菇蔬菜鍋 $89</h2>
                        <h2>6. 海鮮烏龍麵 $70</h2>
                        <h2>7. 海鮮意麵 $70</h2>
                        <h2>8. 海鮮泡飯 $70</h2>
                        <h2>9. 泡菜鍋 $99</h2>
                        <h2>10. 番茄鍋 $99</h2>
						<p>餐點號碼 : <input type = "text" name = "id" id = "id" ></p>
						<input class="button-54" type = "button" id = "submit" value = "submit" onclick="progress()">
					</form>
                </div>
                </article>
            </div>
            <p id="out"></p>
        </div>
    </section>
</body>
    
</html>