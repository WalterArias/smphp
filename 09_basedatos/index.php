<?php
include_once('plantilla/header.php');
?>
<section>
    <article>
        <h1>XML : Definiciones</h1>
        <p>
            XML son las siglas de Extensible Markup Language, que podemos traducir
            como Lenguaje de Marcas Extensibles, aunque realmente es un
            meta-lenguaje. Normalmente, los archivos XML contienen información de
            cualquier tipo, ya sea información sensible o información de cualquier
            ámbito. Los archivos XML se componen de etiquetas que nos aportan datos
            e información que queremos procesar. Estas etiquetas pueden estar de
            forma individual o anidadas.
        </p>
        <h2>Porqué debo usarlo ?</h2>
        <p>
            <ul>
                <li> El XML separa datos de HTML.</li>
                <li> XML simplifica el intercambio de datos : Tanto
                    los sistemas informáticos como las bases de datos contienen información
                    en formatos incompatibles. <br> Los datos XML se almacenan en formato de
                    texto simple, lo que nos posibilita una forma independiente de almacenar
                    datos. Esto facilita mucho la creación de datos que pueden ser
                    compartidos por diferentes aplicaciones.</li>
                <li>Uno de los desafíos más difíciles para los desarrolladores es intercambiar datos entre sistemas
                    incompatibles a través de Internet. El intercambio de datos usando XML reduce en gran medida esta
                    complejidad
                    porque los datos pueden ser leídos por diferentes aplicaciones incompatibles.</li>
            </ul>
        </p>
    </article>
    <article>
        <h2>La factura electrónica en Colombia </h2>
        <p>
            Estos formatos XML fueron retomados por la DIAN para hacer extensible el
            lenguaje y la usabilidad de la facturación electrónica. La Resolución
            000019 de 2016 se encarga de regular la forma de los formatos XML para
            la presentación de la factura electrónica en Colombia. A partir del
            Decreto 2242 de 2015 y la publicación de la Resolución 00030 de 2019 el
            formato XML se estableció como el lenguaje en el que debe estar escritas
            todas las facturas electrónicas. Es decir que la generación, trasmisión
            de la factura electrónica por parte del obligado a expedirla debe estar
            en formato XML; de igual manera la entrega de la factura electrónica al
            comprador estará en este formato.
        </p>
    </article>
</section>
<?php
include_once('plantilla/footer.php');
?>