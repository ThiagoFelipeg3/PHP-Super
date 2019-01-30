<?php 
/********************************************************************** 
 * Este comando vai armazenar na memória tudo que for impresso na tela
 * que no caso seria as tags <h1>..., porém na tela não aparecer nada. 
 **********************************************************************/ 
ob_start();
?>
<h1>Relatório Teste</h1>
<table border="1" width="100%">
    <tr>
        <th>Nome do cliente</th>
        <th>Valor do pedido</th>
        <th>Data de compra</th>
    </tr>
    <tr>
        <td>Thiago Felipe</td>
        <td>R$ 1.500,00</td>
        <td>10/01/2019</td>
    </tr>
    <tr>
        <td>Fernando</td>
        <td>R$ 589,00</td>
        <td>24/01/2019</td>
    </tr>
    <tr>
        <td>Jassica</td>
        <td>R$ 5.054,00</td>
        <td>30/01/2019</td>
    </tr>
</table>
<?php
// O comando ob_get_contents(); retorna tudo que esta na memória salva pelo ob_start();
$html = ob_get_contents();

// O comando ob_end_clean(); afinalizar o ob_start(); e limpa a memória
ob_end_clean();

// É preciso fazer o carregamento do arquivo gerado pelo composer
require 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

// Esta função escreve o HTML preparado para o PDF
$mpdf->WriteHTML($html);

/*********************************
 * Parametros pra função Output();
 * I = Abra no browser
 * D = faz Download
 * F = Salvar no servidor
 *********************************/ 
$mpdf->Output('arquivo.pdf','I');

?>