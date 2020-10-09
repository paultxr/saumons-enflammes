
window.onscroll = function () {

    if (document.documentElement.scrollTop > 100) {
        document.getElementById("navbar").style.background="#63868c";
        document.getElementById("navbar-right").style.paddingTop = "0px";      
        document.getElementById("logo").style.display = "flex";
        document.getElementById("navbar-right").style.color = "#63868c";
        document.getElementById("navbar-right").style.display = "flex";
        document.getElementById("navbar-right").style.alignItems = "alignItems";  
    }
    else if (document.documentElement.scrollTop < 200 ){
      document.getElementById("navbar").style.background="none";
      document.getElementById("navbar").style.paddingTop = "0";
      document.getElementById("navul").style.paddingTop = "200";
      document.getElementById("logo").style.display = "flex";
      document.getElementById("navbar-right").style.color = "#63868C";
      document.getElementById("navbar-right").style.display = "flex";
      document.getElementById("navbar-right").style.alignItems = "alignItems";    }
  
  
  }

const cards = document.querySelector(".cards");

const articles = [
  {
    mytitle: "Ultimate Fishing Simulator enchaîne les mises à jour",
    picture: "https://cdn.pixabay.com/photo/2019/07/22/10/42/boat-4354777_1280.jpg",
    myLink: "https://www.simulagri.fr/2019/11/ultimate-fishing-simulator-enchaine-les-mises-a-jour-dlc-amazon-river-et-vr/"
  },
  {
    mytitle: "La pêche en réalité virtuelle, c’est juste dingue !",
    picture: "https://www.heypoorplayer.com/wp-content/uploads/2016/11/DBA67C87-804C-4FC9-BB9D-CEC46831116C-18204-000008F60A28B53F_tmp.jpg",
    myLink: "https://www.simulagri.fr/2019/09/ultimate-fishing-simulator-vr-la-peche-en-realite-virtuelle-cest-juste-dingue/"
  },
  {
    mytitle: "La pêche à la ligne bientôt en réalité virtuelle !",
    picture: "https://cdn.pixabay.com/photo/2015/06/04/23/06/fisherman-797980_1280.jpg",
    myLink: "https://www.simulagri.fr/2019/08/la-peche-a-la-ligne-bientot-en-vr-sur-ultimate-fishing-simulator/"
  } 
];

function createCard(title, imageUrl, linkUrl) {
  if(!cards) {
    return
  }
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
  
  const cardLink = document.createElement("a");
  cardLink.classList.add("card-link");
  cardLink.href = `${linkUrl}`;
  cardBody.appendChild(cardLink);

  const cardButton = document.createElement("button");
  cardButton.classList.add("card-button");
  cardButton.innerHTML = "Voir l'article";
  cardLink.appendChild(cardButton);

}

for (let i = 0; i < articles.length; i++) {
  createCard(articles[i].mytitle, articles[i].picture, articles[i].myLink);
}




for (var i = 0; i < document.links.length; i++) {
  if (document.links[i].href == document.URL) {
      document.links[i].className = 'active';
  }
}

