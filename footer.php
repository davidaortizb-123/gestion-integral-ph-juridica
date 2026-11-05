<footer class="site-footer">
  <div class="wrap">
    <div class="footer-top">
      <div class="footer-brand">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/logo.svg'); ?>" alt=""><span class="brand-text"><strong>GESTIÓN INTEGRAL</strong><strong>PH Y JURÍDICA</strong><span>S.A.S.</span></span></a>
        <p>Administramos el presente, aseguramos tu futuro. Gestión profesional y acompañamiento jurídico para una copropiedad organizada, sostenible y bien respaldada.</p>
      </div>
      <nav class="footer-nav" aria-label="Enlaces del pie"><a href="<?php echo esc_url(home_url('/#nosotros')); ?>">Nosotros</a><a href="<?php echo esc_url(home_url('/#servicios')); ?>">Servicios</a><a href="<?php echo esc_url(home_url('/#metodologia')); ?>">Cómo trabajamos</a><a href="<?php echo esc_url(home_url('/#preguntas')); ?>">Preguntas frecuentes</a><a href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a><a href="<?php echo esc_url(home_url('/politica-de-tratamiento-de-datos/')); ?>">Política de datos</a></nav>
    </div>
    <div class="footer-bottom"><span>© <?php echo esc_html(wp_date('Y')); ?> Gestión Integral PH y Jurídica S.A.S. Todos los derechos reservados.</span><span>Bogotá, Colombia · Administración y respaldo jurídico</span></div>
  </div>
</footer>
<?php
$wa = '57'.giph_digits(giph_contact_value('whatsapp'));
?>
<a class="floating-wa" href="https://wa.me/<?php echo esc_attr($wa); ?>?text=<?php echo rawurlencode('Hola, deseo recibir información sobre sus servicios de administración de propiedad horizontal y asesoría jurídica.'); ?>" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11.8 11.8 0 0 0 12.1 0C5.6 0 .3 5.3.3 11.8c0 2.1.5 4.1 1.6 5.9L0 24l6.5-1.7a11.8 11.8 0 0 0 5.6 1.4h.1c6.5 0 11.8-5.3 11.8-11.8 0-3.2-1.2-6.1-3.5-8.4ZM12.2 21.7h-.1c-1.8 0-3.5-.5-5-1.4l-.4-.2-3.8 1 1-3.7-.2-.4a9.8 9.8 0 0 1-1.5-5.2c0-5.4 4.4-9.8 9.8-9.8 2.6 0 5.1 1 6.9 2.9a9.7 9.7 0 0 1 2.9 6.9c0 5.4-4.4 9.8-9.7 9.8Zm5.4-7.3c-.3-.2-1.7-.8-2-.9-.3-.1-.5-.2-.7.2-.2.3-.7.9-.9 1.1-.2.2-.3.2-.6.1-.3-.2-1.2-.5-2.3-1.5-.9-.8-1.5-1.7-1.7-2-.2-.3 0-.4.1-.6l.5-.5c.2-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.8 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.1-.3-.2-.6-.4Z"/></svg>
</a>
<?php wp_footer(); ?>
</body></html>
