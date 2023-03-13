// Função Pesquisa Tabela (Presente no component centerSearch)

function FuncaoPesquisaTabela() {
    $(document).ready(function () {
        $("#inputPesquisa").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#tabelaPesquisa tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
}

// Script com função de pesquisa lista do menu de opções
function FuncaoPesquisaMenu() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("pesquisaMenu");
    filter = input.value.toUpperCase();
    ul = document.getElementById("MenuOpcao");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
