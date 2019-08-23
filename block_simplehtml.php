<?php
//colocar arquivo dentro da pasta blocks/simplehtml
class block_simplehtml extends block_base{ //unica coisa que pode mudar é a parte 'simplehtml'
    public function init(){ // dar valor a toda variavel que precisa ser instanciada
        $this->title = get_string('simplehtml','block_simplehtml'); 
    }

    public function get_content(){
        if($this->content !== null){
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = 'The content of our simple HTML block';
        $this->content->footer = 'Footer here';

        return $this->content;
    }
}


?>