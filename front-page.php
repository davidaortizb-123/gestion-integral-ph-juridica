<?php get_header();
$phone = giph_contact_value('phone'); $wa_display = giph_contact_value('whatsapp'); $email = giph_contact_value('email'); $address = giph_contact_value('address'); $city = giph_contact_value('city');
$phone_href = '+57'.giph_digits($phone); $wa_number = '57'.giph_digits($wa_display);
?>
<main>
<section class="hero" id="inicio">
 <div class="wrap hero-grid">
  <div>
   <span class="eyebrow">Administración · Asesoría · Confianza</span>
   <h1>Una copropiedad bien gestionada, <em>un futuro más seguro.</em></h1>
   <p class="hero-copy">Integramos administración profesional de propiedad horizontal y respaldo jurídico especializado para cuidar el patrimonio, fortalecer la convivencia y dar tranquilidad a propietarios y residentes.</p>
   <div class="hero-actions"><a class="button button-primary" href="#contacto">Conversemos sobre su copropiedad <span aria-hidden="true">↗</span></a><a class="button button-outline" href="#servicios">Conocer servicios</a></div>
   <div class="hero-note">Acompañamiento integral para copropiedades residenciales, comerciales y mixtas.</div>
  </div>
  <aside class="hero-card" aria-label="Resumen de servicios">
   <div class="hero-card-top"><span>Gestión integral PH y jurídica</span><span class="hero-card-mark"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/logo-mark.svg'); ?>" alt=""></span></div>
   <h2>Administramos el presente, aseguramos tu futuro.</h2>
   <p>Un equipo que conecta gestión, planeación y criterio jurídico para acompañar cada etapa de su copropiedad.</p>
   <div class="hero-feature"><span class="num">01</span><div><strong>Administración transparente</strong><small>Planeación, control y seguimiento</small></div></div>
   <div class="hero-feature"><span class="num">02</span><div><strong>Respaldo jurídico</strong><small>Prevención, orientación y solución</small></div></div>
   <div class="hero-feature"><span class="num">03</span><div><strong>Comunicación efectiva</strong><small>Información clara y oportuna</small></div></div>
  </aside>
 </div>
</section>
<section class="trust-strip" aria-label="Principios de servicio"><div class="wrap trust-grid">
 <div class="trust-item"><span class="trust-icon">⌂</span><div><strong>Propiedad horizontal</strong><small>Gestión especializada</small></div></div>
 <div class="trust-item"><span class="trust-icon">⚖</span><div><strong>Acompañamiento jurídico</strong><small>Prevención y respaldo</small></div></div>
 <div class="trust-item"><span class="trust-icon">◇</span><div><strong>Transparencia</strong><small>Procesos claros</small></div></div>
 <div class="trust-item"><span class="trust-icon">⌖</span><div><strong>Bogotá, Colombia</strong><small>Atención cercana</small></div></div>
</div></section>
<section class="section" id="nosotros"><div class="wrap about-grid">
 <div class="about-visual"><div class="visual-lines"></div><div class="visual-caption"><strong>Gestión que cuida su patrimonio.</strong><span>Orden administrativo y tranquilidad para la comunidad.</span></div></div>
 <div class="about-copy"><span class="eyebrow">Quiénes somos</span><h2>Su aliado para una copropiedad organizada y sostenible.</h2>
 <p>En <strong>Gestión Integral PH y Jurídica S.A.S.</strong> ofrecemos soluciones que articulan la administración de propiedad horizontal con el acompañamiento jurídico. Trabajamos para que cada decisión tenga planeación, seguimiento y fundamento, promoviendo el cuidado de los bienes comunes y una convivencia constructiva.</p>
 <p>Entendemos que cada copropiedad tiene necesidades propias. Por eso, nuestro servicio parte de escuchar a la comunidad, identificar prioridades y establecer una ruta de trabajo clara.</p>
 <div class="about-points"><div class="about-point"><span class="check">✓</span><span>Planeación y seguimiento</span></div><div class="about-point"><span class="check">✓</span><span>Información comprensible</span></div><div class="about-point"><span class="check">✓</span><span>Prevención de riesgos</span></div><div class="about-point"><span class="check">✓</span><span>Atención a las necesidades</span></div></div>
 </div>
