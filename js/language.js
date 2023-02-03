const languageSelects = document.getElementsByClassName("language-select");

for (const select of languageSelects) {
  const currentUrl = window.location.href;

  const currentLanguage = window.location.pathname.split("/")[1] || "nl";

  select.value = currentLanguage;

  select.addEventListener("change", function(event) {
    const newUrl = currentUrl.replace(`/${currentLanguage}/`, `/${event.target.value}/`);
    location.href = newUrl;
  });
}