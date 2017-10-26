<?php 
/**
 * Classe que controla todos os processos e dados da view home
 * 
 * @copyright 2017 Mizael de Melo 
 */
Class homeController extends Controller
{
    public function index() 
    {
        $dados = array();
        $data = array();
        
        /**
         * @var $data = Modelo do array que preencherá a tabela
         */
        $data['aheader'] = [
            array(
                'Cod'       => 'Código',
                'Descricao' => 'Código do Produto',
            ),
            array(
                'Descri'    => 'Descrição',
                'Descricao' => 'Descrição do Produto',
            ),
            
            array(
                'Fabri'     => 'Fabricante',
                'Descricao' => 'Fabricante do Produto',
            ),array(
                'Preco'     => 'Preço',    
                'Descricao' => 'Preço do Produto',
            )
        ];
        $data['data'] = [
           array(
                'Cod'       => '005547',
                'Descri'    => 'Luva estéril para Cirurgia',
                'Fabri'     => 'Descarpack do Brasil',
                'Preco'     => '21.08'
           ),
            array(
           
                'Cod'       => '011850',
                'Descri'    => 'Senringa de 3ml sem agulha',
                'Fabri'     => 'Descarpack do Brasil',
                'Preco'     => '1.14'
            ),
            array(
             
                'Cod'       => '102041',
                'Descri'    => 'Escova ginecológica',
                'Fabri'     => 'Kolplast',
                'Preco'     => '0.58'
            ),
            array(
                
                'Cod'       => '102041',
                'Descri'    => 'Escova ginecológica',
                'Fabri'     => 'Kolplast',
                'Preco'     => '0.58'
            ),
            array(
                
                'Cod'       => '102041',
                'Descri'    => 'Escova ginecológica',
                'Fabri'     => 'Kolplast',
                'Preco'     => '0.58'
            ),
            array(
           
                'Cod'       => '011850',
                'Descri'    => 'Senringa de 3ml sem agulha',
                'Fabri'     => 'Descarpack do Brasil',
                'Preco'     => '1.14'
            ),
            array(
                
                'Cod'       => '011850',
                'Descri'    => 'Senringa de 3ml sem agulha',
                'Fabri'     => 'Descarpack do Brasil',
                'Preco'     => '1.14'
            ),
            array(
            
                'Cod'       => '102041',
                'Descri'    => 'Escova ginecológica',
                'Fabri'     => 'Kolplast',
                'Preco'     => '0.58'
            ),
            array(
            
                'Cod'       => '102041',
                'Descri'    => 'Escova ginecológica',
                'Fabri'     => 'Kolplast',
                'Preco'     => '0.58'
            ), array(
                'Cod'       => '102041',
                'Descri'    => 'Escova ginecológica',
                'Fabri'      => 'Kolplast',
                'Preco'     => '0.58'
            )
        ];    

        $dados['aheader'] = $data['aheader'];
        $dados['data'] = $data;   
        $this->loadTemplate('home', $dados);
    }

}