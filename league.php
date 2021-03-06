<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <title>WFootball API</title>
    <script src="league.js"></script>
    <script>
      changeTitle = () => {  

        var idCompetition = '<?php echo $_GET["league_id"]; ?>';
        console.log(idCompetition);
        var whereAddId

        if (idCompetition == 127) {
          document.getElementById("title").innerHTML = "Classement Ligue 1 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("ligue1").id = "actif";
        }

        else if (idCompetition == 128) {
          document.getElementById("title").innerHTML = "Classement Ligue 2 2018-2019";
          document.getElementById("actif").id.remove();
          whereAddId = document.getElementById("ligue2");
          whereAddId.setAttribute("id", "actif");
        }

        else if (idCompetition == 62) {
          document.getElementById("title").innerHTML = "Classement Premier league 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("premierLeague").id = "actif";
        }

        else if (idCompetition == 109) {
          document.getElementById("title").innerHTML = "Classement Liga 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("liga").id = "actif";
        }

        else if (idCompetition == 79) {
          document.getElementById("title").innerHTML = "Classement Serie A 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("serieA").id = "actif";
        }
      }

      changeTitle();
    </script>
    <script>
      var idCompetition = '<?php echo $_GET["league_id"]; ?>';

      getURL = (league_id) => {   
        window.location.href = "league.php?league_id=" + league_id; 
        
      }

      getListOfMatchToday(idCompetition);
      getListOfMatchLast(idCompetition);
      getCompetitionsStats(idCompetition);

    </script>
  </head>

  <body>
      <header>
          <div id="header">
              <div class="elementHeader"><a href="#" onclick="getURL(127);" onclick="changeTitle();" id="ligue1">Ligue 1</a></div>
              <div class="elementHeader"><a href="#" onclick="getURL(128);" onclick="changeTitle();" id="ligue2">Ligue 2</a></div>
              <div class="elementHeader"><a href="#" onclick="getURL(62);" onclick="changeTitle();" id="premierLeague">Premier League</a></div>
              <div class="elementHeader"><a href="index.php" id="wfb">WFB</a></div>
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
                <li>Dernier matchs de la semaine :</li>
              </ul>
            </nav>
          </section>

          <div id="lineLeftSection"></div>
          
          <section id="centerSection">
            <div id="lineCenterSection"></div>
            <div id="tableClassement">
                <h1 id="title">Classement Ligue 1 2018-2019</h1>
                <ul>
                  <div id="indication">
                    <h2 id="equipe">&#201quipe</h2>
                    <h2 id="point">Pts</h2>
                    <h2 id="jour">J.</h2>
                    <h2 id="victoire">V.</h2>
                    <h2 id="nul">N.</h2>
                    <h2 id="defaite">D.</h2>
                  </div>
                  <div class="ligneTableauImpair">
                    <div class="colonne0" id="0Position"><li>1</li></div>
                    <div class="colonne1" id="0Name"><li></li></div>
                    <div class="colonne2" id="0Point"><li></li></div>
                    <div class="colonne3" id="0Day"><li></li></div>
                    <div class="colonne4" id="0Victory"><li></li></div>
                    <div class="colonne5" id="0Null"><li></li></div>
                    <div class="colonne6" id="0Fact"><li></li></div>
                  </div>
                  <div class="ligneTableauPair" >
                    <div class="colonne0" id="1Position"><li>2</li></div>
                    <div class="colonne1" id="1Name"><li></li></div>
                    <div class="colonne2" id="1Point"><li></li></div>
                    <div class="colonne3" id="1Day"><li></li></div>
                    <div class="colonne4" id="1Victory"><li></li></div>
                    <div class="colonne5" id="1Null"><li></li></div>
                    <div class="colonne6" id="1Fact"><li></li></div>
                  </div>
                  <div class="ligneTableauImpair">
                      <div class="colonne0" id="2Position"><li>3</li></div>
                      <div class="colonne1" id="2Name"><li></li></div>
                      <div class="colonne2" id="2Point"><li></li></div>
                      <div class="colonne3" id="2Day"><li></li></div>
                      <div class="colonne4" id="2Victory"><li></li></div>
                      <div class="colonne5" id="2Null"><li></li></div>
                      <div class="colonne6" id="2Fact"><li></li></div>
                    </div>
                    <div class="ligneTableauPair">
                      <div class="colonne0" id="3Position"><li>4</li></div>
                      <div class="colonne1" id="3Name"><li></li></div>
                      <div class="colonne2" id="3Point"><li></li></div>
                      <div class="colonne3" id="3Day"><li></li></div>
                      <div class="colonne4" id="3Victory"><li></li></div>
                      <div class="colonne5" id="3Null"><li></li></div>
                      <div class="colonne6" id="3Fact"><li></li></div>
                    </div>
                    <div class="ligneTableauImpair">
                        <div class="colonne0" id="4Position"><li>5</li></div>
                        <div class="colonne1" id="4Name"><li></li></div>
                        <div class="colonne2" id="4Point"><li></li></div>
                        <div class="colonne3" id="4Day"><li></li></div>
                        <div class="colonne4" id="4Victory"><li></li></div>
                        <div class="colonne5" id="4Null"><li></li></div>
                        <div class="colonne6" id="4Fact"><li></li></div>
                      </div>
                      <div class="ligneTableauPair">
                        <div class="colonne0" id="5Position"><li>6</li></div>
                        <div class="colonne1" id="5Name"><li></li></div>
                        <div class="colonne2" id="5Point"><li></li></div>
                        <div class="colonne3" id="5Day"><li></li></div>
                        <div class="colonne4" id="5Victory"><li></li></div>
                        <div class="colonne5" id="5Null"><li></li></div>
                        <div class="colonne6" id="5Fact"><li></li></div>
                      </div>
                      <div class="ligneTableauImpair">
                          <div class="colonne0" id="6Position"><li>7</li></div>
                          <div class="colonne1" id="6Name"><li></li></div>
                          <div class="colonne2" id="6Point"><li></li></div>
                          <div class="colonne3" id="6Day"><li></li></div>
                          <div class="colonne4" id="6Victory"><li></li></div>
                          <div class="colonne5" id="6Null"><li></li></div>
                          <div class="colonne6" id="6Fact"><li></li></div>
                        </div>
                        <div class="ligneTableauPair">
                          <div class="colonne0" id="7Position"><li>8</li></div>
                          <div class="colonne1" id="7Name"><li></li></div>
                          <div class="colonne2" id="7Point"><li></li></div>
                          <div class="colonne3" id="7Day"><li></li></div>
                          <div class="colonne4" id="7Victory"><li></li></div>
                          <div class="colonne5" id="7Null"><li></li></div>
                          <div class="colonne6" id="7Fact"><li></li></div>
                        </div>
                        <div class="ligneTableauImpair">
                            <div class="colonne0" id="8Position"><li>9</li></div>
                            <div class="colonne1" id="8Name"><li></li></div>
                            <div class="colonne2" id="8Point"><li></li></div>
                            <div class="colonne3" id="8Day"><li></li></div>
                            <div class="colonne4" id="8Victory"><li></li></div>
                            <div class="colonne5" id="8Null"><li></li></div>
                            <div class="colonne6" id="8Fact"><li></li></div>
                          </div>
                          <div class="ligneTableauPair">
                            <div class="colonne0" id="9Position"><li>10</li></div>
                            <div class="colonne1" id="9Name"><li></li></div>
                            <div class="colonne2" id="9Point"><li></li></div>
                            <div class="colonne3" id="9Day"><li></li></div>
                            <div class="colonne4" id="9Victory"><li></li></div>
                            <div class="colonne5" id="9Null"><li></li></div>
                            <div class="colonne6" id="9Fact"><li></li></div>
                          </div>
                          <div class="ligneTableauImpair">
                              <div class="colonne0" id="10Position"><li>11</li></div>
                              <div class="colonne1" id="10Name"><li></li></div>
                              <div class="colonne2" id="10Point"><li></li></div>
                              <div class="colonne3" id="10Day"><li></li></div>
                              <div class="colonne4" id="10Victory"><li></li></div>
                              <div class="colonne5" id="10Null"><li></li></div>
                              <div class="colonne6" id="10Fact"><li></li></div>
                            </div>
                            <div class="ligneTableauPair">
                              <div class="colonne0" id="11Position"><li>12</li></div>
                              <div class="colonne1" id="11Name"><li></li></div>
                              <div class="colonne2" id="11Point"><li></li></div>
                              <div class="colonne3" id="11Day"><li></li></div>
                              <div class="colonne4" id="11Victory"><li></li></div>
                              <div class="colonne5" id="11Null"><li></li></div>
                              <div class="colonne6" id="11Fact"><li></li></div>
                            </div>
                            <div class="ligneTableauImpair">
                                <div class="colonne0" id="12Position"><li>13</li></div>
                                <div class="colonne1" id="12Name"><li></li></div>
                                <div class="colonne2" id="12Point"><li></li></div>
                                <div class="colonne3" id="12Day"><li></li></div>
                                <div class="colonne4" id="12Victory"><li></li></div>
                                <div class="colonne5" id="12Null"><li></li></div>
                                <div class="colonne6" id="12Fact"><li></li></div>
                              </div>
                              <div class="ligneTableauPair">
                                <div class="colonne0" id="13Position"><li>14</li></div>
                                <div class="colonne1" id="13Name"><li></li></div>
                                <div class="colonne2" id="13Point"><li></li></div>
                                <div class="colonne3" id="13Day"><li></li></div>
                                <div class="colonne4" id="13Victory"><li></li></div>
                                <div class="colonne5" id="13Null"><li></li></div>
                                <div class="colonne6" id="13Fact"><li></li></div>
                              </div>
                              <div class="ligneTableauImpair">
                                  <div class="colonne0" id="14Position"><li>15</li></div>
                                  <div class="colonne1" id="14Name"><li></li></div>
                                  <div class="colonne2" id="14Point"><li></li></div>
                                  <div class="colonne3" id="14Day"><li></li></div>
                                  <div class="colonne4" id="14Victory"><li></li></div>
                                  <div class="colonne5" id="14Null"><li></li></div>
                                  <div class="colonne6" id="14Fact"><li></li></div>
                                </div>
                                <div class="ligneTableauPair">
                                  <div class="colonne0" id="15Position"><li>16</li></div>
                                  <div class="colonne1" id="15Name"><li></li></div>
                                  <div class="colonne2" id="15Point"><li></li></div>
                                  <div class="colonne3" id="15Day"><li></li></div>
                                  <div class="colonne4" id="15Victory"><li></li></div>
                                  <div class="colonne5" id="15Null"><li></li></div>
                                  <div class="colonne6" id="15Fact"><li></li></div>
                                </div>
                                <div class="ligneTableauImpair">
                                    <div class="colonne0" id="16Position"><li>17</li></div>
                                    <div class="colonne1" id="16Name"><li></li></div>
                                    <div class="colonne2" id="16Point"><li></li></div>
                                    <div class="colonne3" id="16Day"><li></li></div>
                                    <div class="colonne4" id="16Victory"><li></li></div>
                                    <div class="colonne5" id="16Null"><li></li></div>
                                    <div class="colonne6" id="16Fact"><li></li></div>
                                  </div>
                                  <div class="ligneTableauPair">
                                    <div class="colonne0" id="17Position"><li>18</li></div>
                                    <div class="colonne1" id="17Name"><li></li></div>
                                    <div class="colonne2" id="17Point"><li></li></div>
                                    <div class="colonne3" id="17Day"><li></li></div>
                                    <div class="colonne4" id="17Victory"><li></li></div>
                                    <div class="colonne5" id="17Null"><li></li></div>
                                    <div class="colonne6" id="17Fact"><li></li></div>
                                  </div>
                                  <div class="ligneTableauImpair" class="NoBundesliga">
                                      <div class="colonne0" id="18Position"><li>19</li></div>
                                      <div class="colonne1" id="18Name"><li></li></div>
                                      <div class="colonne2" id="18Point"><li></li></div>
                                      <div class="colonne3" id="18Day"><li></li></div>
                                      <div class="colonne4" id="18Victory"><li></li></div>
                                      <div class="colonne5" id="18Null"><li></li></div>
                                      <div class="colonne6" id="18Fact"><li></li></div>
                                    </div>
                                    <div class="ligneTableauPair" class="NoBundesliga">
                                      <div class="colonne0" id="19Position"><li>20</li></div>
                                      <div class="colonne1" id="19Name"><li></li></div>
                                      <div class="colonne2" id="19Point"><li></li></div>
                                      <div class="colonne3" id="19Day"><li></li></div>
                                      <div class="colonne4" id="19Victory"><li></li></div>
                                      <div class="colonne5" id="19Null"><li></li></div>
                                      <div class="colonne6" id="19Fact"><li></li></div>
                                    </div>
                </ul>
              </div>
            </section>

            <div id="lineRightSection"></div>

            <section id="rightSection">
              <div id="pubRightSection">
              
              </div>
              <nav>
                <ul id="listMatchHtmlToday" class="listMatchHtml">
                  <li>Prochaine match dans la journée :</li>
                </ul>
              </nav>
            </section>
          </div>
  </body>
  <script>
      changeTitle = () => {  

        var idCompetition = '<?php echo $_GET["league_id"]; ?>';
        console.log(idCompetition);

        if (idCompetition == 127) {
          document.getElementById("title").innerHTML = "Classement Ligue 1 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("ligue1").id = "actif";
        }

        else if (idCompetition == 128) {
          document.getElementById("title").innerHTML = "Classement Ligue 2 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("ligue2").id = "actif";
        }

        else if (idCompetition == 62) {
          document.getElementById("title").innerHTML = "Classement Premier league 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("premierLeague").id = "actif";
        }

        else if (idCompetition == 109) {
          document.getElementById("title").innerHTML = "Classement Liga 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("liga").id = "actif";
        }

        else if (idCompetition == 79) {
          document.getElementById("title").innerHTML = "Classement Serie A 2018-2019";
          document.getElementById("actif").id.remove();
          document.getElementById("serieA").id = "actif";
        }

        else if (idCompetition == 117) {
          document.getElementById("actif").id.remove();
          document.getElementById("bundesliga").id = "actif";
          document.getElementById("title").innerHTML = "Classement Bundesliga 2018-2019";
        }
      }

      changeTitle();
    </script>
    <link rel="stylesheet" href="league.css" />
</html>