if(viewHistory) {
    var page = {
        "title": document.getElementsByTagName('h1')[0].innerHTML,
        "url": location.href
    };
    viewHistory.addHistory(page);
}