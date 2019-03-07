getCompetitionsStats = (league_id) => {
    fetch('https://apifootball.com/api/?action=get_standings&league_id=' + league_id + '&APIkey=9ac21ea126b0264284f6ba2d4b08bde8d5495c4a351c2fa1f500d6f59e67a542')
      .then(res => res.json())
      .then(res => {
        console.log(res);
        for (var i = 1; 1 < 20; i++) {
            for (var e = 0; e < 19; e++) {
                if (res[e].overall_league_position == i) {
                    var para = document.createElement("p");
                    var node = document.createTextNode(res[e].team_name);
                    para.appendChild(node);
                }
            }
        }
      });
  }

getCompetitionsStats('127');
