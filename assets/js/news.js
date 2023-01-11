window.onload = function loadmore(){
  readMore();

$(function() {
  $(".preload").fadeOut(2000, function() {
      $(".news-wrapper").fadeIn(1000);
  });
});
}
function readMore(){
       let y = 1;
       for (h = 0; h < 6 ; h++, y++)
       $(".row").append(
          "<div class='col-12 col-md-6 col-lg-4 d-flex'><div class='card flex-fill'><div class='card-header'><h5 class='card-title mb-0-" +
          [y] +
          "' id='card-title mb-0-" +
          [y] +
          "'></h5></div><div class='card-body'><p class='card-text" +
          [y] +
          "' id='card-text" +
          [y] +
          "'></p></div><div class='button-container'><a class='btn btn-primary' href='#'' id='link" +
          [y] +
          "'>Read More</a></div></div></div>"
    )


const options = {
  method: "GET",
  headers: {
    "X-RapidAPI-Key": "ffa1e90d65mshc8214b7621f02cep1827bcjsnde0aed321ec5",
    "X-RapidAPI-Host": "covid-19-news.p.rapidapi.com",
  },
};

    fetch("https://covid-19-news.p.rapidapi.com/v1/covid?q=covid&lang=en&media=True", options)
    .then((response) => response.json())
    .then((response) => {
      for (y = 1 ; y <7 ; y++){
        let title = document.getElementById("card-title mb-0-"+[y]+"");
        let text = document.getElementById("card-text" +[y] +"");
        let link = document.getElementById("link" +[y] +"");

        let responseTitle = response.articles[y].title;
        let responseText = response.articles[y].summary;
        let responseLink = response.articles[y].link;

        title.innerHTML = responseTitle;
        text.innerHTML = responseText;
        link.href = responseLink;

 

}})   
}
