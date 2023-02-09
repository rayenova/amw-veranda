const offerteForm = document.querySelector("#offerteForm");
const offerteForm2 = document.querySelector("#offerteForm2");
const offerteForm3 = document.querySelector("#offerteForm3");

let combinedData = {
  contactInformatie: {},
  Materialen: {},
  Afmetingen: {}
};

offerteForm.addEventListener("submit", function(e) {
  e.preventDefault();

  combinedData.contactInformatie.name = document.querySelector("#name").value;
  combinedData.contactInformatie.lastname = document.querySelector("#lastname").value;
  combinedData.contactInformatie.postcode = document.querySelector("#postcode").value;
  combinedData.contactInformatie.adress = document.querySelector("#adress").value;
  combinedData.contactInformatie.email = document.querySelector("#email").value;
  combinedData.contactInformatie.phone = document.querySelector("#phone").value;
});

offerteForm2.addEventListener("submit", function(e) {
  e.preventDefault();

  combinedData.Materialen.color = document.querySelector("#color").value;
  combinedData.Materialen.dak = document.querySelector("#dak").value;
  combinedData.Materialen.voorkant = document.querySelector("#voorkant").value;
  combinedData.Materialen.zijwandLinks = document.querySelector("#zijwand-links").value;
  combinedData.Materialen.zijwandRechts = document.querySelector("#zijwand-rechts").value;
  combinedData.Materialen.spieLinks = document.querySelector("#spie-links").value;
  combinedData.Materialen.spieRechts = document.querySelector("#spie-rechts").value;
  combinedData.Materialen.spotjes = document.querySelector("#spotjes").value;
});

offerteForm3.addEventListener("submit", function(e) {
  e.preventDefault();

  combinedData.Afmetingen.breedte = document.querySelector("#breedte").value;
combinedData.Afmetingen.diepte = document.querySelector("#diepte").value;
combinedData.Afmetingen.opmerking = document.querySelector("#opmerking").value;

console.log(combinedData);
const dataString = JSON.stringify(combinedData);

  // const xhr = new XMLHttpRequest();
  // xhr.open("POST", "offerte.php", true);
  // xhr.setRequestHeader("Content-Type", "application/json");
  // xhr.onreadystatechange = function() {
  // if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
  // const response = JSON.parse(xhr.responseText);
  // console.log(response.status);
  // }
  // };
  // console.log(dataString);
  // xhr.send(dataString);

  $.ajax({
    type: 'POST',
    url: 'offerte.php',
    data: dataString,
    success: function(response) {
      if (response === 'success') {
        $('.title-anim-appear-line').text('Dankjewel voor de offerte! Uw aanvraag is verstuurd.');
      } else {
        $('.title-anim-appear-line').text('Er is iets mis gegaan bij het versturen van de offerte, probeer het later opnieuw.');
      }
    }
  });
  
});
