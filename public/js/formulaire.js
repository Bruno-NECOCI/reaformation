// ------------------------------------- Ajout de champs pour participant -------------------------------------

let inc = document.querySelector(".inc");
let dec = document.querySelector(".dec");

//incrementation de la quantité
inc.addEventListener("click", (event) => {
  let btn = event.target;

  let input = btn.parentElement.children[1];

  let inputValue = input.value;

  let newQte = parseInt(inputValue) + 1;

  if (newQte <= 10) {
    input.value = newQte;
  } else {
    alert("vous ne pouvez pas entrer un chiffre supérieur à de 10");
  }
});

//décrementation de la quantité
dec.addEventListener("click", (event) => {
  let btn = event.target;

  let input = btn.parentElement.children[1];

  let inputValue = input.value;

  let newQte = parseInt(inputValue) - 1;

  if (newQte >= 1) {
    input.value = newQte;
  } else {
    alert("vous ne pouvez pas entrer un chiffre en dessous de 1");
  }
});

//ajout de formulaire

inc.addEventListener("click", () => {
  const container = document.querySelector(".container-form-part");

  let index = document.getElementById("qte").value;

  const id = document.createElement("div");
  id.classList.add("identity");
  id.setAttribute("data-index", `${index}`);
 

  const nom = document.createElement("input");
  nom.setAttribute("placeholder", "Nom");
  nom.setAttribute("name", "nom-part-" + index );
  const prenom = document.createElement("input");
  prenom.setAttribute("placeholder", "Prenom");
  prenom.setAttribute("name", "prenom-part-" + index);
  const date = document.createElement("input");
  date.setAttribute("type", "date");
  date.setAttribute("name", "date_naissance-" + index);

  container.appendChild(id);
  id.appendChild(nom).classList.add("form-input");
  id.appendChild(prenom).classList.add("form-input");
  id.appendChild(date).classList.add("form-input");
});

//supp de formulaire

dec.addEventListener("click", () => {
  const container = document.querySelector(".container-form-part");

  let index = parseInt(document.getElementById("qte").value);

  const ids = document.querySelectorAll(".identity");

  ids.forEach((id) => {
    let data = parseInt(id.getAttribute("data-index"));
    console.log(data);
    if (data == index + 1) {
      container.removeChild(id);
      console.log(id + "hello");
    } else {
      return;
    }
  });
});


