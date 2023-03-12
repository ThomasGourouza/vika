function selectLang(page, lang) {
    langForm = document.forms['langForm'];
    langForm.elements['page'].value = page;
    langForm.elements['lang'].value = lang;
    langForm.submit();
}