<!DOCTYPE html>
<html lang="es">
<?php require_once("head.php"); ?>

<body>
    <div class="container">
        <header class="text-center mb-4">
            <img src="assets/logo.png" alt="Logo del Aplicativo" class="logo"> <!-- Logo en el título -->
            <h1 class="epstitle">Tu EPS online</h1>
        </header>
        <div class="text-center mb-6 btn-group-toggle">
            <button class="btn btn-info" onclick="cargarIframe('https://www.adres.gov.co/')">¿A cual EPS
                pertenezco?</button>
            <button class="btn btn-info"
                onclick="cargarIframe('https://www.clinicasyhospitalesdecolombia.com/index/CH-eps-detalle.php')">Directorio
                EPS</button>
            <button class="btn btn-info" onclick="cargarIframe('https://www.famisanar.com.co/')">Famisanar
                Eps</button>
            <button class="btn btn-info" onclick="cargarIframe('assets/GUIA EPS.pdf')">Guias</button>
        </div>
        <div id="contenido">
            <iframe id="miIframe" src=""></iframe>
        </div>

        <!-- Pestañas para Solicitar Cita y Citas Realizadas -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="solicitar-cita-tab" data-toggle="tab" href="#solicitarCita" role="tab"
                    aria-controls="solicitarCita" aria-selected="true">Solicitar Cita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="citas-realizadas-tab" data-toggle="tab" href="#citasRealizadas" role="tab"
                    aria-controls="citasRealizadas" aria-selected="false">Citas Realizadas</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="solicitarCita" role="tabpanel"
                aria-labelledby="solicitar-cita-tab">
                <div class="form-section">
                    <h2>Solicitar Cita Médica</h2>
                    <form id="citaForm">
                        <div class="form-group">
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha de la Cita</label>
                            <input type="date" class="form-control" id="fecha" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Solicitar Cita</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="citasRealizadas" role="tabpanel" aria-labelledby="citas-realizadas-tab">
                <div class="citas-list">
                    <h3>Citas Solicitadas</h3>
                    <ul id="listaCitas" class="list-unstyled"></ul>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("footer.php"); ?>
</body>

</html>