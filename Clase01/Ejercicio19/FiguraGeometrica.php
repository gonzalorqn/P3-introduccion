<?php
    abstract class FiguraGeometrica
    {
        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        function __construct()
        {
            $this->_color = white;
            $this->_perimetro = 0;
            $this->_superficie = 0;
        }

        public function GetColor()
        {
            return $this->_color;
        }

        public function SetColor(string $color)
        {
            $this->_color = $color;
        }

        public function ToString()
        {
            return "Color: " . $this->_color . " Perimetro: " . $this->_perimetro . " Superficie: " . $this->_superficie;
        }

        public abstract function Dibujar();

        protected abstract function CalcularDatos();
    }