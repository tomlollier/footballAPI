getAPIReponseMatch = (league_id, n, j) => fetch('https://apifootball.com/api/?action=get_events&from=' + n + '&to=' + j + '&league_id=' + league_id + '&APIkey=9ac21ea126b0264284f6ba2d4b08bde8d5495c4a351c2fa1f500d6f59e67a542')
  .then(res => res.json());

getListOfMatchToday = async (league_id) => {
  var d = new Date();
  var n = d.getFullYear() + '-' + 0 + [d.getMonth() + 1] + '-' + [d.getDate() -7];
  var j = d.getFullYear() + '-' + 0 + [d.getMonth() + 1] + '-' + d.getDate();
  const res = await getAPIReponseMatch(league_id, n, j);
  var matchTeam;
  var x , t;
  for (var i = 0; i < res.length; i++) {
    matchTeam = res[i].match_awayteam_name + '-' + res[i].match_hometeam_name + ' (' + res[i].match_time + ')';
    x = document.createElement("LI");
    t = document.createTextNode(matchTeam);
    x.appendChild(t);
    document.getElementById("listMatchHtmlToday").appendChild(x);
  }
}

getListOfMatchLast = async (league_id) => {
  var d = new Date();
  var n = d.getFullYear() + '-' + 0 + [d.getMonth() + 1] + '-' + [d.getDate() - 5];
  var j = d.getFullYear() + '-' + 0 + [d.getMonth() + 1] + '-' + d.getDate();
  const res = await getAPIReponseMatch(league_id, n, j);
  console.log(res);
  var matchTeam;
  var x , t;
  for (var i = 0; i < res.length; i++) {
    matchTeam = res[i].match_awayteam_name + '-' + res[i].match_hometeam_name;
    x = document.createElement("LI");
    t = document.createTextNode(matchTeam);
    x.appendChild(t);
    document.getElementById("listMatchHtmlLast").appendChild(x);
  }
}
