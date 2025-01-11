<?php
namespace Core;

class BaseController
{

    // FAZ A INCLUSÃO DA VIEW
    public function view($file,array $data = null){

        $path = "View/" . $file . ".php";

        if(file_exists($path))
        {
            if($data <> null)
            {
                foreach ($data as $key => $value) {
                    $nome  = key($value);
                    $$nome = $nome;
                    $$nome = $value;
                }
            }
            include_once($path);
        }
    }

    // FAZ A INCLUSÃO DO TEMA
    public function extendTheme($theme)
    {
        $path = "View/" . $theme . ".php";
        if (file_exists($path)) {
            include_once($path);
        }
    }

    // ABRE A SESSÃO CRIANDO A DIV E DANDO UM ID
    public function openSection($name)
    {
        echo "<div id=$name>";
    }

    // FECHA A DIV E CHAMA FUNÇÃO QUE TROCA DE LUGAR A DIV
    public function endSection($name, $content)
    {
        echo "</div>";
        $this->replace($name,$content);
    }

    // TROCA DE LUGAR A DIV
    public function replace($name, $content)
    {
        echo "
            <script>
                var geral1 = document.getElementById('$content')
                var geral2 = document.getElementById('$name')
                var copy = geral2.outerHTML
                geral2.remove()
                geral1.insertAdjacentHTML('afterend', copy)
            </script>
        ";
    }

    // DEFINE A POSICÃO DE CADA SESSÃO DENTRO DO TEMA
    public function renderSection($name,$content)
    {
        echo "<div id=$content></div>";
    }
}