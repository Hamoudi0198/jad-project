
const symp = new Map([
    ["Sore throat", 11],
    ["Headache" , 11.18],
    ["Runny Nose", 9.13],
    ["Blocked Nose", 9.13],
    ["Cough", 9.13],
    ["Hoarse voice", 8],
    ["Sneezing", 7.30],
    ["Fatigue", 6.16],
    ["Muscle pains/aches", 5.70],
    ["Dizzy light-headed", 4.12],
    ["Swollen neck glands", 3.45],
    ["Eye soreness",  3.19],
    ["Altered smell", 2.96],
    ["Fever", 2.25],
    ["Shortness of breath", 2.51],
    ["Earache", 2.51],
    ["Lost of smell", 2.28]
  ]);
  
  for (let [key, value] of symp) {
  $(".symps").append("<li id='li12'><input type='checkbox' id='rapidtest-checkbox' name='checkbox[]' value="+value+"><label for='checkbox1'>"+key+"</lable></li>");
  }
  
  function submit(){
    let proba = 0;
      $("input[type=checkbox]:checked").each(function () {
       proba+=parseFloat(this.value);
  });
  $(".result-tab").append("<div class='result-container'><div class='result-btn'><button id='close-btn-result' onclick='closeResult()'><span class='material-symbols-outlined'>close</span></button></div><img src='' width='354px' height='250px' id='result-img'><div class='result-text-btn'><h2 id='result-txt' class='text-center'></h2><p id='result-mini-text' class='text-center'></p><p id='negative-text' class='text-center'></p><input type='button' onclick='retakeTest()' value='Retake Test'></div></div>")
  console.log(proba)
   if (proba >=70){
     document.getElementById('result-img').src = "assets/img/positive-covid.png";
     document.getElementById('result-txt').innerHTML = "Positive Test";
     document.getElementById('result-txt').style.color = "#e21111";
     document.getElementById('result-mini-text').innerHTML = "Oh no! You Probably got covid";
   } else {
    document.getElementById('result-img').src = "assets/img/negative-covid.png";
    document.getElementById('result-txt').innerHTML = "Negative Test";
    document.getElementById('result-txt').style.color = "#37BC9B";
    document.getElementById('result-mini-text').innerHTML = "Don't Panic you are safe";
  }
  document.getElementById("rapid-test-submit").disabled = true;
}

  function closeResult(){
    document.getElementById("rapid-test-submit").disabled = false;
    $('.result-container').remove();
}

function retakeTest(){
  document.getElementById("rapid-test-submit").disabled = false;
  $('input[type="checkbox"]:checked').prop('checked',false);
  closeResult()
  }

