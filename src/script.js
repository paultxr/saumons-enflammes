const cards = document.querySelector(".cards");

const articles = [
  {
    mytitle: "Ultimate Fishing Simulator enchaîne les mises à jour",
    picture: "https://cdn.pixabay.com/photo/2019/07/22/10/42/boat-4354777_1280.jpg"
  },
  {
    mytitle: "La pêche en réalité virtuelle, c’est juste dingue !",
    picture: "https://www.heypoorplayer.com/wp-content/uploads/2016/11/DBA67C87-804C-4FC9-BB9D-CEC46831116C-18204-000008F60A28B53F_tmp.jpg"
  },
  {
    mytitle: "La pêche à la ligne bientôt en réalité virtuelle !",
    picture: "https://cdn.pixabay.com/photo/2015/06/04/23/06/fisherman-797980_1280.jpg"
  },
];

function createCard(title, imageUrl) {
  const card = document.createElement("div");
  card.classList.add("card");
  cards.appendChild(card);

  const cardHeader = document.createElement("div");
  cardHeader.classList.add("card-header");
  card.appendChild(cardHeader);

  const cardImg = document.createElement("div");
  cardImg.style.backgroundImage = `url(${imageUrl})`;
  cardImg.classList.add("card-img");
  cardHeader.appendChild(cardImg);

  const cardBody = document.createElement("div");
  cardBody.classList.add("card-body");
  card.appendChild(cardBody);

  const cardTitle = document.createElement("h4");
  cardTitle.classList.add("card-title");
  cardTitle.innerHTML = `${title}`;
  cardBody.appendChild(cardTitle);

  const cardButton = document.createElement("button");
  cardButton.classList.add("card-button");
  cardButton.innerHTML = "Voir l'article";
  cardBody.appendChild(cardButton);
}

for (let i = 0; i < articles.length; i++) {
  createCard(articles[i].mytitle, articles[i].picture);
}
