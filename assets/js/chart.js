$(function() {
  $(".preload").fadeOut(2000, function() {
      $(".chart-display-flex").fadeIn(1000);
      document.getElementById("chart-wrapper").style.display= "block";
  });
});


var xValues = ["Sore throat","Headache","Runny Nose","Blocked Nose ","Cough  ","Hoarse voice","Sneezing","Fatigue","Muscle pains/aches","Dizzy light-headed","Swollen neck glands","Eye soreness","Altered smell  ","Fever ","Shortness of breath","Earache ","Lost of smell",];
var yValues = [13.25, 11.18, 9.13, 9.13, 9.13,8,7.30,6.16,5.70,4.12,3.45,3.19,2.96,2.51,2.51,2.28];
var barColors = ["#376288","#437AA8","#5D91BD","#739EC2","#89ADCC","#A4D7CF","#86C8BE","#6DBDA5","#5BB584","#57B77D","#46A96D","#429A64","#459263","#40875C","#3D8359","#355979"];

new Chart("pie-chart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    plugins: {
        title: {
            display: true,
            text: 'Covid 19 Symptoms'}}}
});

const options = {
    method: 'GET',
    headers: {
      'X-RapidAPI-Key': 'ffa1e90d65mshc8214b7621f02cep1827bcjsnde0aed321ec5',
      'X-RapidAPI-Host': 'covid-193.p.rapidapi.com'
    }};
       fetch('https://covid-193.p.rapidapi.com/history?country=Lebanon', options)
       .then(response => response.json())
       .then(response => { 
          let total1 = response.response[0].cases[Object.keys(response.response[0].cases)[4]];
          let death1 = response.response[0].deaths[Object.keys(response.response[0].cases)[4]];
          let Totalcases = [total1];
          let Totaldeath = [death1];
      var months = 0;
      var usedMonths = [];
      for (var i = 0; i < response.response.length; i++) {
        if(months < 11){
          if (response.response[i].time.split('-')[2].split('T')[0] == '01' && !usedMonths.includes(response.response[i].time.split('-')[1])) {
            usedMonths.push(response.response[i].time.split('-')[1])
            months++;
            Totalcases.push(response.response[i].cases[Object.keys(response.response[0].cases)[4]]);
            Totaldeath.push(response.response[i].deaths[Object.keys(response.response[0].cases)[4]]);
         }
        }
      }
   new Chart(document.getElementById("line-chart"), {
      type: 'line',
      data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{ 
            data: Totalcases.reverse(),total1,
            label: "Total Cases",
            backgroundColor: "#3e95cd",
            fill: false,
            yAxisID: 'y',
          }, { 
            data: Totaldeath.reverse(),death1,
            label: "Total Deaths",
            backgroundColor: "#8e5ea2",
            fill: false,
            yAxisID: 'y1',
          }
        ]
      },
      options: {
        plugins:{
        title: {
          display: true,
          text: 'Total Cases/Deaths per month in Lebanon'}},
        scales: {
         y1: {
           position: 'right'
         }
        }
      }})});


    



    
    const options1 = {
      method: 'GET',
      headers: {
        'X-RapidAPI-Key': 'ffa1e90d65mshc8214b7621f02cep1827bcjsnde0aed321ec5',
        'X-RapidAPI-Host': 'covid-193.p.rapidapi.com'
      }
    };
    
    fetch('https://covid-193.p.rapidapi.com/statistics', options1)
    .then(response => response.json())
      .then(response => {

      let unitedStatesCases = response.response.filter(element => element.country == "USA")[0].cases.total;
      let IndiaCases = response.response.filter(element => element.country == "India")[0].cases.total;
      let FranceCases = response.response.filter(element => element.country == "France")[0].cases.total;
      let GermanyCases = response.response.filter(element => element.country == "Germany")[0].cases.total;
      let BrazilCases = response.response.filter(element => element.country == "Brazil")[0].cases.total;
    
      let unitedStatesDeath = response.response.filter(element => element.country == "USA")[0].deaths.total;
      let IndiaDeaths = response.response.filter(element => element.country == "India")[0].deaths.total;
      let FranceDeaths = response.response.filter(element => element.country == "France")[0].deaths.total;
      let GermanyDeaths = response.response.filter(element => element.country == "Germany")[0].deaths.total;
      let BrazilDeaths = response.response.filter(element => element.country == "Brazil")[0].deaths.total;
    
       worldTotalCases = [];
       worldTotalDeaths = [];
    
       worldTotalCases.push(unitedStatesCases, IndiaCases, FranceCases, GermanyCases, BrazilCases);
       worldTotalDeaths.push(unitedStatesDeath, IndiaDeaths, FranceDeaths ,GermanyDeaths, BrazilDeaths);
    
    
      const mixedhart = new Chart(worldChart, {
        data: {
            datasets: [{
              yAxisID: 'A',
                type: 'bar',
                label: 'Top 5 Countries Total Cases',
                data:   worldTotalCases,
            }, {
              yAxisID: 'B',
              position: 'right',
                type: 'line',
                label: 'Top 5 Countries Total Deaths ',
                data: worldTotalDeaths,
            }],
            labels: ['United States', 'India', 'France', 'Germany', 'Brazil']
          },
          options: {
            plugins:{
            title: {
              display: true,
              text: 'Total Cases/Deaths per month worldwide'}},
            scales: {
             B: {
               position: 'right'
             }
            }
          }
    });})



