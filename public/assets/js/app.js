// Verificações campos CPF
$(document).ready(function() {
    // Quando o campo de entrada for modificado, formatar e limitar o CPF com os separadores
    $("#cpf").on("input", function() {
      let cpfValue = $(this).val().replace(/\D/g, ""); // Remover todos os caracteres não numéricos do campo

      // Limitar o campo para 11 caracteres (tamanho do CPF sem os separadores)
      if (cpfValue.length > 11) {
        cpfValue = cpfValue.slice(0, 11);
      }

      // Formatar o CPF com os separadores
      if (cpfValue.length >= 3) {
        cpfValue = cpfValue.replace(/^(\d{3})(\d)/, "$1.$2");
      }
      if (cpfValue.length >= 6) {
        cpfValue = cpfValue.replace(/^(\d{3})\.(\d{3})(\d)/, "$1.$2.$3");
      }
      if (cpfValue.length >= 9) {
        cpfValue = cpfValue.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d)/, "$1.$2.$3-$4");
      }

      $(this).val(cpfValue);
    });

    // Quando o formulário for enviado, remover os separadores antes do envio
    $("form").submit(function() {
      const cpfValue = $("#cpf").val().replace(/\D/g, ""); // Remover todos os caracteres não numéricos do campo
      $("#cpf").val(cpfValue);
    });
  });
// FIM Verificações campo CPF

// Verificações campo Telefone
$(document).ready(function() {
    // Quando o campo de entrada for modificado, formatar e limitar o CPF com os separadores
    $("#telefone").on("input", function() {
      let telefoneValue = $(this).val().replace(/\D/g, ""); // Remover todos os caracteres não numéricos do campo

      // Limitar o campo para 11 caracteres (tamanho do CPF sem os separadores)
      if (telefoneValue.length > 11) {
        telefoneValue = telefoneValue.slice(0, 11);
      }

      // Formatar o CPF com os separadores
      if (telefoneValue.length >= 3) {
        telefoneValue = telefoneValue.replace(/^(\d{3})(\d)/, "$1.$2");
      }
      if (telefoneValue.length >= 6) {
        telefoneValue = telefoneValue.replace(/^(\d{3})\.(\d{3})(\d)/, "$1.$2.$3");
      }
      if (telefoneValue.length >= 9) {
        telefoneValue = telefoneValue.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d)/, "$1.$2.$3-$4");
      }

      $(this).val(telefoneValue);
    });

    // Quando o formulário for enviado, remover os separadores antes do envio
    $("form").submit(function() {
      const telefoneValue = $("#cpf").val().replace(/\D/g, ""); // Remover todos os caracteres não numéricos do campo
      $("#cpf").val(telefoneValue);
    });
  });
// FIM Verificações campo Telefone



var btnMostrar = document.getElementById('criarModulo'); // trazer o botão inserir
var a = document.querySelector('#modulos'); // trazer a section principal com os módulos

btnMostrar.addEventListener('click', function() {

    for (var i = 1; i < a.children.length - 1; i++) {
        if(a.children[i].style.display === ''){
            a.children[i].style.display = 'block';
            break;
        }
    }
});

var fecharModulo2 = document.getElementById('ocultarModulo2');
var fecharModulo3 = document.getElementById('ocultarModulo3');
var fecharModulo4 = document.getElementById('ocultarModulo4');
var fecharModulo5 = document.getElementById('ocultarModulo5');
var fecharModulo6 = document.getElementById('ocultarModulo6');
var fecharModulo7 = document.getElementById('ocultarModulo7');
var fecharModulo8 = document.getElementById('ocultarModulo8');
var fecharModulo9 = document.getElementById('ocultarModulo9');
var fecharModulo10 = document.getElementById('ocultarModulo10');

fecharModulo2.addEventListener('click', function() {
    fecharModulo2.parentNode.parentNode.style.display = '';
});
fecharModulo3.addEventListener('click', function() {
    fecharModulo3.parentNode.parentNode.style.display = '';
});
fecharModulo4.addEventListener('click', function() {
    fecharModulo4.parentNode.parentNode.style.display = '';
});
fecharModulo5.addEventListener('click', function() {
    fecharModulo5.parentNode.parentNode.style.display = '';
});
fecharModulo6.addEventListener('click', function() {
    fecharModulo6.parentNode.parentNode.style.display = '';
});
fecharModulo7.addEventListener('click', function() {
    fecharModulo7.parentNode.parentNode.style.display = '';
});
fecharModulo8.addEventListener('click', function() {
    fecharModulo8.parentNode.parentNode.style.display = '';
});
fecharModulo9.addEventListener('click', function() {
    fecharModulo9.parentNode.parentNode.style.display = '';
});
fecharModulo10.addEventListener('click', function() {
    fecharModulo10.parentNode.parentNode.style.display = '';
});

