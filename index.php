<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=”utf-8” />
            
        <title> 
            Gems and Stones
        </title>
        
        <link href = "css/styles.css" rel = "stylesheet" type = "text/css" />
        
    </head>
    
    <body>
        <header>
            <h1>
                <div id = "topText">
                    Choose a gem!
                </div>
            </h1>
            <main>
                <div id = "welcomeText">
                    <p>
                        Once you choose a gem, I will give you a quick backround behind it.
                    </p>
                </div>
            </main>
        </header>
        
        
        <main>
            <div id = "Rocks">
            
            <form action="validation.php" method="post">
                <div id = "name">
                Enter your name:
                <input name="firstname" type="name">
                </div>
                
                <div id = "Rose">
                       <input type="radio" name="Rocks" value = "Rose_Quartz"  id = "Rose_Quartz"/>
                       <label for="Rose_Quartz">
                           <img src="/forms/img/Rose_Quartz.png">
                       </label>
                       </div>
                       
                   
                       <input type="radio" name="Rocks" value = "Onyx" id = "Onyx"/>
                       <label for="Onyx">
                           <img src="/forms/img/Onyx.png">
                       </label>
                  
                   
                   <div id = "Lapis">
                       <input type="radio" name="Rocks" value = "LapisLazuli" id = "LapisLazuli"/>
                   <label for="LapisLazuli">
                           <img src="/forms/img/LapisLazuli.png" >
                       </label>
                        </div>
                   
                
                <br>  
                <div id = "choice">
                Choose a card suit:
                <select name="Response">
                    <option value= "Select"> Select...</option>
                    <option value="heart"> Heart </option>
                    <option value="diamond"> Diamond </option>
                    <option value= "spade"> Spade </option>
                    <option value= "club"> Club </option>
                </select>
                </div>
                
                <div id = "select">
                <input type="submit" name="submit"/>
                </div>
                
                </form>
            </div>
            
        </main>
    </body>
</html>