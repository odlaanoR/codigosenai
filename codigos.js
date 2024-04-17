//https://api.openweathermap.org/data/2.5/weather?q=Paulista&appid=f37d3286de44c3a9171ecb8e55d07280

const armazenaCidade = document.querySelector("#city-input");
const pesquisaBt = document.querySelector("#pesquisa");





pesquisaBt.addEventListener("click", (e) => {
    e.preventDefault(); //envia o envio do formulário
    console.log("teste");

    const cidade = armazenaCidade.value;
    console.log(cidade);
})