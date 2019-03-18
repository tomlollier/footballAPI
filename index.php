<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>WFootball API</title>
    <link rel="stylesheet" href="index.css" />
    <script src="index.js"></script> 
    <script>
      getURL = (league_id) => {   
        window.location.href = "league.php?league_id=" + league_id; 
      }

      getListOfMatchToday(127);
      getListOfMatchToday(128);
      getListOfMatchToday(62);
      getListOfMatchToday(109);
      getListOfMatchToday(127);
      getListOfMatchToday(79);

      getListOfMatchLast(127);
      getListOfMatchLast(128);
      getListOfMatchLast(62);
      getListOfMatchLast(109);
      getListOfMatchLast(127);
      getListOfMatchLast(79);
    </script>
  </head>

  <body>
      <header>
          <div id="header">
              <div class="elementHeader"><a href="#" onclick="getURL(127);" onclick="changeTitle();" id="ligue1">Ligue 1</a></div>
              <div class="elementHeader"><a href="#" onclick="getURL(128);" onclick="changeTitle();" id="ligue2">Ligue 2</a></div>
              <div class="elementHeader"><a href="#" onclick="getURL(62);" onclick="changeTitle();" id="premierLeague">Premier League</a></div>
              <div class="elementHeader"><a href="index.php" id="wfb" id="actif">WFB</a></div>
              <div class="elementHeader"><a href="#" onclick="getURL(109);" onclick="changeTitle();" id="liga">Liga</a></div>
              <div class="elementHeader"><a href="#" onclick="getURL(79);" onclick="changeTitle();" id="serieA">Serie A</a></div>
              <div class="elementHeader"><a href="bundesliga.html" id="dundesliga">Bundesliga</a></div>
          </div>
            
      </header>
      <div id="bodyContent">
          <section id="leftSection">
            <div id="pubLeftSection">
              
            </div>
            <nav>
              <ul id="listMatchHtmlLast" class="listMatchHtml">

              </ul>
            </nav>
          </section>

          <div id="lineLeftSection"></div>
          
          <section id="centerSection">
            <div id="lineCenterSection"></div>
          </section>
         
          <div id="lineRightSection"></div>

          <section id="rightSection">
            <div id="pubRightSection">
              
            </div>
            <nav>
              <ul id="listMatchHtmlToday" class="listMatchHtml">

              </ul>
            </nav>
          </section>
      </div>
  </body>
  <script>
  
  </script>
</html>