<header class="PRINCIPAL_encabezado_2">
    <div class="PRINCIPAL_contenido">
        <h2>Calidad y Seguridad</h2>
    </div>
</header>

<section class="FM_seccion">
    <div class="titulo">
        <h1>REALIZAR EL PAGO</h1>
    </div>
    <div class="contenido">
        <?php
        if ($rutas[0]=="pacifico") {
            echo "<p> Banco del Pacifico </p>
            <p> Beneficiario: ENRIQUE CARDENAS </p>
            <p> Cuenta: 7793081 Cuenta CORRIENTE </p>
            <p> Cédula: 1804019709 </p>
            <p> Email: enriquefcv@yahoo.com </p>";
        }
        if ($rutas[0]=="pichincha") {
            echo "
            <div class='contenido'>
                <h2>CUENTA BANCARIA</h2>
                <p> Banco del Pichincha </p>
                <p> Beneficiario: ENRIQUE CARDENAS </p>
                <p> Cuenta: 2205550130 Cuenta AHORRO </p>
                <p> Cédula: 1804019709 </p>
                <p> Email: enriquefcv@yahoo.com </p>
            </div>
            <div class='contenido'>
                <a href='Bpichincha'>
                    <h2> ☞ PAGA CON QR PICHINCHA ☜ </h2>
                </a>
            </div>";
        }
        if ($rutas[0]=="austro") {
            echo "<p> Banco del Austro </p>
            <p> Beneficiario: EDISSON DAVID RAMÍREZ </p>
            <p> Cuenta: 6139027 Cuenta AHORRO </p>
            <p> Cédula: 1804626974 </p>
            <p> Email: dramirez91@outlook.es</p>";
        }
        if ($rutas[0]=="provincia") {
            echo "<p> Banco Provincia </p>
            <p> Beneficiario: EDISSON DAVID RAMÍREZ </p>
            <p> Cuenta: 4001-523277/5 Ahorro  </p>
            <p> CBU:  0140001403400152327751  </p>
            <p> Alias:  ORILLA.CHOCLO.LISBOA  </p>
            <p> DNI: 95819471 </p>
            <p> Email: dramirez91@outlook.es</p>";
        }
        if ($rutas[0]=="mercadopago") {
            echo "<p> MERCADO PAGO </p>
            <p> Beneficiario: EDISSON DAVID RAMÍREZ </p>
            <p> CVU:  0000003100029118216437  </p>
            <p> Alias:  nodo.ancho.berro.mp  </p>
            <p> DNI: 95819471 </p>
            <p> Email: dramirez91@outlook.es</p>";
        }
        if ($rutas[0]=="ars") {
            echo "<p> LEMON CASH </p>
            <p> Beneficiario: EDISSON DAVID RAMÍREZ </p>
            <p> CVU:  0000168300000001494510  </p>
            <p> Alias:  asurcar.jamona.LEMON  </p>
            <p> Lemontag: dramirez91 </p>
            <p> Email: dramirez91@outlook.es</p>";
        }
        ?>
    </div>
    
</section>