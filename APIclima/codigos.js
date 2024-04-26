//https://api.openweathermap.org/data/2.5/weather?q=Paulista&appid=f37d3286de44c3a9171ecb8e55d07280&lang=pt_br


//Variáveis e Seleções de Elementos 
const armazenaCidade = document.querySelector("#city-input");
const Btpesquisa = document.querySelector("#pesquisa");
const chaveAPI = "f37d3286de44c3a9171ecb8e55d07280";
const cityElement = document.querySelector("#city");
const tempElement = document.querySelector("#temperatura span");
const descElement = document.querySelector("#descricaocontainer");
const weatherIconElement = document.querySelector("#weather-icon");
const umidityElement = document.querySelector("#umidade span");
const windElement = document.querySelector("#vento span");


//Funções

const pegaDadosTempo = async(cidade) => {
    const apiWeatherURL = `https://api.openweathermap.org/data/2.5/weather?q=${cidade}&appid=${chaveAPI}&lang=pt_br`;

    const res = await fetch(apiWeatherURL);
    const data = await res.json();
    console.log(data);
};

const mostraDadosTempo = (cidade) => {
    console.log(cidade);
    pegaDadosTempo(cidade);
};

//Eventos
Btpesquisa.addEventListener("click", (e) => {
    e.preventDefault(); //evita o envio do formulário
    console.log("teste");
    
    const cidade = armazenaCidade.value;
    console.log(cidade);

    mostraDadosTempo(cidade);

})  