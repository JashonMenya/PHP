window.addEventListener("DOMContentLoaded", function () {
  document
    .querySelector("#fetchQuotesBtn")
    .addEventListener("click", function () {
      // Get values from drop-downs
      const topicDropdown = document.querySelector("#topicSelection");
      const selectedTopic =
        topicDropdown.options[topicDropdown.selectedIndex].value;
      const countDropdown = document.querySelector("#countSelection");
      const selectedCount =
        countDropdown.options[countDropdown.selectedIndex].value;

      // Get and display quotes
      fetchQuotes(selectedTopic, selectedCount);
    });
});

function fetchQuotes(topic, count) {
  const url = `https://wp.zybooks.com/quotes.php?topic=${topic}&count=${count}`;

  const xhr = new XMLHttpRequest();
  xhr.addEventListener("load", function () {
    if (xhr.status === 200) {
      responseReceivedHandler(xhr, count);
    } else {
      responseReceivedHandler({ error: `Topic '${topic}' not found` });
    }
  });
  xhr.open("GET", url);
  xhr.responseType = "json";
  xhr.send();

  let html = "<ol>";
  for (let c = 1; c <= count; c++) {
    html += `<li>Quote ${c} - Anonymous</li>`;
  }
  html += "</ol>";

  document.querySelector("#quotes").innerHTML = html;
}

// TODO: Add responseReceivedHandler() here
function responseReceivedHandler(xhr) {
  if (xhr.readyState === XMLHttpRequest.DONE) {
    if (xhr.status === 200) {
      const response = JSON.parse(xhr.responseText);
      if (response.hasOwnProperty("error")) {
        document.querySelector(
          "#quotes"
        ).innerHTML = `An error occurred while fetching quotes. Error: ${response.error}`;
      } else {
        let html = "<ol>";
        for (let i = 0; i < response.length; i++) {
          const quote = response[i].quote;
          const author = response[i].author;
          html += `<li>${quote} - ${author}</li>`;
        }
        html += "</ol>";
        document.querySelector("#quotes").innerHTML = html;
      }
    } else {
      document.querySelector("#quotes").innerHTML =
        "An error occurred while fetching quotes. Please try again later.";
    }
  }
}
