import './bootstrap';

async function inserirCliente() 
{
    let valor_nome = document.querySelector('#inserir-nome').value;
    let valor_email = document.querySelector('#inserir-email').value;

    try 
    {
        await addDoc(collection(db, "cliente"), 
        {
            nome: valor_nome,
            email: valor_email
        });

        const toast = new bootstrap.Toast(document.querySelector("#toastInserirSucesso"));
        toast.show();

        table.row.add([
            valor_nome, valor_email,
            `<button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                    data-bs-target="#consultarModal">
                    Consultar
                </button>
                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                    data-bs-target="#alterarModal">
                    Alterar
                </button>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#excluirModal">
                    Excluir
                </button>`
        ]).draw(false);
        table.column(0).data().sort();

    } 
    catch (e) 
    {
        const toast = new bootstrap.Toast(document.querySelector("#toastInserirErro"));
        toast.show();
    }

    document.querySelector('#inserir-nome').value = "";
    document.querySelector('#inserir-email').value = "";

}

async function carregarDados() 
{
    const q = query(collection(db, "cliente"));
    const resultado = await getDocs(q);
    
    resultado.forEach(
        (dados) => {
            table.row.add([
                dados.data().nome, dados.data().email,
                `<button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                    data-bs-target="#consultarModal">
                    Consultar
                </button>
                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                    data-bs-target="#alterarModal">
                    Alterar
                </button>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#excluirModal">
                    Excluir
                </button>`
            ]).draw(false);
            table.column(0).data().sort();
        }
    );
}

document.querySelector("#btnInserirCliente").addEventListener("click", inserirCliente);
document.addEventListener("DOMContentLoaded", function (e) 
{
    carregarDados();
});