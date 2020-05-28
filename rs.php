<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
            <div class="row content-form">
                <div class="col col-md-10 mr-md-auto ml-md-auto">
                          <div id="loading">
                              <img src="img/spinner.gif">
                        </div> 
                </div>
            </div> 
</body>
</html>



<script>
     const div = document.createElement('div');

     const spinner = document.querySelector('#loading img');
     spinner.style.display = 'block';

     setTimeout(function() {  
          spinner.style.display = 'none';
          // Insert this into the HTML
          result.appendChild(div)
     },  3000);


}
</script>