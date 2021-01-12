<div class="container1" style="text-align: center; margin-left:250px; margin-top:-350px;">
        <img src="assets/img/brand/logobg.png" width="300px" height="250px">
        <br/><br/>
        <small> Use the form below to find out about your next menstruation cycle</small><br/>
        

        <!-- search box -->
        <form method="POST" action=""> 
        <div class="search">
            <input type="date" class="input" name="SearchBox">
            <!--<img class="voiceSearch" src="https://www.gstatic.com/images/branding/googlemic/2x/googlemic_color_24dp.png">-->
        </div>
        <!-- buttons -->
        <div class="btn">
            <button type="submit" class="btns">Calculate</button>
            <a href="https://play.google.com/store/apps/details?id=com.thealphamerc.flutter_healthcare_app"><button class="btns"> Download  App</button></a>
        </div>
        <br/><br/>
        </form>
        <?php

     $num1 = $_POST["SearchBox"];
     $text ="Your next menstruation period will likely begin on";
     $text2 ="Your next menstruation period will likely end on";
     $text3 ="Your next Ovulation Day will likely end on";
    //$num2 = date('Y-m-d', strtotime($num1. ' + 1 days'));;
    
     echo "<p class='subtitle'>$text: " ;  echo date('F d,Y', strtotime($num1. ' + 28 days'));
    

     echo "<p class='subtitle'>$text2: " ;
     echo date('F d,Y', strtotime($num1. ' + 33 days'));

     echo "<p class='subtitle'>$text3: " ;
     echo date('F d,Y', strtotime($num1. ' + 15 days'));

    



     
?>
        
        
        </h2>
    </div>