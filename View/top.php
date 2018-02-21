<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Isaiah Fire</title>

        <meta name="viewport" content="width=device-width">
        <script src="modernizr.custom.40753.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="../Namespace/styles.css">
        <link rel="icon" sizes="192x192" href="../Namespace/isaiahFireImage.png">
    </head>
    <body>
        <div class="container">
            <nav class="sitenavigation">
                <ul>
                    <li style="margin: 0em 0em 0em 4em; border-left: 1px solid #bbb" class="dropdown">
                        <a href="top.php" class="dropbtn">The Beginning</a>
                        <div class="dropdown-content">

                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Champions</a>
                        <div class="dropdown-content">
                            <a href="favChamps.php">Favorites</a>
                            <a href="hateChamps.php">Most Hated</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="money.php" class="dropbtn">Finances</a>
                    </li>
                    <li style="float: right; padding: 0em 4em 0em 0em;" class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Isaiah</a>
                        <div class="dropdown-content">
                            <a href="index.php">Home</a>
                            <a href="quiz.php">Quiz</a>
                        </div> 
                    </li>
                </ul>
            </nav>
            <article>
                <div class="headerBar" onclick="showHide('top')">
                    <h3>Top Lane</h3>
                </div>
                <div id="top" class="hidContent">
                    Top lane is favorable for a summoner's use of Teleport, allowing them to apply global pressure and support teammates.<br>
                    Some champions that I prefer in the top lane are:
                    <ul>
                        <li>Shen</li>
                        <li>Gnar</li>
                        <li>Mordekaiser</li>
                    </ul>
                </div>
                <div class="headerBar" onclick="showHide('mid')">
                    <h3>Middle Lane</h3>
                </div>
                <div id="mid" class="hidContent">
                    Middle lane is where the Ability Power (AP) Carries lane. This lane is favored for a champions ability to pull a team 
                    to victory.<br>
                    Some champions I prefer in the middle lane are:
                    <ul>
                        <li>Ziggs</li>
                        <li>Xerath</li>
                        <li>Orianna</li>
                    </ul>
                </div>
                <div class="headerBar" onclick="showHide('jg')">
                    <h3>Jungle</h3>
                </div>
                <div id="jg" class="hidContent">
                    Jungling is my favorite roll in League of Legends. The Jungler's job is to clear camps for extra buffs within the jungle and to 
                    roam to other lanes that are falling behind for support. This lane is favored for being able to keep other laners safe and 
                    ahead of the enemy team.<br>
                    Some champions I prefer in the jungle are:
                    <ul>
                        <li>Wukong</li>
                        <li>Shyvanna</li>
                        <li>Ekko</li>
                    </ul>
                </div>
                <div class="headerBar" onclick="showHide('adc')">
                    <h3>ADC</h3>
                </div>
                <div id="adc" class="hidContent">
                    ADC is the roll in which the All Damage Carry (ADC) lanes with the support. All damage carries deal massive ammounts of damage
                    but have low health and a dependant on another champion to protect them. <br>
                    Some champions I prefer as ADC are:
                    <ul>
                        <li>Ashe</li>
                        <li>Kalista</li>
                        <li>Lucian</li>
                    </ul>
                </div>
                <div class="headerBar" onclick="showHide('sup')">
                    <h3>Support</h3>
                </div>
                <div id="sup" class="hidContent">
                    Support is the roll assigned to bot lane with the ADC. Early in the game their job is almost solely to project the ADC and 
                    initiate fights however later in the game their place is to front line or "peel" for the team in large scale fights.<br>
                    Some champions I prefer as support are:
                    <ul>
                        <li>Alistar</li>
                        <li>Nautilus</li>
                        <li>Thresh</li>
                    </ul>
                </div>
            </article>
            <aside>
                <figure>
                    <img src="../Namespace/isaiahFireImage.png">
                </figure>
            </aside>
        </div>
        <script src="../Control/script.js"></script>
        <script src="../Namespace/jquery-1.12.4.min.js"></script>
    </body>
</html> 