<?php
/*
 * Política de tratamiento de datos personales — plantilla inicial.
 * IMPORTANTE: completar todos los campos entre corchetes y solicitar revisión jurídica antes de publicar.
 */
get_header();
$email = giph_contact_value('email');
$address = giph_contact_value('address');
$city = giph_contact_value('city');
?>
<main class="page-content"><div class="wrap"><article class="entry-content">
  <span class="eyebrow">Información y privacidad</span>
  <h1>Política de tratamiento de datos personales</h1>
  <p><strong>Borrador para completar antes de publicar.</strong> Esta página es una estructura de trabajo y no constituye una política jurídica definitiva. La empresa debe completar la información pendiente y verificar que el texto corresponda a sus operaciones reales antes de habilitar la recepción de datos personales.</p>
  <h2>1. Responsable del tratamiento</h2>
  <p><strong>Responsable:</strong> Gestión Integral PH y Jurídica S.A.S. <strong>NIT:</strong> [COMPLETAR]. <strong>Domicilio:</strong> <?php echo esc_html($address.', '.$city); ?>. <strong>Correo para solicitudes:</strong> <?php echo esc_html($email); ?>. <strong>Teléfono:</strong> <?php echo esc_html(giph_contact_value('phone')); ?>.</p>
  <h2>2. Datos que podrían ser tratados</h2>
  <p>Según la consulta o relación comercial, podrían tratarse datos de identificación y contacto, información de la copropiedad, datos incluidos voluntariamente en una solicitud y la información necesaria para gestionar una propuesta o relación contractual. No envíe por este sitio información sensible ni documentos privados que no sean necesarios para su solicitud.</p>
  <h2>3. Finalidades</h2>
  <p>La información recibida podrá utilizarse para responder consultas, contactar a quien solicita información, preparar propuestas, coordinar reuniones y, cuando corresponda, gestionar una relación comercial o contractual. La empresa debe ajustar esta sección a sus finalidades efectivas y a los canales que realmente utilice.</p>
  <h2>4. Derechos de los titulares</h2>
  <p>El titular podrá presentar solicitudes relacionadas con el acceso, actualización, rectificación o supresión de sus datos, así como consultas o reclamaciones sobre su tratamiento, de acuerdo con la normativa aplicable. Para ello podrá escribir al correo indicado en esta página. <strong>[COMPLETAR: procedimiento, área responsable y plazos de atención].</strong></p>
  <h2>5. Conservación y seguridad</h2>
  <p>La empresa debe definir y describir los periodos de conservación, controles de acceso, medidas de seguridad y terceros que puedan intervenir en el tratamiento, según los procesos que efectivamente implemente. <strong>[COMPLETAR ESTA SECCIÓN ANTES DE PUBLICAR].</strong></p>
  <h2>6. Canales de atención</h2>
  <p>Correo: <?php echo esc_html($email); ?>. Dirección: <?php echo esc_html($address.', '.$city); ?>. Teléfono: <?php echo esc_html(giph_contact_value('phone')); ?>.</p>
  <h2>7. Vigencia y cambios</h2>
  <p><strong>Fecha de entrada en vigencia:</strong> [COMPLETAR]. <strong>Versión:</strong> [COMPLETAR]. La empresa debe indicar cómo informará cambios a esta política.</p>
  <p><em>Antes de publicar: completar el NIT y los campos pendientes, confirmar los canales de atención, describir los procesos y terceros reales, y solicitar revisión por un profesional jurídico en Colombia.</em></p>
</article></div></main>
<?php get_footer(); ?>
