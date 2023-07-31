<?php
function formatCpf($cpf)
{
    $cpf = preg_replace('/[^0-9]/', '', $cpf); // Remove caracteres não numéricos
    $pattern = '/(\d{3})(\d{3})(\d{3})(\d{2})/';
    $replacement = '$1.$2.$3-$4';
    return preg_replace($pattern, $replacement, $cpf);
}

function formatTelefone($telefone)
{
    $telefone = preg_replace('/[^0-9]/', '', $telefone); // Remove caracteres não numéricos

    // Verifica o tamanho do telefone para definir o formato
    if (strlen($telefone) === 10) {
        $pattern = '/(\d{2})(\d{4})(\d{4})/';
        $replacement = '($1) $2-$3';
    } elseif (strlen($telefone) === 11) {
        $pattern = '/(\d{2})(\d{5})(\d{4})/';
        $replacement = '($1) $2-$3';
    } else {
        // Caso o telefone não esteja em um formato válido, retorna o número original
        return $telefone;
    }

    return preg_replace($pattern, $replacement, $telefone);
}


