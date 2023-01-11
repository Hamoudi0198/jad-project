var y = [
  " bg-primary",
  " bg-warning",
  " bg-danger",
  " bg-primary",
  "-bg-primary-recovery",
  " bg-danger",
];
var w = ["current", "critical", "death", "total", "recovered", "total-death"];
var i = [
  "Daily Cases (lebanon/daily)",
  "Critical Cases (lebanon/daily)",
  "Deaths(lebanon/daily)",
  "Total Cases (lebanon)",
  "Recovery (lebanon)",
  "Total Deaths (lebanon)",
];
var j = [
  " fa-virus-covid",
  " fa-triangle-exclamation",
  " fa-skull-crossbones",
  " fa-virus-covid",
  " fa-notes-medical",
  " fa-triangle-exclamation",
];
let g = ["Usa", "India", "Spain", "China", "Brazil"];
  
window.onload = function append() {
  for (var h = 0; h < 6; h++) {
    $(".row").append(
      "<div class='col-xl-4 col-sm-4 col-12'><div class='card'><div class='card-body'><div class='dash-widget-header'><span class='dash-widget-icon" +
        y[h] +
        "'><i class='fa-solid" +
        j[h] +
        "'></i></span><div class='dash-count'><p class='count-title'>" +
        i[h] +
        "</p><p id='cases-" +
        w[h] +
        "' class='count'><div class='loader'></div></p></div></div></div></div></div>"
    );
  };
  getCountriesData();
  getLebanonData();
}

const getLebanonData = () =>{
  const options = {
    method: 'GET',
    headers: {
      'X-RapidAPI-Key': 'ffa1e90d65mshc8214b7621f02cep1827bcjsnde0aed321ec5',
      'X-RapidAPI-Host': 'covid-193.p.rapidapi.com'
    }
  };
  
  fetch('https://covid-193.p.rapidapi.com/statistics?country=Lebanon', options)
    .then(response => response.json())
    .then(response =>   {
      let dailyCases = document.getElementById("cases-current");
      let criticalCases = document.getElementById("cases-critical");
      let dailyDeathCases = document.getElementById("cases-death");
      let totalCases = document.getElementById("cases-total");
      let recoveredCases = document.getElementById("cases-recovered");
      let deathTotalCases = document.getElementById("cases-total-death");

      let responseDailyCases = response.response[0].cases.new ?? 0;
      let responseCriticalCases = response.response[0].cases.critical ?? 0;
      let responseDeathCases = response.response[0].deaths.new ?? 0;
      let responseTotalCases = response.response[0].cases.total ?? 0;
      let responseRecoveryCases = response.response[0].cases.recovered ?? 0;
      let totalDeathCases = response.response[0].deaths.total ?? 0;

      dailyCases.innerHTML = responseDailyCases;
      criticalCases.innerHTML = responseCriticalCases;
      dailyDeathCases.innerHTML = responseDeathCases;
      totalCases.innerHTML = responseTotalCases;
      recoveredCases.innerHTML = responseRecoveryCases;
      deathTotalCases.innerHTML = totalDeathCases;
  })
}


const getCountriesData = () => {
  const options = {
    method: 'GET',
    headers: {
      'X-RapidAPI-Key': 'ffa1e90d65mshc8214b7621f02cep1827bcjsnde0aed321ec5',
      'X-RapidAPI-Host': 'covid-193.p.rapidapi.com'
    }
  };
  
for (let h = 0; h < g.length; h++) {
    fetch(
      "https://covid-193.p.rapidapi.com/statistics?country=" + [g[h]] + "",
      options
    )
      .then((response) => response.json())
      .then((response) => {
        let countryName = document.getElementById("country-"+[g[h]]+"")
        let dailyCases = document.getElementById("daily-cases-"+[g[h]]+"");
        let criticalCases = document.getElementById("critical-cases-"+[g[h]]+"");
        let deaths = document.getElementById("death-"+[g[h]]+"");
        let recovery = document.getElementById("recovery-cases-"+[g[h]]+"");
        let Tcases = document.getElementById("total-cases-"+[g[h]]+"");
        let Tdeaths = document.getElementById("total-deaths-"+[g[h]]+"");

        let responseCountryName = response.response[0].country;
        let responseDailyCases = response.response[0].cases.new ??0;
        let responseCriticalCases = response.response[0].cases.critical ??0;
        let responseDeathsCases = response.response[0].deaths.new ??0;
        let responseRecoveryCases = response.response[0].cases.recovered ??0;
        let responseTotalCases = response.response[0].cases.total ??0;
        let responseTotalDeaths = response.response[0].deaths.total ??0;

        countryName.innerHTML = responseCountryName;
        dailyCases.innerHTML = responseDailyCases;
        criticalCases.innerHTML = responseCriticalCases;
        deaths.innerHTML = responseDeathsCases;
        recovery.innerHTML = responseRecoveryCases;
        Tcases.innerHTML = responseTotalCases;
        Tdeaths.innerHTML = responseTotalDeaths;
  })
}}

  



