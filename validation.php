<html>
<body>
    <link href = "css/styles.css" rel = "stylesheet" type = "text/css" />


<?php
    if($_POST["firstname"] == "")
    {
       echo "You did not enter a name.";
    }
    
    elseif (!$_POST["Rocks"]) {
        echo "You did not enter a rock.";
    }
    
    elseif ($_POST["Response"] == "Select") {
        echo "You did not choose a suit.";
    }
    else {
        echo "Welcome ".$_POST["firstname"]."<br>";
        echo "You have selected: ".$_POST['Rocks']."<br>";
        if($_POST["Rocks"] == "Rose_Quartz")
        {
            echo '<img src="/forms/img/Rose_Quartz.png"/>';
            echo "Rose Quartz are usually used to help with a person's heart chakra.";
            echo "<br>";
        }
        
        elseif ($_POST["Rocks"] == "Onyx") 
        {
            echo '<img src="/forms/img/Onyx.png"/>';
            echo "Onyx is usually helps one find their inner self.";
            echo "<br>";
        }
        
        else {
            echo '<img src="/forms/img/LapisLazuli.png"/>';
            echo "Lapis Lazuli helps bring peace to one self.";
            echo "<br>";
        }
        echo "You chose: ".$_POST["Response"]."<br>";   
    }
?>



</body>
</html>