</div></section>
<section class="section services-section" id="servicios"><div class="wrap">
 <div class="section-head"><span class="eyebrow">Qué hacemos</span><h2>Soluciones integrales para su copropiedad.</h2><p>Dos frentes de trabajo coordinados para que la operación diaria, las finanzas y las decisiones de su comunidad estén mejor acompañadas.</p></div>
 <div class="services-grid">
  <article class="service-card"><div class="service-top"><span class="service-symbol"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 21V5l9-3 9 3v16M7 21v-5h4v5m4-12h2m-2 4h2m-10-4h2m-2 4h2M2 21h20"/></svg></span><span class="service-label">Gestión administrativa</span></div>
   <h3>Gestión de propiedad horizontal</h3><p>Administración profesional, responsable y transparente, orientada al buen funcionamiento y conservación de la copropiedad.</p>
   <ul class="service-list"><li>Administración profesional y transparente</li><li>Gestión financiera y presupuestos</li><li>Mantenimiento preventivo y correctivo</li><li>Gestión de zonas comunes y amenidades</li><li>Asambleas, actas y seguimiento de compromisos</li><li>Coordinación y seguimiento de proveedores</li></ul>
   <div class="service-foot">Orden, control y cuidado del patrimonio <span>↗</span></div>
  </article>
  <article class="service-card featured"><div class="service-top"><span class="service-symbol"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v17M4 6h16M6 6l-4 8h8L6 6Zm12 0-4 8h8l-4-8ZM8 21h8"/></svg></span><span class="service-label">Prevención y respaldo</span></div>
   <h3>Respaldo jurídico especializado</h3><p>Acompañamiento para tomar decisiones informadas, gestionar situaciones complejas y fortalecer el cumplimiento de las disposiciones aplicables.</p>
   <ul class="service-list"><li>Asesoría legal en PH y asuntos comerciales</li><li>Gestión de cartera morosa</li><li>Redacción y revisión de contratos</li><li>Resolución de conflictos y mediación</li><li>Orientación sobre RPH y normativa aplicable</li><li>Acompañamiento en asambleas y decisiones</li></ul>
   <div class="service-foot">Decisiones con criterio y respaldo <span>↗</span></div>
  </article>
 </div>
</div></section>
<section class="section" id="metodologia"><div class="wrap">
 <div class="section-head"><span class="eyebrow">Nuestra metodología</span><h2>Un proceso claro, de principio a fin.</h2><p>La confianza se construye con comunicación, responsabilidades definidas y seguimiento continuo.</p></div>
 <div class="process-grid"><article class="process-card"><h3>Escuchamos y diagnosticamos</h3><p>Conocemos la copropiedad, sus prioridades, estado operativo y principales retos.</p></article><article class="process-card"><h3>Planeamos soluciones</h3><p>Definimos objetivos, actividades, responsables y prioridades de trabajo.</p></article><article class="process-card"><h3>Ejecutamos y acompañamos</h3><p>Coordinamos la gestión administrativa y el apoyo jurídico requerido.</p></article><article class="process-card"><h3>Informamos y mejoramos</h3><p>Hacemos seguimiento, comunicamos avances y proponemos ajustes.</p></article></div>
</div></section>
<section class="section audience"><div class="wrap audience-grid"><div><span class="eyebrow">A quién acompañamos</span><h2>Soluciones para diferentes tipos de copropiedad.</h2><p>Adaptamos el alcance de la gestión a las características, reglamentos, recursos y objetivos de cada comunidad.</p><a class="button button-primary" href="#contacto">Cuéntenos su necesidad <span>↗</span></a></div><div class="audience-cards"><div class="audience-card"><strong>Residencial</strong><span>Conjuntos y edificios de vivienda</span></div><div class="audience-card"><strong>Comercial</strong><span>Centros y edificios comerciales</span></div><div class="audience-card"><strong>Mixta</strong><span>Copropiedades de uso combinado</span></div></div></div></section>
<section class="section"><div class="wrap why-grid"><div><span class="eyebrow">Por qué elegirnos</span><div class="section-head" style="margin-bottom:26px"><h2>Su tranquilidad también es parte de nuestro trabajo.</h2><p>Una gestión cercana y estructurada ayuda a anticipar dificultades, cuidar recursos y fortalecer la confianza de la comunidad.</p></div>
 <div class="why-list"><div class="why-item"><span class="why-icon">✦</span><div><h3>Experiencia y profesionalismo</h3><p>Atención responsable y enfoque en las necesidades reales de cada copropiedad.</p></div></div><div class="why-item"><span class="why-icon">◈</span><div><h3>Transparencia en cada proceso</h3><p>Información organizada, comunicación clara y seguimiento de las actividades.</p></div></div><div class="why-item"><span class="why-icon">⌘</span><div><h3>Soporte tecnológico</h3><p>Herramientas y canales de comunicación para facilitar la gestión y el acceso a la información.</p></div></div><div class="why-item"><span class="why-icon">⌂</span><div><h3>Cuidado y valorización del inmueble</h3><p>Atención al mantenimiento, la operación y la conservación de los bienes comunes.</p></div></div></div>
 </div><aside class="why-quote"><blockquote>“La buena administración no solo resuelve lo urgente: construye condiciones para una comunidad más organizada y sostenible.”</blockquote><p>Gestión Integral PH y Jurídica S.A.S.</p></aside></div></section>
