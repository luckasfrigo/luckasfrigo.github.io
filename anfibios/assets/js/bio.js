var intervaloScroll;
var posicaoScroll = 0;
const larguraVitrine = document.getElementById('vitrine').offsetWidth;
const larguraFigura = document.getElementById('figura-vitrine').scrollWidth;
const velocidade = 20;
const tempoFrame = 1000 / 30;
document.getElementById('direita').onmouseover = function() {
    intervaloScroll = setInterval(function() {
        if (posicaoScroll + velocidade > larguraFigura - (larguraVitrine - 80)) {
            posicaoScroll = larguraFigura - (larguraVitrine - 80);
            document.getElementById('direita').onmouseout();
        } else {
            posicaoScroll += velocidade;
        }
        document.getElementById('figura-vitrine').style.setProperty('right', posicaoScroll + 'px');
    }, tempoFrame);
}
document.getElementById('direita').onmouseout = function() {
    clearInterval(intervaloScroll);
} 

document.getElementById('esquerda').onmouseover = function() {
    intervaloScroll = setInterval(function() {
        if (posicaoScroll - velocidade < 0) {
            posicaoScroll = 0;
            document.getElementById('direita').onmouseout();
        } else {
            posicaoScroll -= velocidade;
        }
        document.getElementById('figura-vitrine').style.setProperty('right', posicaoScroll + 'px');
    }, tempoFrame);
}
document.getElementById('esquerda').onmouseout = function() {
    clearInterval(intervaloScroll);
} 

var coachando = false;
document.getElementById('especie').onclick = function() {
    if (coachando) {
        document.getElementById('coachar').pause();
    } else {
        document.getElementById('coachar').play();
    }
    coachando = !coachando;
}