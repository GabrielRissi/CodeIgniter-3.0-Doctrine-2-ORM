<?php // CSS styles compressed

header("Content-type: text/css; charset: UTF-8");
header("Cache-Control: max-age=86400");

/** Executar compressão dos arquivos CSS */
ob_start("compress");

/** Comprimir arquivos CSS */
function compress($buffer)
{
    /* Remover os comentarios */
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    
    /* Remove tabs, espaços, newlines, etc. */
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", "   "), '', $buffer);
    $buffer = str_replace(array("  "), ' ', $buffer);
    
    return $buffer;
}

include 'bootstrap.min.css';
include 'bootstrap-theme.min.css';
include 'font-awesome.min.css';
include 'normalize.css';
include 'style.css';

ob_end_flush();
