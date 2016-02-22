<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checkboxes and radio buttons customization (jQuery and Zepto) plugin</title>
  <meta charset="utf-8">
  <meta content="width=device-width" name="viewport">
  <link href="./css/custom.css?v=1.0.2" rel="stylesheet">
  <link href="../skins/all.css?v=1.0.2" rel="stylesheet">
  <script src="./js/jquery1.js"></script>
  <script src="../icheck.js?v=1.0.2"></script>
  <script src="./js/custom.min.js?v=1.0.2"></script>
</head>
<body>
  <div class="layout clear">
  <h2><B><U>FILTER CONTACTS</H2>
    
    <div class="feature">
     

      <div class="skin skin-polaris">
        
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
             
              <ul class="list">
                <li>
                  <input tabindex="21" type="checkbox" id="polaris-checkbox-1">
                  <label for="polaris-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="22" type="checkbox" id="polaris-checkbox-2" checked>
                  <label for="polaris-checkbox-2">Checkbox 2</label>
                </li>
               
              </ul>
                          </div>
           
            <script>
            $(document).ready(function(){
              $('.skin-polaris input').iCheck({
                checkboxClass: 'icheckbox_polaris',
                radioClass: 'iradio_polaris',
                increaseArea: '-10%'
              });
            });
            </script>
          </dd>
         
          <dd>
            
           
          
        </dl>
		<div>
				  <button type="button" class="btn btn-success">SEND</button>
				  </div>
      </div>
      
</body>
</html>
