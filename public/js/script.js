const searchInput = document.getElementById("searchInput");

searchInput.addEventListener("input", function () {
  const searchTerm = this.value.trim(); // Récupère la valeur du champ de recherche et supprime les espaces
  if (searchTerm.length > 0) {
    performSearch(searchTerm);
  } else {
    clearResults();
  }
});

function performSearch(searchTerm) {
  const url =
    "https://db.ygoprodeck.com/api/v7/cardinfo.php?fname=" +
    encodeURIComponent(searchTerm);

  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        const data = JSON.parse(xhr.responseText);
        displayResults(data.data);
      } else {
        console.error("Erreur lors de la recherche :", xhr.status);
      }
    }
  };
  xhr.open("GET", url);
  xhr.send();
}

function clearResults() {
  const resultsContainer = document.getElementById("searchResults");
  resultsContainer.innerHTML = "";
}

function displayResults(results) {
  const resultsContainer = document.getElementById("searchResults");
  resultsContainer.innerHTML = "";

  if (results.length > 0) {
    const resultList = document.createElement("div");
    resultList.classList.add("row"); // Ajoutez la classe row de Bootstrap pour une grille

    results.forEach(function (card) {
      // Créez une colonne Bootstrap pour chaque carte
      const col = document.createElement("div");
      col.classList.add("col-md-4"); // Utilisez la classe col-md-4 pour la mise en page (3 cartes par ligne pour les écrans moyens)

      // Créez une carte Bootstrap pour afficher les détails de la carte
      const cardElement = document.createElement("div");
      cardElement.classList.add("card", "mb-3");

      // Ajoutez l'image de la carte à la carte Bootstrap
      const imageElement = document.createElement("img");
      imageElement.classList.add("card-img-top");
      imageElement.src = card.card_images[0].image_url_small; // Utilisez l'URL de l'image de la carte
      imageElement.alt = card.name;
      cardElement.appendChild(imageElement);

      // Créez le corps de la carte Bootstrap
      const cardBody = document.createElement("div");
      cardBody.classList.add("card-body");

      // Ajoutez le nom de la carte à la carte Bootstrap
      const cardTitle = document.createElement("h5");
      cardTitle.classList.add("card-title");
      cardTitle.textContent = card.name;
      cardBody.appendChild(cardTitle);

      // Ajoutez le lien vers les détails de la carte à la carte Bootstrap
      const link = document.createElement("a");
      link.classList.add("btn", "btn-primary");
      link.href = "index.php?ctrl=card&action=detailcard&id=" + card.id;
      link.textContent = "Voir les détails";
      link.target = "_blank"; // Ajoutez cet attribut pour ouvrir le lien dans une nouvelle fenêtre ou onglet
      cardBody.appendChild(link);

      // Ajoutez le corps à la carte Bootstrap
      cardElement.appendChild(cardBody);

      // Ajoutez la carte à la colonne
      col.appendChild(cardElement);

      // Ajoutez la colonne à la liste des résultats
      resultList.appendChild(col);
    });

    // Ajoutez la liste des résultats à l'élément de conteneur
    resultsContainer.appendChild(resultList);
  } else {
    resultsContainer.textContent = "Aucune carte trouvée.";
  }
}