<section class="section faq-section" id="preguntas"><div class="wrap"><div class="section-head"><span class="eyebrow">Resolvemos sus dudas</span><h2>Preguntas frecuentes.</h2><p>Información inicial para conocer nuestro enfoque de trabajo.</p></div><div class="faq-grid">
 <div class="faq-item"><button class="faq-question" type="button" aria-expanded="false"><span>¿Qué tipo de copropiedades pueden contratar sus servicios?</span><span>＋</span></button><div class="faq-answer"><div><p>Acompañamos copropiedades residenciales, comerciales y mixtas. El alcance se define después de conocer sus características, necesidades y prioridades.</p></div></div></div>
 <div class="faq-item"><button class="faq-question" type="button" aria-expanded="false"><span>¿La administración y la asesoría jurídica se pueden contratar por separado?</span><span>＋</span></button><div class="faq-answer"><div><p>Podemos revisar la necesidad concreta y proponer el servicio que corresponda, ya sea gestión administrativa integral, acompañamiento jurídico o una solución articulada.</p></div></div></div>
 <div class="faq-item"><button class="faq-question" type="button" aria-expanded="false"><span>¿Cómo se define el plan de trabajo para una copropiedad?</span><span>＋</span></button><div class="faq-answer"><div><p>Partimos de una conversación y un diagnóstico inicial. Con esa información se identifican prioridades, alcance, actividades, responsabilidades y mecanismos de seguimiento.</p></div></div></div>
 <div class="faq-item"><button class="faq-question" type="button" aria-expanded="false"><span>¿Pueden apoyar la recuperación de cartera morosa?</span><span>＋</span></button><div class="faq-answer"><div><p>Sí. Podemos orientar la gestión de cartera y revisar las alternativas de actuación según la documentación, el estado de cada obligación y las condiciones jurídicas aplicables.</p></div></div></div>
 <div class="faq-item"><button class="faq-question" type="button" aria-expanded="false"><span>¿Cómo puedo solicitar una propuesta?</span><span>＋</span></button><div class="faq-answer"><div><p>Envíenos sus datos y una breve descripción de la copropiedad mediante el formulario de esta página. El mensaje se abrirá en WhatsApp para que pueda enviarlo directamente.</p></div></div></div>
 </div></div></section>
<section class="contact-section" id="contacto"><div class="wrap contact-grid">
 <div class="contact-copy"><span class="eyebrow">Hablemos de su copropiedad</span><h2>Estamos listos para escucharle.</h2><p>Cuéntenos qué necesita. Revisaremos su solicitud para orientarle sobre el tipo de acompañamiento más adecuado.</p>
  <div class="contact-details">
   <a class="contact-detail" href="tel:<?php echo esc_attr($phone_href); ?>"><span class="contact-detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 3h4l2 5-3 2a15 15 0 0 0 6 6l2-3 5 2v4c0 1-1 2-2 2C10 21 3 14 3 5c0-1 1-2 2-2Z"/></svg></span><span><small>Llámenos</small><strong><?php echo esc_html($phone); ?></strong></span></a>
   <a class="contact-detail" href="https://wa.me/<?php echo esc_attr($wa_number); ?>" target="_blank" rel="noopener noreferrer"><span class="contact-detail-icon">◉</span><span><small>WhatsApp</small><strong><?php echo esc_html($wa_display); ?></strong></span></a>
   <a class="contact-detail" href="mailto:<?php echo esc_attr(antispambot($email)); ?>"><span class="contact-detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></span><span><small>Correo electrónico</small><strong><?php echo esc_html(antispambot($email)); ?></strong></span></a>
   <div class="contact-detail"><span class="contact-detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg></span><span><small>Dirección</small><strong><?php echo esc_html($address.', '.$city); ?></strong></span></div>
  </div>
 </div>
 <div class="contact-panel"><h3>Solicite información</h3><p>Complete estos datos y prepararemos un mensaje para atender su solicitud por WhatsApp.</p>
  <form id="giph-contact-form" data-whatsapp="<?php echo esc_attr($wa_number); ?>"><div class="form-grid">
   <div class="field"><label for="giph-name">Nombre *</label><input id="giph-name" name="name" type="text" placeholder="Su nombre" autocomplete="name" required></div>
   <div class="field"><label for="giph-phone">Teléfono *</label><input id="giph-phone" name="phone" type="tel" placeholder="Su número de contacto" autocomplete="tel" required></div>
   <div class="field field-full"><label for="giph-type">Tipo de copropiedad</label><select id="giph-type" name="type"><option value="No especificado">Seleccione una opción</option><option>Residencial</option><option>Comercial</option><option>Mixta</option><option>Otra</option></select></div>
   <div class="field field-full"><label for="giph-message">¿En qué podemos ayudarle? *</label><textarea id="giph-message" name="message" placeholder="Describa brevemente su necesidad" required></textarea></div>
  </div><p class="form-note">Al continuar, se abrirá WhatsApp con el mensaje que usted preparó. No almacenamos este formulario en el sitio web.</p><button class="button button-dark" type="submit">Enviar consulta por WhatsApp <span>↗</span></button><p class="sr-only" id="giph-form-status" aria-live="polite"></p></form>
 </div>
</div></section>
</main>
<?php get_footer(); ?>
