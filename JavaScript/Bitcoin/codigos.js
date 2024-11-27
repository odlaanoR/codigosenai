const url = "https://economia.awesomeapi.com.br/json/last/BTC-BRL";


function converter(){ // Declaração da função
    const valor_real = document.getElementById("converter_valor").value; //Criação da constante valor_real e armazenamento dos dados

    fetch(url) //A função fetch() serve para fazer a requisisção dos dados por meio do url declarado.

    .then(response => response.json()) // A função .then serve para tratar os dados recebidos pela API. Nesta linha, a função .then serve para converter a resposta em notação json.

    .then(data => {  // Aqui a função .then serve para estar acessando dos dados do objeto JSON advindo da API.
        
        const horario = data["BTCBRL"]["create_date"];
        const cotaçao_bitcoin = data["BTCBRL"]["bid"];
        const valor_bitcoin = valor_real * cotaçao_bitcoin;
        const resultado = valor_real + " Bitcoins " + "equivalem a R$ " + valor_bitcoin + " no dia " + horario;
        document.getElementById("valor_bitcoin").innerHTML = resultado;
    })
}