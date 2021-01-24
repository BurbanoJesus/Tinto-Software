<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";

$estilos = ['estilos_inicio.css','comp_accordion.css'];
include VIEWS.'templates/head.php';

include VIEWS.'templates/header.php';

?>
<main>
    <div class="main">
        <div class="contenido">
            <div class="content_preguntas_frecuentes">
                <h2 class="main">Preguntas Frecuentes</h2>
                <div class="accordion_elemento">
                    <div class="nombre_elemento active">
                        <div class="open_ac">
                            <div class="a"></div>
                            <div class="b"></div>
                        </div>
                        <span>¿ Cuanto tiempo se tarda en realizar una página web ?</span>
                    </div>
                    <div class="accordion_contenido">
                        <div class="wrap_contenido">
                            <p>Generalmente los sitios web tienen un cronograma de trabajo de 10, 15 o hasta 20 días para la entrega. En algunos casos se puede extender el tiempo de entrega por el tipo de desarrollo que este requiera.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion_elemento">
                    <div class="nombre_elemento active">
                        <div class="open_ac">
                            <div class="a"></div>
                            <div class="b"></div>
                        </div>
                        <span>¿ El nombre de dominio queda registrado a nombre del cliente?</span>
                    </div>
                    <div class="accordion_contenido">
                        <div class="wrap_contenido">
                            <p>Si. El Hosting y el Dominio quedan a nombre del cliente. De igual manera se les hace entrega del panel donde se encuentra alojado el Dominio para que puedan tener control total (Cambio de información de registro, DNS, etc.). Asi mismo se les hace entrega de los datos de acceso del Servidor Hosting (cPanel) a donde podrán tener control total de los archivos, correos electrónicos y demás información que se va utilizar para el funcionamiento del sitio web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
$scripts = ['comp_accordion.js'];
include VIEWS.'templates/footer.php';
include VIEWS.'templates/foot.php'; 
?>