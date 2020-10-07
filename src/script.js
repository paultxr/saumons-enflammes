const cardEvent = document.querySelector(".cardEvent");

const articles = [
  {
    mytitle: "La pêche en réalité virtuelle, c’est juste dingue !",
    picture: "https://www.heypoorplayer.com/wp-content/uploads/2016/11/DBA67C87-804C-4FC9-BB9D-CEC46831116C-18204-000008F60A28B53F_tmp.jpg",
    mytext: "lorem20", 
    myLink: "https://www.simulagri.fr/2019/09/ultimate-fishing-simulator-vr-la-peche-en-realite-virtuelle-cest-juste-dingue/"
  },
  {
    mytitle: "La pêche à la ligne bientôt en réalité virtuelle !",
    picture: "https://cdn.pixabay.com/photo/2015/06/04/23/06/fisherman-797980_1280.jpg",
    mytext: "lorem20", 
    myLink: "https://www.simulagri.fr/2019/08/la-peche-a-la-ligne-bientot-en-vr-sur-ultimate-fishing-simulator/"
  },
];

function createCard(title, imageUrl, linkUrl, texte) {
  const cardArticle = document.createElement("div");
  cardArticle.classList.add("cardArticle");
  cardEvent.appendChild(cardArticle);

  const cardHeaderbis = document.createElement("div");
  cardHeaderbis.classList.add("cardHeaderbis");
  cardArticle.appendChild(cardHeaderbis);

  const cardPic = document.createElement("div");
  cardPic.style.backgroundImage = `url(${imageUrl})`;
  cardPic.classList.add("cardPic");
  cardHeaderbis.appendChild(cardPic);

  const cardBodybis = document.createElement("div");
  cardBodybis.classList.add("cardBodybis");
  cardArticle.appendChild(cardBodybis);

  const cardTitlebis = document.createElement("h4");
  cardTitlebis.classList.add("cardTitlebis");
  cardTitlebis.innerHTML = `${title}`;
  cardBodybis.appendChild(cardTitlebis);
  
  const cardTexte = document.createElement("p");
  cardTexte.classList.add("cardTexte");
  cardTexte.innerHTML = `${texte}`;
  cardBodybis.appendChild(cardTexte);

  const cardLinkbis = document.createElement("a");
  cardLinkbis.classList.add("cardLinkbis");
  cardLinkbis.href = `${linkUrl}`;
  cardBodybis.appendChild(cardLinkbis);

  const cardButtonbis = document.createElement("button");
  cardButtonbis.classList.add("cardButtonbis");
  cardButtonbis.innerHTML = "Voir l'article";
  cardLinkbis.appendChild(cardButtonbis);
}

for (let i = 0; i < articles.length; i++) {
  createCard(articles[i].mytitle, articles[i].picture, articles[i].mytext, articles[i].myLink);
}