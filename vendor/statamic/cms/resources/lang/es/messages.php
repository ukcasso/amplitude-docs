<?php

return [
    'activate_account_notification_body' => 'Enviamos este correo porque recibimos una solicitud de restablecimiento de contraseña para tu cuenta.',
    'activate_account_notification_subject' => 'Activa tu cuenta',
    'addon_has_more_releases_beyond_license_body' => 'Puedes actualizar, pero deberás migrar tu licencia o comprar una nueva.',
    'addon_has_more_releases_beyond_license_heading' => 'Este complemento tiene más versiones más allá del límite de tu licencia.',
    'addon_install_command' => 'Para instalar este complemento, ejecute el siguiente comando',
    'addon_list_loading_error' => 'Algo salió mal al cargar los complementos. Intenta nuevamente más tarde.',
    'addon_uninstall_command' => 'Para desinstalar este complemento, ejecute el siguiente comando',
    'asset_container_allow_uploads_instructions' => 'Cuando está habilitado, los usuarios pueden cargar archivos en este contenedor.',
    'asset_container_blueprint_instructions' => 'Los planos definen campos personalizados adicionales al editar medios.',
    'asset_container_create_folder_instructions' => 'Al activarse dará a los usuarios la capacidad de crear carpetas en este contenedor.',
    'asset_container_disk_instructions' => 'Los discos del sistema de archivos especifican dónde se alojan los medios&mdash;localmente o bien en una localización remota como Amazon S3. Pueden ser configurados en `config/filesystems.php`',
    'asset_container_handle_instructions' => 'Se usa para hacer referencia a este contenedor en la interfaz. Es complicado cambiarlo más tarde.',
    'asset_container_intro' => 'Los medios y documentos viven en carpetas en el servidor u otros servicios de almacenamiento de archivos. Cada una de estas ubicaciones se llama contenedor.',
    'asset_container_move_instructions' => 'Al activarse permitirá a los usuarios mover medios dentro del contenedor.',
    'asset_container_quick_download_instructions' => 'Al activarse añadirá un enlace de descarga rápida en la Biblioteca de Medios.',
    'asset_container_rename_instructions' => 'Al activarse permitirá a los usuarios renombrar medios en este contenedor.',
    'asset_container_source_preset_instructions' => 'Las imágenes cargadas se procesarán permanentemente utilizando este ajuste preestablecido.',
    'asset_container_title_instructions' => 'Generalmente un sustantivo plural, como "Imágenes" o "Documentos"',
    'asset_container_validation_rules_instructions' => 'Estas reglas se aplicarán a los archivos cargados.',
    'asset_container_warm_intelligent_instructions' => 'Genere ajustes preestablecidos apropiados al cargar.',
    'asset_container_warm_presets_instructions' => 'Especifique qué ajustes preestablecidos desea generar al cargar.',
    'asset_folders_directory_instructions' => 'Recomendamos evitar espacios y caracteres especiales para mantener limpas tus URLs.',
    'asset_replace_confirmation' => 'Las referencias a este activo dentro del contenido se actualizarán al activo que seleccione a continuación.',
    'asset_reupload_confirmation' => '¿Estás seguro de que deseas volver a cargar este activo?',
    'asset_reupload_warning' => 'Es posible que surjan problemas de almacenamiento en caché a nivel de servidor o navegador. Es posible que prefiera reemplazar el recurso.',
    'blueprints_hidden_instructions' => 'Oculta el plano de los botones de creación en el Panel de Control',
    'blueprints_intro' => 'Los planos definen y organizan campos para crear modelos de contenido para colecciones, formularios y otros tipos de datos.',
    'blueprints_title_instructions' => 'Por lo general, un sustantivo singular, como "Artículo" o "Producto.',
    'cache_utility_application_cache_description' => 'El caché unificado de Laravel utilizado por Statamic, complementos de terceros y paquetes de Composer.',
    'cache_utility_description' => 'Administra y revisa información importante sobre las diversas capas de caché de Statamic.',
    'cache_utility_image_cache_description' => 'El caché de imágenes almacena copias de todas las imágenes transformadas y redimensionadas.',
    'cache_utility_stache_description' => 'El Stache (pronunciado "stash") es el almacén de contenido de Statamic que funciona de manera muy similar a una base de datos. Se genera automáticamente a partir de tus archivos de contenido.',
    'cache_utility_static_cache_description' => 'Las páginas estáticas omiten Statamic por completo y se procesan directamente desde tu servidor, para obtener el máximo rendimiento.',
    'choose_entry_localization_deletion_behavior' => 'Elige la acción que deseas realizar en las entradas localizadas.',
    'collection_configure_date_behavior_private' => 'Privado - Oculta en listados, URLs 404',
    'collection_configure_date_behavior_public' => 'Público - Siempre visible',
    'collection_configure_date_behavior_unlisted' => 'Escondido - Oculta en listados, URLs visibles',
    'collection_configure_dated_instructions' => 'Las fechas de publicación se pueden usar para programar y caducar el contenido.',
    'collection_configure_handle_instructions' => 'Usado para referenciar a esta colección en el frontend. Es complicado cambiarlo más tarde.',
    'collection_configure_intro' => 'Una colección es un grupo de entradas relacionadas que comparten comportamiento, atributos y configuraciones.',
    'collection_configure_layout_instructions' => 'Establecer el diseño predeterminado de esta colección. Las entradas pueden anular esta configuración con un campo de tipo  `template` llamado `layout`. Es inusual cambiar esta configuración.',
    'collection_configure_origin_behavior_instructions' => 'Al localizar una entrada, ¿qué sitio se debe utilizar como origen?',
    'collection_configure_origin_behavior_option_active' => 'Utilice el sitio activo de la entrada que se está editando',
    'collection_configure_origin_behavior_option_root' => 'Utilice el sitio en el que se creó originalmente la entrada',
    'collection_configure_origin_behavior_option_select' => 'Permitir que el usuario seleccione el origen',
    'collection_configure_propagate_instructions' => 'Propaga automáticamente nuevas entradas a todos los sitios configurados.',
    'collection_configure_require_slugs_instructions' => 'Si se requiere que las entradas tengan slugs.',
    'collection_configure_template_instructions' => 'Establece la plantilla predeterminada de esta colección. Las entradas pueden anular esta configuración con un campo de tipo `template`.',
    'collection_configure_title_format_instructions' => 'Configúrelo para que las entradas de esta colección generen sus títulos automáticamente. Obtén más información en la [documentación](https://statamic.dev/collections#titles).',
    'collection_configure_title_instructions' => 'Recomendamos un sustantivo plural, como "Artículos" o "Productos".',
    'collection_next_steps_blueprints_description' => 'Administra los planos y campos disponibles para esta colección.',
    'collection_next_steps_configure_description' => 'Configura URLs y rutas; define planos, comportamientos de fechas, orden y otras opciones.',
    'collection_next_steps_create_entry_description' => 'Crea la primera entrada o agrega un puñado de entradas de muestra, depende de ti.',
    'collection_next_steps_scaffold_description' => 'Genera rápidamente planos vacíos y vistas para el frontend según el nombre de la colección.',
    'collection_revisions_instructions' => 'Habilitar revisiones para esta colección.',
    'collection_scaffold_instructions' => 'Elige qué recursos en blanco generar. Los archivos existentes no se sobrescribirán.',
    'collections_blueprint_instructions' => 'Las entradas en esta colección pueden usar cualquiera de estos planos.',
    'collections_default_publish_state_instructions' => 'Mientras se crean nuevas entradas en esta colección el interruptor de publicación será **verdadero** en vez de **falso** (borrador).',
    'collections_future_date_behavior_instructions' => 'Cómo deben comportarse las entradas con fecha futura.',
    'collections_links_instructions' => 'Las entradas en esta colección pueden contener enlaces (redirecciones) a otras entradas o URLs.',
    'collections_mount_instructions' => 'Elige una entrada en la que se debe montar esta colección. Obtén más información en la [documentación](https://statamic.dev/collections-and-entries#mounting).',
    'collections_orderable_instructions' => 'Habilita el ordenamiento manual mediante arrastrar y soltar.',
    'collections_past_date_behavior_instructions' => 'Cómo deben comportarse las entradas con fecha pasada.',
    'collections_preview_target_refresh_instructions' => 'Actualizar automáticamente la vista previa durante la edición. Si se desactiva esta opción, se utilizará postMessage.',
    'collections_preview_targets_instructions' => 'Las direcciones URL que se pueden ver en Vista previa en vivo. Obtén más información en la [documentación](https://statamic.dev/live-preview#preview-targets).',
    'collections_route_instructions' => 'La ruta controla el patrón del URL de las entradas. Obtén más información en la [documentación](https://statamic.dev/collections#routing).',
    'collections_sort_direction_instructions' => 'La dirección de ordenado predeterminada.',
    'collections_taxonomies_instructions' => 'Conecta las entradas de esta colección a las taxonomías. Los campos se agregarán automáticamente a los formularios.',
    'dictionaries_countries_emojis_instructions' => 'Si los emojis de banderas deberían incluirse en las etiquetas.',
    'dictionaries_countries_region_instructions' => 'Opcionalmente, filtrar los países por región.',
    'duplicate_action_localizations_confirmation' => '¿Está seguro de que desea ejecutar esta acción? Las localizaciones también se duplicarán.',
    'duplicate_action_warning_localization' => 'Esta entrada es una localización. La entrada de origen se duplicará.',
    'duplicate_action_warning_localizations' => 'Una o más entradas seleccionadas son localizaciones. En esos casos, se duplicará la entrada de origen.',
    'email_utility_configuration_description' => 'La configuración del correo se configura en <code>:path</code>',
    'email_utility_description' => 'Verifica la configuración del correo electrónico y envía una prueba.',
    'entry_origin_instructions' => 'La nueva localización heredará los valores de la entrada en el sitio seleccionado.',
    'expect_root_instructions' => 'Considerada la primera página en el árbol como "raíz" o página de "inicio".',
    'field_conditions_always_save_instructions' => 'Guarde siempre el valor del campo, independientemente de cómo se evalúen las condiciones del campo.',
    'field_conditions_field_instructions' => 'Puede introducir cualquier identificador de campo. No está limitado a las opciones del menú desplegable.',
    'field_conditions_instructions' => 'Cuándo mostrar u ocultar este campo.',
    'field_desynced_from_origin' => 'Desincronizado del origen. Haz clic para sincronizar y restablecer el valor al de origen.',
    'field_synced_with_origin' => 'Sincronizado con el origen. Haz clic o edita el campo para desincronizar.',
    'field_validation_advanced_instructions' => 'Agrega una validación más avanzada a este campo.',
    'field_validation_required_instructions' => 'Controla si este campo es obligatorio o no.',
    'field_validation_sometimes_instructions' => 'Validar solo cuando este campo esté visible o enviado.',
    'fields_blueprints_description' => 'Los planos definen los campos para estructuras de contenido como colecciones, taxonomías, usuarios y formularios.',
    'fields_default_instructions' => 'Establezca el valor predeterminado.',
    'fields_display_instructions' => 'La etiqueta del campo mostrado en el Panel de Control.',
    'fields_duplicate_instructions' => 'Si este campo debe incluirse al duplicar el elemento.',
    'fields_fieldsets_description' => 'Los conjuntos de campos son agrupaciones de campos simples, flexibles y completamente opcionales que ayudan a organizar campos reutilizables y preconfigurados.',
    'fields_handle_instructions' => 'La variable de plantilla del campo.',
    'fields_instructions_instructions' => 'Se muestra debajo de la etiqueta del campo, como si fuera texto. Puedes usar Markdown.',
    'fields_instructions_position_instructions' => 'Mostrar instrucciones encima o debajo del campo.',
    'fields_listable_instructions' => 'Controla la visibilidad de la columna en este campo.',
    'fields_replicator_preview_instructions' => 'Controlar la visibilidad de la vista previa en los conjuntos Replicator/Bard.',
    'fields_sortable_instructions' => 'Controla si el campo debe poder ordenarse en las vistas de listado.',
    'fields_visibility_instructions' => 'Controle la visibilidad del campo en los formularios de publicación.',
    'fieldset_import_fieldset_instructions' => 'El conjunto de campos a importar.',
    'fieldset_import_prefix_instructions' => 'El prefijo que debe aplicarse a cada campo cuando se importa. ej: texto_',
    'fieldset_intro' => 'Los conjuntos de campos son un complemento opcional de los planos, ya que actúan como parciales reutilizables que se pueden usar dentro de los planos.',
    'fieldset_link_fields_prefix_instructions' => 'Todos los campos en el conjunto de campos vinculados tendrán el prefijo. Útil si deseas importar los mismos campos varias veces.',
    'fieldsets_handle_instructions' => 'Se utiliza para hacer referencia a este conjunto de campos en otro lugar. Es complicado cambiarlo más tarde.',
    'fieldsets_title_instructions' => 'Por lo general, describe qué campos estarán dentro, como "Bloque de imagen" o "Metadatos".',
    'filters_view_already_exists' => 'Ya existe una vista con este nombre. Al crear esta vista, se sobrescribirá la vista existente con este nombre.',
    'focal_point_instructions' => 'Establecer un punto focal permite el recorte dinámico de imágenes con un objeto que permanezca siempre en cuadro.',
    'focal_point_previews_are_examples' => 'Las previsualizaciones de recortes son únicamente de ejemplo.',
    'forgot_password_enter_email' => 'Ingresa tu dirección de email y te enviaremos un enlace para restablecer tu contraseña.',
    'form_configure_blueprint_instructions' => 'Elige entre planos existentes o crea uno nuevo.',
    'form_configure_email_attachments_instructions' => 'Attach uploaded assets to this email.',
    'form_configure_email_bcc_instructions' => 'Dirección de correo electrónico del destinatario(s) CCO (separada por comas).',
    'form_configure_email_cc_instructions' => 'Dirección de correo electrónico del destinatario(s) de la CC: separada por comas.',
    'form_configure_email_from_instructions' => 'Deja en blanco para volver al predeterminado del sitio',
    'form_configure_email_html_instructions' => 'La vista para la versión HTML de este correo.',
    'form_configure_email_instructions' => 'Configura los correos electrónicos que se enviarán cuando se reciban respuestas al formulario.',
    'form_configure_email_markdown_instructions' => 'Procesa la versión HTML de este correo electrónico usando Markdown.',
    'form_configure_email_reply_to_instructions' => 'Déjalo en blanco para usar el remitente.',
    'form_configure_email_subject_instructions' => 'Línea de asunto del correo.',
    'form_configure_email_text_instructions' => 'La vista para la versión de texto de este correo.',
    'form_configure_email_to_instructions' => 'Dirección de correo electrónico del destinatario.',
    'form_configure_handle_instructions' => 'Se usa para hacer referencia a este formulario en la interfaz. Es complicado cambiarlo más tarde.',
    'form_configure_honeypot_instructions' => 'Nombre del campo para usar como honeypot. Los "honeypots" son campos especiales utilizados para reducir el spam de bots.',
    'form_configure_intro' => 'Los formularios se utilizan para recopilar información de los visitantes y enviar eventos y notificaciones cuando hay nuevas respuestas.',
    'form_configure_mailer_instructions' => 'Seleccione el correo electrónico para enviar este correo electrónico. Déjelo en blanco para volver al correo predeterminado.',
    'form_configure_store_instructions' => 'Desactivar para dejar de almacenar envíos. Aún se enviarán eventos y notificaciones por correo electrónico.',
    'form_configure_title_instructions' => 'Por lo general, una llamada a la acción, como "Contáctanos".',
    'getting_started_widget_blueprints' => 'Los planos definen campos personalizados utilizados para crear y almacenar contenido.',
    'getting_started_widget_collections' => 'Las colecciones contienen los diferentes tipos de contenido en el sitio.',
    'getting_started_widget_docs' => 'Conoce Statamic, entendiendo sus capacidades de la manera correcta.',
    'getting_started_widget_header' => 'Empezando con Statamic',
    'getting_started_widget_intro' => 'Para comenzar a construir tu nuevo sitio en Statamic, te recomendamos iniciar con estos pasos.',
    'getting_started_widget_navigation' => 'Crea listas multinivel que pueden ser usadas para mostrar barras de navegación, menús, etcétera.',
    'getting_started_widget_pro' => 'Statamic Pro agrega cuentas de usuario ilimitadas, roles y permisos; además de integración de Git, revisiones, funcionalidad multisitio y más.',
    'git_disabled' => 'La integración de Statamic con Git se encuentra actualmente desactivada.',
    'git_nothing_to_commit' => 'Nada para hacer commit, ¡rutas de contenido limpias!',
    'git_utility_description' => 'Administra el contenido rastreado en Git.',
    'global_search_open_using_slash' => 'Puedes abrir la búsqueda global con la tecla <kbd>/</kbd>',
    'global_set_config_intro' => 'Los conjuntos globales administran el contenido disponible en todo el sitio; como los detalles de la compañía, la información de contacto o la configuración del front-end.',
    'global_set_no_fields_description' => 'Puedes agregar campos al plano o puedes manualmente agregar variables al conjunto en sí.',
    'globals_blueprint_instructions' => 'Controla los campos que se mostrarán al editar las variables.',
    'globals_configure_handle_instructions' => 'Se usa para hacer referencia a este conjunto global en la interfaz. Es complicado cambiarlo más tarde.',
    'globals_configure_intro' => 'Un conjunto global es un grupo de variables disponibles en todas las páginas del front-end.',
    'globals_configure_title_instructions' => 'Recomendamos un sustantivo que represente el contenido del conjunto, como "Marca" o "Empresa".',
    'impersonate_action_confirmation' => 'Iniciarás sesión como este usuario. Puedes volver a tu cuenta mediante el menú de avatares.',
    'licensing_config_cached_warning' => 'Cualquier cambio que realice en sus archivos .env o config no se detectará hasta que borre el caché. Si ve resultados inesperados de licencias aquí, puede deberse a esto. Puede usar el <code>php artisan config:cache</code> para regenerar el caché.',
    'licensing_error_invalid_domain' => 'Dominio inválido',
    'licensing_error_invalid_edition' => 'La licencia es para la edición edición :edition',
    'licensing_error_no_domains' => 'No hay dominios definidos',
    'licensing_error_no_site_key' => 'Sin clave de licencia del sitio',
    'licensing_error_outside_license_range' => 'Licencia válida para versiones :start a :end',
    'licensing_error_unknown_site' => 'Sitio desconocido',
    'licensing_error_unlicensed' => 'No licenciado',
    'licensing_incorrect_key_format_body' => 'Parece que la clave de su sitio no tiene el formato correcto. Verifique la clave e intente nuevamente. Puede obtener la clave de su sitio desde el área de su cuenta en statamic.com. Es alfanumérica y tiene 16 caracteres. Asegúrese de no usar la clave de licencia heredada, que es un UUID.',
    'licensing_incorrect_key_format_heading' => 'Formato de clave de sitio incorrecto',
    'licensing_production_alert' => 'Este sitio utiliza Statamic Pro y complementos comerciales. Adquiera las licencias adecuadas.',
    'licensing_production_alert_addons' => 'Este sitio utiliza complementos comerciales. Adquiera las licencias adecuadas.',
    'licensing_production_alert_renew_statamic' => 'El uso de esta versión de Statamic Pro requiere una renovación de licencia.',
    'licensing_production_alert_statamic' => 'Este sitio utiliza Statamic Pro. Adquiera una licencia.',
    'licensing_sync_instructions' => 'Los datos de statamic.com se sincronizan una vez por hora. Forza una sincronización para ver los cambios que hayas realizado.',
    'licensing_trial_mode_alert' => 'Este sitio utiliza Statamic Pro y complementos comerciales. Asegúrese de comprar licencias antes del lanzamiento. ¡Gracias!',
    'licensing_trial_mode_alert_addons' => 'Este sitio utiliza complementos comerciales. Asegúrese de comprar licencias antes del lanzamiento. ¡Gracias!',
    'licensing_trial_mode_alert_statamic' => 'Este sitio utiliza Statamic Pro. Asegúrese de comprar una licencia antes de iniciar. ¡Gracias!',
    'licensing_utility_description' => 'Ver y resolver los detalles de la licencia.',
    'max_depth_instructions' => 'Establece el número máximo de niveles en los que una página pueda ser anidada. Déjalo en blanco para que sea ilimitado.',
    'max_items_instructions' => 'Establece un número máximo de elementos seleccionables.',
    'navigation_configure_blueprint_instructions' => 'Elige entre planos existentes o crea uno nuevo.',
    'navigation_configure_collections_instructions' => 'Habilita el enlace a entradas en estas colecciones.',
    'navigation_configure_handle_instructions' => 'Se usa para hacer referencia a esta navegación en la interfaz. Es complicado cambiarlo más tarde.',
    'navigation_configure_intro' => 'Las navegaciones son listas de enlaces de varios niveles que se pueden utilizar para crear barras de navegación, menús, mapas del sitio y cualquier forma de navegación en el front-end.',
    'navigation_configure_select_across_sites' => 'Permitir seleccionar entradas de otros sitios.',
    'navigation_configure_settings_intro' => 'Habilita la vinculación a colecciones, establece una profundidad máxima y otros comportamientos.',
    'navigation_configure_title_instructions' => 'Recomendamos un nombre que coincida con el lugar donde se utilizará, como "Navegación principal", "Navegación de cuenta" o "Navegación de pie de página".',
    'navigation_documentation_instructions' => 'Obtén más información sobre la creación, configuración y visualización de Navegaciones.',
    'navigation_link_to_entry_instructions' => 'Agregar un enlace a una entrada. Habilita el enlace a colecciones adicionales en el área de Configuración.',
    'navigation_link_to_url_instructions' => 'Agrega un enlace a cualquier URL interna o externa. Habilita el enlace a las entradas en el área de Configuración.',
    'outpost_error_422' => 'Error al comunicarse con statamic.com.',
    'outpost_error_429' => 'Demasiadas solicitudes a statamic.com.',
    'outpost_issue_try_later' => 'Hubo un problema al comunicarse con statamic.com. Por favor, inténtalo de nuevo más tarde.',
    'outpost_license_key_error' => 'Statamic no pudo descifrar el archivo de clave de licencia proporcionado. Vuelva a descargarlo desde statamic.com.',
    'password_protect_enter_password' => 'Introduce la contraseña para desbloquear',
    'password_protect_incorrect_password' => 'Contraseña incorrecta.',
    'password_protect_token_invalid' => 'Token no válido o caducado.',
    'password_protect_token_missing' => 'Falta el token seguro. Debe llegar a esta pantalla desde la URL protegida original.',
    'phpinfo_utility_description' => 'Verifica la configuración de PHP y los módulos instalados.',
    'preference_favorites_instructions' => 'Accesos directos que se mostrarán al abrir la barra de búsqueda global. También puede visitar la página y usar el ícono de pin en la parte superior para agregarla a esta lista.',
    'preference_locale_instructions' => 'El idioma preferido para el panel de control.',
    'preference_start_page_instructions' => 'La página que se mostrará al iniciar sesión en el panel de control.',
    'publish_actions_create_revision' => 'Se creará una revisión basada en la copia de trabajo. La revisión actual no cambiará.',
    'publish_actions_current_becomes_draft_because_scheduled' => 'Dado que la revisión actual es la publicada y has seleccionado una fecha en el futuro, al enviar la revisión ésta actuará como un borrador hasta la fecha seleccionada.',
    'publish_actions_publish' => 'Los cambios en la copia de trabajo se aplicarán a la entrada y se publicarán de inmediato.',
    'publish_actions_schedule' => 'Los cambios en la copia de trabajo se aplicarán a la entrada y aparecerá publicada en la fecha seleccionada.',
    'publish_actions_unpublish' => 'La revisión actual se ocultará.',
    'reset_password_notification_body' => 'Te enviamos este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para tu cuenta.',
    'reset_password_notification_no_action' => 'Si no solicitaste un restablecimiento de contraseña, tienes que hacer nada más.',
    'reset_password_notification_subject' => 'Notificación de restablecimiento de contraseña',
    'role_change_handle_warning' => 'Cambiar el identificador no actualizará las referencias a éste en usuarios y grupos.',
    'role_handle_instructions' => 'Los identificadores se utilizan para hacer referencia a este rol en la interfaz. No se puede cambiar fácilmente.',
    'role_intro' => 'Los roles son grupos de permisos de acceso y acciones que pueden asignarse a usuarios y grupos de usuarios.',
    'role_title_instructions' => 'Por lo general, un sustantivo singular, como "Editor" o "Administrador".',
    'search_utility_description' => 'Administra y revisa información importante sobre los índices de búsqueda de Statamic.',
    'session_expiry_enter_password' => 'Ingresa tu contraseña para continuar donde te quedaste.',
    'session_expiry_logged_out_for_inactivity' => 'Se ha cerrado tu sesión porque no tuviste actividad durante un rato.',
    'session_expiry_logging_out_in_seconds' => '¡Tu sesión ha estado inactiva durante un rato y se cerrará en :seconds segundos! Haz clic para extender tu sesión y seguir trabajando.',
    'session_expiry_new_window' => 'Se abrirá una ventana nueva. Vuelve aquí una vez que hayas iniciado sesión.',
    'show_slugs_instructions' => 'Ya sea para mostrar slugs en la vista de árbol.',
    'site_configure_attributes_instructions' => 'Agregue atributos arbitrarios a la configuración de su sitio, a los que se pueda acceder desde sus plantillas. [Obtenga más información](https://statamic.dev/multi-site#additional-attributes).',
    'site_configure_handle_instructions' => 'Una referencia única a este sitio. No es trivial cambiarlo más adelante.',
    'site_configure_lang_instructions' => 'Obtenga más información sobre [idiomas](https://statamic.dev/multi-site#language).',
    'site_configure_locale_instructions' => 'Obtenga más información sobre [Configuraciones regionales](https://statamic.dev/multi-site#locale).',
    'site_configure_name_instructions' => 'Nombre del usuario que se muestra en todo el panel de control.',
    'site_configure_url_instructions' => 'Obtenga información sobre las [URL del sitio](https://statamic.dev/multi-site#url).',
    'status_expired_with_date' => 'Venció el :date',
    'status_published_with_date' => 'Publicado el :date',
    'status_scheduled_with_date' => 'Programado para ser publicado el :date',
    'taxonomies_blueprints_instructions' => 'Los términos en esta taxonomía pueden ser usados en cualquiera de estos planos.',
    'taxonomies_collections_instructions' => 'Las colecciones que usan esta taxonomía.',
    'taxonomies_preview_target_refresh_instructions' => 'Actualizar automáticamente la vista previa durante la edición. Si se desactiva esta opción, se utilizará postMessage.',
    'taxonomies_preview_targets_instructions' => 'Las direcciones URL que se pueden ver en Vista previa en vivo. Obtén más información en la [documentación](https://statamic.dev/live-preview#preview-targets).',
    'taxonomy_configure_handle_instructions' => 'Se usa para hacer referencia a esta taxonomía en la interfaz. Es complicado cambiarlo más tarde.',
    'taxonomy_configure_intro' => 'Una taxonomía es un sistema de clasificación de datos en torno a un conjunto de características únicas, como "categoría" o "color".',
    'taxonomy_configure_layout_instructions' => 'Establezca el diseño predeterminado de esta taxonomía. Los términos pueden anular esta configuración con un campo de &quot;diseño&quot;.',
    'taxonomy_configure_template_instructions' => 'Establecer la plantilla predeterminada de esta taxonomía.',
    'taxonomy_configure_term_template_instructions' => 'Establezca la plantilla predeterminada de esta taxonomía. Los términos pueden anular esta configuración con un campo de &quot;plantilla&quot;.',
    'taxonomy_configure_title_instructions' => 'Recomendamos utilizar un sustantivo plural, como "Categorías" o "Etiquetas".',
    'taxonomy_next_steps_blueprints_description' => 'Administrar los planos y campos disponibles para esta taxonomía.',
    'taxonomy_next_steps_configure_description' => 'Configura nombres, asocia colecciones, define planos y más.',
    'taxonomy_next_steps_create_term_description' => 'Crea el primer término o escribe un puñado de términos de muestra, depende de ti.',
    'try_again_in_seconds' => '{0,1} Inténtalo de nuevo ahora. | Inténtalo de nuevo en :count segundos.',
    'units.B' => ':count B',
    'units.GB' => ':count GB',
    'units.KB' => ':count KB',
    'units.MB' => ':count MB',
    'units.ms' => ':countms',
    'units.s' => ':counts',
    'updater_require_version_command' => 'Para solicitar una versión específica, ejecute el siguiente comando',
    'updater_update_to_latest_command' => 'Para actualizar a la última versión, ejecute el siguiente comando',
    'uploader_append_timestamp' => 'Añadir marca de tiempo',
    'uploader_choose_new_filename' => 'Elija un nuevo nombre de archivo',
    'uploader_discard_use_existing' => 'Descartar y utilizar archivo existente',
    'uploader_overwrite_existing' => 'Sobrescribir archivo existente',
    'user_activation_email_not_sent_error' => 'No se pudo enviar el correo electrónico de activación. Verifique la configuración de su correo electrónico y vuelva a intentarlo.',
    'user_groups_intro' => 'Los grupos de usuarios te permiten organizar usuarios y aplicar roles basados en permisos en conjunto.',
    'user_groups_role_instructions' => 'Asigna roles para otorgar a los usuarios de este grupo todos sus permisos correspondientes.',
    'user_groups_title_instructions' => 'Generalmente un sustantivo plural, como "Editores" o "Fotógrafos"',
    'user_wizard_account_created' => 'La cuenta de usuario ha sido creada.',
    'user_wizard_intro' => 'Los usuarios pueden ser asignados a roles que personalizan sus permisos, acceso y habilidades dentro del Panel de control.',
    'user_wizard_invitation_body' => 'Activa tu nueva cuenta de Statamic en :site para empezar a administrar este sitio web. Por tu seguridad, el enlace caduca después de :expiry horas. Después de que pasen, tendrás que contacta al administrador del sitio para generar una nueva contraseña.',
    'user_wizard_invitation_intro' => 'Envía un correo de bienvenida con detalles de la actividad de la cuenta al nuevo usuario.',
    'user_wizard_invitation_share' => 'Copia estas credenciales y compártelas con <code>:email</code> a través de tu método preferido.',
    'user_wizard_invitation_share_before' => 'Después de crear el usuario, se te darán detalles para compartir <code>:email</code> través de tu método preferido.',
    'user_wizard_invitation_subject' => 'Activa tu nueva cuenta de Statamic en :site',
    'user_wizard_roles_groups_intro' => 'Los usuarios pueden ser asignados a roles que personalizan sus permisos, acceso y habilidades en todo el Panel de Control.',
    'user_wizard_super_admin_instructions' => 'Los super-administradores tienen control y acceso completos a todo en el Panel de Control. Concede este rol sabiamente.',
    'view_more_count' => 'Ver :count más',
    'width_x_height' => ':width x :height',
];
