<?php
    class Tarefas{
        private int $id;
        private string $titulo;
        private string $descricao;
        private string $dataCriacao;
        private int $usuario;
    
        public function __construct(int $id, string $titulo, string $descricao, string $dataCriacao, int $usuario) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->dataCriacao = $dataCriacao;
            $this->usuario = $usuario;
        }

        public function getId() {return $this->id;}
        public function getTitulo() {return $this->titulo;}
        public function getDescricao() {return $this->descricao;}
        public function getDataCriacao() {return $this->dataCriacao;}
        public function getUsuario() {return $this->usuario;}
    }
?>