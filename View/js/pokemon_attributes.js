const id=document.getElementById("valorId").value;
const contIdenPoke=document.querySelector(".contaner_identificacion_pokemon") ;
const dataType=document.querySelector(".datos_tipo") ;
const hp=document.getElementById("hp_value");
const hp_name=document.getElementById("hp_name");
const attack=document.getElementById("attack");
const defense=document.getElementById("defense");
const specialDefense=document.getElementById("sD");
const speciaAttack=document.getElementById("sA");
const speed=document.getElementById("speed  ");


function fetchpokemon(id){
    fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
    .then(res=>res.json())
    .then(data=> {createpokemon(data);});
}
function createpokemon(pokemon){

    const name=document.createElement('span');
    name.classList.add('name_pokemon');
    name.textContent=pokemon.name;
    contIdenPoke.appendChild(name);

    const sprite=document.createElement('img');
    sprite.classList.add('img_pokemon');
    sprite.src=pokemon.sprites.other.dream_world.front_default;
    contIdenPoke.appendChild(sprite);

    const habitat=document.createElement('span');
    habitat.classList.add('habitat');

    habitat.textContent=pokemon.types[0].type.name;
    dataType.appendChild(habitat);
    hp.textContent =pokemon.stats[0].base_stat;
    attack.textContent =pokemon.stats[1].base_stat;
    defense.textContent =pokemon.stats[2].base_stat;
    specialDefense.textContent =pokemon.stats[4].base_stat;
    speciaAttack.textContent =pokemon.stats[3].base_stat;
    speed.textContent =pokemon.stats[3].base_stat;



}

fetchpokemon(id)