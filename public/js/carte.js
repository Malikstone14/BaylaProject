var signature = document.getElementById("cartesignature");
var btnsignature = document.getElementById("signature")
var biere = document.getElementById("cartebiere");
var btnbiere = document.getElementById("biere");
var spiritueux = document.getElementById("cartespiritueux");
var btnspiritueux = document.getElementById("spiritueux");
var gin = document.getElementById("cartegin");
var btngin = document.getElementById("gin");
var champagne = document.getElementById("cartechampagne");
var btnchampagne = document.getElementById("champagne");
var editalcool = document.getElementById("edit-alcool");
var typebiere = document.getElementById("typebiere");
var typealcool = document.getElementById('typealcool');
var boissonfraiche = document.getElementById("carteboissonfraiche");
var btnboissonfraiche = document.getElementById("fraiche");
var boissonchaude = document.getElementById("carteboissonchaude");
var btnboissonchaude = document.getElementById("chaude");
var $conteudogeneral = document.querySelector(".conteudo-general");
var $conteudoEmArray = [].slice.call(document.querySelectorAll(".content"));
var $botoesDeFechar = [].slice.call(
  document.querySelectorAll(".content-botao-fechar")
);

function AfficherChoixBiere(typealcool){
  if(typealcool.value == "biere"){
    typebiere.style.display = "inline"
    }else{
    typebiere.style.display = "none"
    }
};

setTimeout(function () {
  $conteudogeneral.classList.remove("js-conteudo-general");
}, 200);

$conteudoEmArray.forEach(function ($content) {
  $content.addEventListener("click", function () {
    if (this.classList.contains("caixa-conteudo-ativo")) return;
    $conteudogeneral.classList.add("caixa--content-ativo");
    this.classList.add("caixa-conteudo-ativo");
  });
});

$botoesDeFechar.forEach(function ($btn) {
  $btn.addEventListener("click", function (e) {
    e.stopPropagation();
    $conteudogeneral.classList.remove("caixa--content-ativo");
    document
      .querySelector(".content.caixa-conteudo-ativo")
      .classList.remove("caixa-conteudo-ativo");
  });
});
btnsignature.addEventListener("click", AfficherSignature);
btnbiere.addEventListener("click", AfficherBiere);
btnspiritueux.addEventListener("click", AfficherSpiritueux);
btngin.addEventListener("click", AfficherGin);
btnchampagne.addEventListener("click", AfficherChampagne);

function AfficherBiere(){
  signature.style.display = "none";
  biere.style.display = "flex";
  spiritueux.style.display = "none";
  gin.style.display = "none";
  champagne.style.display = "none";
};

function AfficherSignature(){
    signature.style.display = "inline";
    biere.style.display ="none";
    spiritueux.style.display ="none";
    gin.style.display = "none";
    champagne.style.display = "none";
  };

function AfficherSpiritueux(){
    signature.style.display = "none";
    biere.style.display ="none";
    spiritueux.style.display ="inline";
    gin.style.display = "none";
    champagne.style.display = "none";
};

function AfficherGin(){
  signature.style.display = "none";
  biere.style.display ="none";
  spiritueux.style.display ="none";
  gin.style.display = "inline";
  champagne.style.display = "none";
};

function AfficherChampagne(){
  signature.style.display = "none";
  biere.style.display ="none";
  spiritueux.style.display ="none";
  gin.style.display = "none";
  champagne.style.display = "inline";
};

btnboissonfraiche.addEventListener("click", AfficherBoissonFraiche);
btnboissonchaude.addEventListener("click", AfficherBoissonChaude);

function AfficherBoissonFraiche(){
  console.log("hello");
  boissonfraiche.style.display = "inline";
  boissonchaude.style.display = "none";
}

function AfficherBoissonChaude(){
  console.log("cc");
  boissonfraiche.style.display = "none";
  boissonchaude.style.display = "inline";
}



