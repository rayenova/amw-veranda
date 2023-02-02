const offerteForm = document.querySelector("#offerteForm");
const offerteForm2 = document.querySelector("#offerteForm2");
const offerteForm3 = document.querySelector("#offerteForm3");

let combinedData = {};

offerteForm.addEventListener("submit", function(e) {
  e.preventDefault();

  combinedData.name = document.querySelector("#name").value;
  combinedData.lastname = document.querySelector("#lastname").value;
  combinedData.postcode = document.querySelector("#postcode").value;
  combinedData.adress = document.querySelector("#adress").value;
  combinedData.email = document.querySelector("#email").value;
  combinedData.phone = document.querySelector("#phone").value;

});

offerteForm2.addEventListener("submit", function(e) {
  e.preventDefault();

  combinedData.color = document.querySelector("#color").value;
  combinedData.dak = document.querySelector("#dak").value;
  combinedData.voorkant = document.querySelector("#voorkant").value;
  combinedData.zijwandLinks = document.querySelector("#zijwand-links").value;
  combinedData.zijwandRechts = document.querySelector("#zijwand-rechts").value;
  combinedData.spieLinks = document.querySelector("#spie-links").value;
  combinedData.spieRechts = document.querySelector("#spie-rechts").value;
  combinedData.spotjes = document.querySelector("#spotjes").value;

});

offerteForm3.addEventListener("submit", function(e) {
    e.preventDefault();

    combinedData.breedte = document.querySelector("#breedte").value;
    combinedData.diepte = document.querySelector("#diepte").value;
    combinedData.opmerking = document.querySelector("#opmerking").value;


  // Add data from form 3 to combinedData object

  console.log(combinedData); // Check combined data in console

  // Send combinedData to desired endpoint or process it as needed
});
