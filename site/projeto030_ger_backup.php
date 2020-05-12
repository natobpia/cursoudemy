<?php
    
    //include_once("conexao.php");

    //Ler as tabelas
    $result_tabela = "SHOW TABLES";
    $resultado_tabela = mysqli_query($conn, $result_tabela);

    while($row_tabela = mysqli_fetch_row($resultado_tabela)){

        $tabelas[] = $row_tabela[0];

    }

    //var_dump($tabelas);

    $result = "";

    foreach ($tabelas as $tabela) {
        //echo $tabela. "<br>";
        //Pesquisar o nome das colunas
        $result_colunas = "SELECT * FROM " . $tabela;
        $resultado_colunas = mysqli_query($conn, $result_colunas);

        $num_colunas = mysqli_num_fields($resultado_colunas);

        //echo $tabela. " - " . $num_colunas . "<br>";

        //Criar a instrução para apagar a tabela caso a mesma exista

        $result .= 'DROP TABLE IF EXISTS ' . $tabela . ';';

        //Pesquisar como a coluna é criada
        $result_cr_col = "SHOW CREATE TABLE " . $tabela;
        $resultado_cr_col = mysqli_query($conn, $result_cr_col);
        $row_cr_col = mysqli_fetch_row($resultado_cr_col);
        //var_dump($row_cr_col);

        $result .= "\n\n" . $row_cr_col[1] . ";\n\n";

        //percorrer o array de colunas
        for($i = 0; $i < $num_colunas; $i++){
            //Ler o valor de cada coluna no banco de dados
            while($row_tp_col = mysqli_fetch_row($resultado_colunas)){
                //var_dump($row_tp_col);
                //Criar a instrução da QUERY para inserir os dados
                $result .= 'INSERT INTO ' . $tabela . ' VALUES (';

                //Ler os dados da tabela
                for($j = 0; $j < $num_colunas; $j++){
                    //addslashes - Adiciona barras invertidas a uma string
                    $row_tp_col[$j] = addslashes($row_tp_col[$j]);
                    //str_replace 0- Substitui todas as ocorrências da string \n pela \\n
                    $row_tp_col[$j] = str_replace("\n", "\\n", $row_tp_col[$j]);
                    if(isset($row_tp_col[$j])){
                        if(!empty($row_tp_col[$j])){
                            $result .= '"' . $row_tp_col[$j] . '"';
                        } else {
                            $result .= 'NULL';
                        }
                    } else {
                        $result .= 'NULL';
                    }
                    if($j < ($num_colunas - 1)){
                        $result .= ',';
                    }
                }
                $result .= ");\n";
            }
        }
        $result .= "\n\n";
    }

    //echo $result;

    //Criar o diretório de backup
    $diretorio = 'backup/';
    if(!is_dir($diretorio)){
        mkdir($diretorio, 0777, true);
        chmod($diretorio, 0777);
    }

    //Nome do arquivo de backup
    $data = date('Y-m-d-h-i-s');
    $nome_arquivo = $diretorio."db_backup_".$data;

    $handle = fopen($nome_arquivo.'.sql', 'w+');

    fwrite($handle, $result);
    fclose($handle);

    //Montar o link do arquivo
    $download = $nome_arquivo . ".sql";

    //Adicionar o header para download
    if(file_exists($download)){
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false);
        header("Content-Type: application/force-download");
        header("Content-Disposition: attachment; filename=\"" . basename($download) . "\";");
        header("Content-Transfer-Enconding: binary");
        header("Content-Length: " . filesize($download));
        readfile($download);
        $_SESSION['msg'] = "<span style='color: green'>Exportado BD com sucesso.</span>";
    }else{
        $_SESSION['msg'] = "<span style='color: red'>Não foi possível exportar o BD com sucesso.</span>";
    }