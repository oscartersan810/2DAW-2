<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      class MonstruoDeLasGalletas {
        private $galletas; // galletas comidas
        public function __construct() {
        $this->galletas = 0;
        }
        public function getGalletas() {
        return $this->galletas;
        }
        public function come($g) {
        $this->galletas = $this->galletas + $g;
        }
        } 
    ?>
</body>
</html>