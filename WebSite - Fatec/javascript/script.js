function trocarTema()
{
    document.getElementsById("trocarTema")
}

// ========================================================================================

function situacaoBotao(button) 
{
    button.classList.toggle('off');
    button.classList.toggle('on');
    button.innerHTML = button.classList.contains('off') ? 'Desligado' : 'Ligado';
}

function adicionarSemestre() 
{

}