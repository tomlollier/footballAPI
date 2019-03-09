getAPIReponseCompetitionsStats = (league_id) => fetch('https://apifootball.com/api/?action=get_standings&league_id=' + league_id + '&APIkey=9ac21ea126b0264284f6ba2d4b08bde8d5495c4a351c2fa1f500d6f59e67a542')
  .then(res => res.json());

getCompetitionsStats = async (league_id) => {
  const res = await getAPIReponseCompetitionsStats(league_id);
  console.log(res);
  console.log(res["1"].overall_league_position);
  const classement = [
    {
    "position": res["0"].overall_league_position ,
    "day": res["0"].overall_league_payed,
    "name": res["0"].team_name,
    "point": res["0"].overall_league_PTS,
    "victory": res["0"].overall_league_W,
    "fact": res["0"].overall_league_L,
    "null": res["0"].overall_league_D
  },
  {
    "position": res["1"].overall_league_position ,
    "day": res["1"].overall_league_payed,
    "name": res["1"].team_name,
    "point": res["1"].overall_league_PTS,
    "victory": res["1"].overall_league_W,
    "fact": res["1"].overall_league_L,
    "null": res["1"].overall_league_D
  },
  {
    "position": res["2"].overall_league_position ,
    "day": res["2"].overall_league_payed,
    "name": res["2"].team_name,
    "point": res["2"].overall_league_PTS,
    "victory": res["2"].overall_league_W,
    "fact": res["2"].overall_league_L,
    "null": res["2"].overall_league_D
  },
  {
    "position": res["3"].overall_league_position ,
    "day": res["3"].overall_league_payed,
    "name": res["3"].team_name,
    "point": res["3"].overall_league_PTS,
    "victory": res["3"].overall_league_W,
    "fact": res["3"].overall_league_L,
    "null": res["3"].overall_league_D
  },
  {
    "position": res["4"].overall_league_position ,
    "day": res["4"].overall_league_payed,
    "name": res["4"].team_name,
    "point": res["4"].overall_league_PTS,
    "victory": res["4"].overall_league_W,
    "fact": res["4"].overall_league_L,
    "null": res["4"].overall_league_D
  },
  {
    "position": res["5"].overall_league_position ,
    "day": res["5"].overall_league_payed,
    "name": res["5"].team_name,
    "point": res["5"].overall_league_PTS,
    "victory": res["5"].overall_league_W,
    "fact": res["5"].overall_league_L,
    "null": res["5"].overall_league_D
  },
  {
    "position": res["6"].overall_league_position ,
    "day": res["6"].overall_league_payed,
    "name": res["6"].team_name,
    "point": res["6"].overall_league_PTS,
    "victory": res["6"].overall_league_W,
    "fact": res["6"].overall_league_L,
    "null": res["6"].overall_league_D
  },
  {
    "position": res["7"].overall_league_position ,
    "day": res["7"].overall_league_payed,
    "name": res["7"].team_name,
    "point": res["7"].overall_league_PTS,
    "victory": res["7"].overall_league_W,
    "fact": res["7"].overall_league_L,
    "null": res["7"].overall_league_D
  },
  {
    "position": res["8"].overall_league_position ,
    "day": res["8"].overall_league_payed,
    "name": res["8"].team_name,
    "point": res["8"].overall_league_PTS,
    "victory": res["8"].overall_league_W,
    "fact": res["8"].overall_league_L,
    "null": res["8"].overall_league_D
  },
  {
    "position": res["9"].overall_league_position ,
    "day": res["9"].overall_league_payed,
    "name": res["9"].team_name,
    "point": res["9"].overall_league_PTS,
    "victory": res["9"].overall_league_W,
    "fact": res["9"].overall_league_L,
    "null": res["9"].overall_league_D
  },
  {
    "position": res["10"].overall_league_position ,
    "day": res["10"].overall_league_payed,
    "name": res["10"].team_name,
    "point": res["10"].overall_league_PTS,
    "victory": res["10"].overall_league_W,
    "fact": res["10"].overall_league_L,
    "null": res["10"].overall_league_D
  },
  {
    "position": res["11"].overall_league_position ,
    "day": res["11"].overall_league_payed,
    "name": res["11"].team_name,
    "point": res["11"].overall_league_PTS,
    "victory": res["11"].overall_league_W,
    "fact": res["11"].overall_league_L,
    "null": res["11"].overall_league_D
  },
  {
    "position": res["12"].overall_league_position ,
    "day": res["12"].overall_league_payed,
    "name": res["12"].team_name,
    "point": res["12"].overall_league_PTS,
    "victory": res["12"].overall_league_W,
    "fact": res["12"].overall_league_L,
    "null": res["12"].overall_league_D
  },
  {
    "position": res["13"].overall_league_position ,
    "day": res["13"].overall_league_payed,
    "name": res["13"].team_name,
    "point": res["13"].overall_league_PTS,
    "victory": res["13"].overall_league_W,
    "fact": res["13"].overall_league_L,
    "null": res["13"].overall_league_D
  },
  {
    "position": res["13"].overall_league_position ,
    "day": res["13"].overall_league_payed,
    "name": res["13"].team_name,
    "point": res["13"].overall_league_PTS,
    "victory": res["13"].overall_league_W,
    "fact": res["13"].overall_league_L,
    "null": res["13"].overall_league_D
  },
  {
    "position": res["14"].overall_league_position ,
    "day": res["14"].overall_league_payed,
    "name": res["14"].team_name,
    "point": res["14"].overall_league_PTS,
    "victory": res["14"].overall_league_W,
    "fact": res["14"].overall_league_L,
    "null": res["14"].overall_league_D
  },
  {
    "position": res["15"].overall_league_position ,
    "day": res["15"].overall_league_payed,
    "name": res["15"].team_name,
    "point": res["15"].overall_league_PTS,
    "victory": res["15"].overall_league_W,
    "fact": res["15"].overall_league_L,
    "null": res["15"].overall_league_D
  },
  {
    "position": res["16"].overall_league_position ,
    "day": res["16"].overall_league_payed,
    "name": res["16"].team_name,
    "point": res["16"].overall_league_PTS,
    "victory": res["16"].overall_league_W,
    "fact": res["16"].overall_league_L,
    "null": res["16"].overall_league_D
  },
  {
    "position": res["17"].overall_league_position ,
    "day": res["17"].overall_league_payed,
    "name": res["17"].team_name,
    "point": res["17"].overall_league_PTS,
    "victory": res["17"].overall_league_W,
    "fact": res["17"].overall_league_L,
    "null": res["17"].overall_league_D
  }
];

  classement.splice(14, 1);
  classement.sort(function(a, b){return a.position-b.position});
  console.log(classement);

  document.getElementById("0Name").innerHTML = classement["0"].name;
  document.getElementById("1Name").innerHTML = classement["1"].name;
  document.getElementById("2Name").innerHTML = classement["2"].name;
  document.getElementById("3Name").innerHTML = classement["3"].name;
  document.getElementById("4Name").innerHTML = classement["4"].name;
  document.getElementById("5Name").innerHTML = classement["5"].name;
  document.getElementById("6Name").innerHTML = classement["6"].name;
  document.getElementById("7Name").innerHTML = classement["7"].name;
  document.getElementById("8Name").innerHTML = classement["8"].name;
  document.getElementById("9Name").innerHTML = classement["9"].name;
  document.getElementById("10Name").innerHTML = classement["10"].name;
  document.getElementById("11Name").innerHTML = classement["11"].name;
  document.getElementById("12Name").innerHTML = classement["12"].name;
  document.getElementById("13Name").innerHTML = classement["13"].name;
  document.getElementById("14Name").innerHTML = classement["14"].name;
  document.getElementById("15Name").innerHTML = classement["15"].name;
  document.getElementById("16Name").innerHTML = classement["16"].name;
  document.getElementById("17Name").innerHTML = classement["17"].name;

  document.getElementById("0Point").innerHTML = classement["0"].point;
  document.getElementById("1Point").innerHTML = classement["1"].point;
  document.getElementById("2Point").innerHTML = classement["2"].point;
  document.getElementById("3Point").innerHTML = classement["3"].point;
  document.getElementById("4Point").innerHTML = classement["4"].point;
  document.getElementById("5Point").innerHTML = classement["5"].point;
  document.getElementById("6Point").innerHTML = classement["6"].point;
  document.getElementById("7Point").innerHTML = classement["7"].point;
  document.getElementById("8Point").innerHTML = classement["8"].point;
  document.getElementById("9Point").innerHTML = classement["9"].point;
  document.getElementById("10Point").innerHTML = classement["10"].point;
  document.getElementById("11Point").innerHTML = classement["11"].point;
  document.getElementById("12Point").innerHTML = classement["12"].point;
  document.getElementById("13Point").innerHTML = classement["13"].point;
  document.getElementById("14Point").innerHTML = classement["14"].point;
  document.getElementById("15Point").innerHTML = classement["15"].point;
  document.getElementById("16Point").innerHTML = classement["16"].point;
  document.getElementById("17Point").innerHTML = classement["17"].point;

  document.getElementById("0Day").innerHTML = classement["0"].day;
  document.getElementById("1Day").innerHTML = classement["1"].day;
  document.getElementById("2Day").innerHTML = classement["2"].day;
  document.getElementById("3Day").innerHTML = classement["3"].day;
  document.getElementById("4Day").innerHTML = classement["4"].day;
  document.getElementById("5Day").innerHTML = classement["5"].day;
  document.getElementById("6Day").innerHTML = classement["6"].day;
  document.getElementById("7Day").innerHTML = classement["7"].day;
  document.getElementById("8Day").innerHTML = classement["8"].day;
  document.getElementById("9Day").innerHTML = classement["9"].day;
  document.getElementById("10Day").innerHTML = classement["10"].day;
  document.getElementById("11Day").innerHTML = classement["11"].day;
  document.getElementById("12Day").innerHTML = classement["12"].day;
  document.getElementById("13Day").innerHTML = classement["13"].day;
  document.getElementById("14Day").innerHTML = classement["14"].day;
  document.getElementById("15Day").innerHTML = classement["15"].day;
  document.getElementById("16Day").innerHTML = classement["16"].day;
  document.getElementById("17Day").innerHTML = classement["17"].day;

  document.getElementById("0Victory").innerHTML = classement["0"].victory;
  document.getElementById("1Victory").innerHTML = classement["1"].victory;
  document.getElementById("2Victory").innerHTML = classement["2"].victory;
  document.getElementById("3Victory").innerHTML = classement["3"].victory;
  document.getElementById("4Victory").innerHTML = classement["4"].victory;
  document.getElementById("5Victory").innerHTML = classement["5"].victory;
  document.getElementById("6Victory").innerHTML = classement["6"].victory;
  document.getElementById("7Victory").innerHTML = classement["7"].victory;
  document.getElementById("8Victory").innerHTML = classement["8"].victory;
  document.getElementById("9Victory").innerHTML = classement["9"].victory;
  document.getElementById("10Victory").innerHTML = classement["10"].victory;
  document.getElementById("11Victory").innerHTML = classement["11"].victory;
  document.getElementById("12Victory").innerHTML = classement["12"].victory;
  document.getElementById("13Victory").innerHTML = classement["13"].victory;
  document.getElementById("14Victory").innerHTML = classement["14"].victory;
  document.getElementById("15Victory").innerHTML = classement["15"].victory;
  document.getElementById("16Victory").innerHTML = classement["16"].victory;
  document.getElementById("17Victory").innerHTML = classement["17"].victory;

  document.getElementById("0Null").innerHTML = classement["0"].null;
  document.getElementById("1Null").innerHTML = classement["1"].null;
  document.getElementById("2Null").innerHTML = classement["2"].null;
  document.getElementById("3Null").innerHTML = classement["3"].null;
  document.getElementById("4Null").innerHTML = classement["4"].null;
  document.getElementById("5Null").innerHTML = classement["5"].null;
  document.getElementById("6Null").innerHTML = classement["6"].null;
  document.getElementById("7Null").innerHTML = classement["7"].null;
  document.getElementById("8Null").innerHTML = classement["8"].null;
  document.getElementById("9Null").innerHTML = classement["9"].null;
  document.getElementById("10Null").innerHTML = classement["10"].null;
  document.getElementById("11Null").innerHTML = classement["11"].null;
  document.getElementById("12Null").innerHTML = classement["12"].null;
  document.getElementById("13Null").innerHTML = classement["13"].null;
  document.getElementById("14Null").innerHTML = classement["14"].null;
  document.getElementById("15Null").innerHTML = classement["15"].null;
  document.getElementById("16Null").innerHTML = classement["16"].null;
  document.getElementById("17Null").innerHTML = classement["17"].null;

  document.getElementById("0Fact").innerHTML = classement["0"].fact;
  document.getElementById("1Fact").innerHTML = classement["1"].fact;
  document.getElementById("2Fact").innerHTML = classement["2"].fact;
  document.getElementById("3Fact").innerHTML = classement["3"].fact;
  document.getElementById("4Fact").innerHTML = classement["4"].fact;
  document.getElementById("5Fact").innerHTML = classement["5"].fact;
  document.getElementById("6Fact").innerHTML = classement["6"].fact;
  document.getElementById("7Fact").innerHTML = classement["7"].fact;
  document.getElementById("8Fact").innerHTML = classement["8"].fact;
  document.getElementById("9Fact").innerHTML = classement["9"].fact;
  document.getElementById("10Fact").innerHTML = classement["10"].fact;
  document.getElementById("11Fact").innerHTML = classement["11"].fact;
  document.getElementById("12Fact").innerHTML = classement["12"].fact;
  document.getElementById("13Fact").innerHTML = classement["13"].fact;
  document.getElementById("14Fact").innerHTML = classement["14"].fact;
  document.getElementById("15Fact").innerHTML = classement["15"].fact;
  document.getElementById("16Fact").innerHTML = classement["16"].fact;
  document.getElementById("17Fact").innerHTML = classement["17"].fact;
      
}