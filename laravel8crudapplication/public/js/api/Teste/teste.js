const timeStamp = '1643219292';
const apiKey = 'd7dfc57b245503973ebdd66aa8a1d97d';
const md5 = '4d77405a96115a6fc90525ca5745afe1';

fetch(`https://gateway.marvel.com/v1/public/characters?ts=${timeStamp}&apikey=${apiKey}&hash=${md5}&limit=6`).then((response) => {
    return response.json();
}).then((jsonParsed) => {
    const divHero = document.querySelector('#herois');
    jsonParsed.data.results.forEach(element => {
        const srcImage = element.thumbnail.path + '.' + element.thumbnail.extension
        const heroiName = element.name
        CreateDivHero(srcImage, heroiName, divHero)
    });
});
const CreateDivHero = (srcImage, heroiName, divtoAppend) => {
    const divPai = document.createElement('div');
    const divFilho = document.createElement('div');
    const textHero = document.createElement('text');
    const img = document.createElement('img');

    textHero.textContent = heroiName
    img.src = srcImage

    divFilho.appendChild(img)
    divFilho.appendChild(textHero)
    divPai.appendChild(divFilho)
    divtoAppend.appendChild(divPai)

    divPai.classList.add("personagem");

}





// Time Stamp
// const timex = Math.floor(Date.now() / 1000)
// console.log(timex)
