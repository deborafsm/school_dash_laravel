<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MakeCsv extends Controller
{
    public function export(Request $request){

        $sessao = json_encode( $request->session()->all());

        $obj = json_decode($sessao);
        
        $arq_excel = "";
        $dados = DB::select("SELECT  *  FROM  aluno");
        $newData = array();
        
        foreach($dados as $key => $value)
        {
            $newData[$key] = $value;
        }
        
        $arquivo = 'soma_solicitacoes.xls';
        $html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= "<td colspan='4'>Total de solicitações canceladas e concluídas.</tr>";
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Nome Aluno</b></td>';
		$html .= '<td><b>Data de Nascimento</b></td>';
	
		$html .= '</tr>';
        
        
        foreach($dados as $key => $value)
        {
            $html .= "<tr>";
			$html .= "<td style='text-align: center; vertical-align: middle'>".$value->nome_aluno."</td>";
			$html .= "<td style='text-align: center; vertical-align: middle'>".$value->data_nascimento."</td>";
			$html .= "</tr>";
        }
        
        // Configurações header para forçar o download
		header ("Expires: Mon, 30 Jul 2097 10:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/xls");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit;
       
        
        
    }
}
