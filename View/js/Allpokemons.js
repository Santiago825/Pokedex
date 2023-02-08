const pokemoncontainer=document.querySelector(".container_pokemons");
const previous=document.querySelector("#previous");
const next=document.querySelector("#next");


let offset=1;
let limit=11;

previous.addEventListener('click',()=>{
    if(offset!=1){
        offset-=12;
        removeChildNodes(pokemoncontainer);
        fetchPokemons(offset,limit)
    }
    
})
next.addEventListener('click',()=>{
    offset+=12;
    removeChildNodes(pokemoncontainer);
    fetchPokemons(offset,limit)
})
function fetchpokemon(id){
    fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
    .then(res=>res.json())
    .then(data=> {createpokemon(data);});
}

function fetchPokemons(offset,limit){
    for(let i=offset;i<=offset+limit;i++){
        fetchpokemon(i);
    }
}
function createpokemon(pokemon){
    const card=document.createElement('button');
    card.classList.add('card_pokemon');
    card.setAttribute("name","pokemon");
    card.setAttribute("value",pokemon.id);


    const sprite=document.createElement('img');
    sprite.classList.add('img_pokemon');
    sprite.src=pokemon.sprites.front_default;
    card.appendChild(sprite);


    const name=document.createElement('span');
    name.classList.add('name_pokemon');
    name.textContent=pokemon.name;

    card.appendChild(name);
    pokemoncontainer.appendChild(card);

}
function removeChildNodes(parent){
    while(parent.firstChild){
        parent.removeChild(parent.firstChild);
    }

}
fetchPokemons(offset,limit)
function enviar_formulario(){
    document.per.submit;
}