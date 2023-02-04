// const languageSelects = document.getElementsByClassName("language-select");

// for (const select of languageSelects) {
//   const currentUrl = window.location.href;

//   const currentLanguage = window.location.pathname.split("/")[1] || "nl";

//   select.value = currentLanguage;

//   select.addEventListener("change", function(event) {
//     const newUrl = currentUrl.replace(`/${currentLanguage}/`, `/${event.target.value}/`);
//     location.href = newUrl;
//   });
// }
const languageSelects = document.getElementsByClassName("language-select");

for (const select of languageSelects) {
  const currentUrl = window.location.href;
  const pathname = window.location.pathname;

  let currentLanguage = "";
  if (pathname.startsWith("/en/")) {
    currentLanguage = "en";
  } else if (pathname.startsWith("/de/")) {
    currentLanguage = "de";
  } else if (pathname.startsWith("/nl/")) {
    currentLanguage = "nl";
  } else {
    currentLanguage = "nl";
  }

  select.value = currentLanguage;

  select.addEventListener("change", function(event) {
    let newUrl = window.location.origin + pathname;
    
    if (event.target.value !== "nl") {
      if (currentLanguage !== "nl") {
        newUrl = window.location.origin + pathname.replace(`/${currentLanguage}/`, `/${event.target.value}/`);
      } else {
        newUrl = window.location.origin + `/${event.target.value}/${pathname}`;
      }
    } else {
      if (currentLanguage !== "nl") {
        newUrl = window.location.origin + pathname.replace(`/${currentLanguage}/`, "/");
      }
    }
    location.href = newUrl;
  });
}



