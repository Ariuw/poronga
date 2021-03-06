<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  German Language - Admin
 */

/*
 *	Translation by BukkitTNT
 *
 *  http://BukkitTNT.de
 *  http://twitter.com/BukkitTNT
 *
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Bitte melde dich erneut an!',

	// Sidebar
	'dashboard' => 'Dashboard',
	'configuration' => 'Configuration',
	'layout' => 'Layout',
	'user_management' => 'User Management',
	'admin_cp' => 'AdminCP',
	'administration' => 'Administration',
	'overview' => 'Übersicht',
	'core' => 'Core',
	'minecraft' => 'Minecraft',
	'modules' => 'Modul',
	'security' => 'Sicherheit',
	'sitemap' => 'Sitemap',
	'styles' => 'Styles',
	'users_and_groups' => 'Benutzer und Gruppen',

	// Overview
	'running_nameless_version' => 'Forum läuft auf der Version <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Laufende PHP version <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Statistiken',
	'registrations' => 'Registrations',
	'topics' => 'Topics',
	'posts' => 'Posts',
    'notices' => 'Ereignisse',
    'no_notices' => 'Keine Ereignisse.',
    'email_errors_logged' => 'Fehler bei der Email wurden gespeichert',

	// Core
	'settings' => 'Einstellungen',
	'general_settings' => 'Allgemeine Einstellungen',
	'sitename' => 'Name des Forum',
	'default_language' => 'Standart Sprache',
	'default_language_help' => 'Benutzer können aus einer Liste ihre eigene Sprache auswählen.',
	'install_language' => 'Install Language',
	'update_user_languages' => 'Update User Languages',
	'update_user_languages_warning' => 'This will update the language for all users on your site, even if they have already selected one!',
	'updated_user_languages' => 'User languages have been updated.',
	'installed_languages' => 'Es wurden alle neuen Sprachen erfolgreich installiert.',
	'default_timezone' => 'Standart Zeitzone',
	'registration' => 'Registrierung',
	'enable_registration' => 'Registrierung aktivieren?',
	'verify_with_mcassoc' => 'Sollen sich Nutzer mit MCAssoc verifizieren?',
	'email_verification' => 'Email Verifikation aktivieren?',
	'homepage_type' => 'Seiten Typ',
	'post_formatting_type' => 'Post Format Typ',
	'portal' => 'Portal',
	'private_profiles' => 'Private Profiles',
	'missing_sitename' => 'Der Seiten-Name muss zwischen 2 und 64 Zeichen lang sein.',
	'missing_contact_address' => 'Please insert a contact email address between 3 and 255 characters long.',
	'use_friendly_urls' => 'Benutzerfreundliche URLs nutzen?',
	'use_friendly_urls_help' => 'Wichtig: Du musst das Apache2 Rewrite_Module aktiviert haben!',
	'config_not_writable' => 'Deine <strong>core/config.php</strong> Config ist nicht beschreibbar. Bitte überprüfe die Berechtigungen.',
	'settings_updated_successfully' => 'General settings updated successfully.',
	'social_media' => 'Soziale Medien',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Benutze Dunkles Twitter Theme?',
	'discord_id' => 'Discord Server ID',
	'discord_widget_theme' => 'Discord Widget Theme',
	'dark' => 'Dark',
	'light' => 'Light',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => 'Erfolgreich geupdatet.',
    'debugging_and_maintenance' => 'Fehlerbenachrichtigung',
	'debugging_settings_updated_successfully' => 'Debugging settings updated successfully.',
    'enable_debug_mode' => 'Aktiviere den Fehlerbenachrichtungs Modus?',
    'force_https' => 'Erzwinge https? (Gesicherte Webseitenverbindung)',
    'force_https_help' => 'Falls https aktiviert wird, werden alle Anfragen auf das https Protokoll umgeleitet. Bitte überprüfe ob dein SSL Zertifikat gültig und richtig eingerichtet worden ist.',
    'force_www' => 'Force www?',
    'contact_email_address' => 'Kontakt Email Addresse',
    'emails' => 'Emails',
    'email_errors' => 'Email Fehler',
    'registration_email' => 'Registrations Email',
    'contact_email' => 'Kontakt Email',
    'forgot_password_email' => 'Password vergessen Email',
    'unknown' => 'Unbekannt',
    'delete_email_error' => 'Lösche Fehler',
    'confirm_email_error_deletion' => 'Sind Sie sich sicher das Sie diesen Fehler löschen wollen?',
    'viewing_email_error' => 'Zeige Fehler',
    'unable_to_write_email_config' => 'Fehler beim schreiben der Datei <strong>core/email.php</strong>. Bitte überprüfe deine Einstellungen.',
    'enable_mailer' => 'Aktiviere PHPMailer?',
    'enable_mailer_help' => 'Aktivieren Sie dies, wenn E-Mails standardmäßig nicht gesendet werden. Die Verwendung von PHPMailer erfordert, dass Sie einen Dienst haben, der in der Lage ist, E-Mails an einen SMTP-Provider zu senden wie zum Beispiel Gmail oder GMX.',
    'outgoing_email' => 'Ausgehende Email Addresse',
    'outgoing_email_info' => 'Dies ist die Absender Emailadresse die NamelessMC benutzt.',
    'mailer_settings_info' => 'Die folgenden Felder sind erforderlich, wenn Sie PHPMailer aktiviert haben. Weitere Informationen zum Ausfüllen dieser Felder finden Sie unter <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">NamelessMC Wiki</a>.',
    'host' => 'Host',
    'email_port' => 'Port',
    'email_password_hidden' => 'Das Password wird aus Sicherheitsgründen nicht angezeigt.',
    'send_test_email' => 'Sende Test Email',
    'send_test_email_info' => 'Die folgende Schaltfläche versucht, eine E-Mail an Ihre E-Mail-Adresse zu senden, <strong> {x} </strong>. Falls Irgendwelche Fehler, die beim Senden der E-Mail enstehen, werden angezeigt.', // Don't replace {x}
    'send' => 'Senden',
    'test_email_error' => 'Test Email Fehler:',
    'test_email_success' => 'Test Email erfolgreich versendet!',
    'terms_error' => 'Bitte stellen Sie sicher, dass Ihre Geschäftsbedingungen nicht länger als 100000 Zeichen sind.',
    'privacy_policy_error' => 'Please enter a privacy policy no longer than 100000 characters.',
    'terms_updated' => 'Bedingungen erfolgreich aktualisiert.',
    'avatars' => 'Avatare',
    'allow_custom_avatars' => 'Erlaube eigene Benutzer Avatare?',
    'default_avatar' => 'Standart Avatar',
    'custom_avatar' => 'Eigener Avatar',
    'minecraft_avatar' => 'Minecraft Avatar',
    'minecraft_avatar_source' => 'Minecraft Avatar Quelle',
    'built_in_avatars' => 'Built-in Avatar Dienst',
    'minecraft_avatar_perspective' => 'Minecraft Avatar Perspektive',
    'face' => 'Gesicht',
    'head' => 'Kopf',
	'bust' => 'Bust',
    'select_default_avatar' => 'Wähle ein neues Standart Avatar:',
    'no_avatars_available' => 'Kein Avatar verfübar. Bitte laden Sie zuerst ein Neues Bild hoch.',
    'avatar_settings_updated_successfully' => 'Avatar Einstellungen erfolgreich geändert.',
    'navigation' => 'Navigation',
    'navbar_order' => 'Navbar Ordnen',
    'navbar_order_instructions' => 'Sie können jedem Artikel eine Zahl über 0 geben, um Artikel in der Navigationsleiste zu ordnen, wobei 1 der erste Artikel ist und höhere Zahlen danach.',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'You can also add an icon to each navbar item here, for example using <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
    'navigation_settings_updated_successfully' => 'Navigation settings updated successfully.',
    'dropdown_items' => 'Dropdown Items',
    'enable_page_load_timer' => 'Aktivieren Sie den Seitenlade-Timer?',
    'google_recaptcha' => 'Google ReCAPTCHA aktivieren?',
    'recaptcha_site_key' => 'reCAPTCHA-Standortschlüssel',
    'recaptcha_secret_key' => 'reCAPTCHA Geheimschlüssel',
    'registration_disabled_message' => 'Registration disabled message',
    'enable_nicknames_on_registration' => 'Enable nicknames for registering users?',
    'validation_promote_group' => 'Post-validation group',
    'validation_promote_group_info' => 'This is the group a user will be promoted to once they have validated their account.',
    'login_method' => 'Login Method',
    'privacy_and_terms' => 'Privacy & Terms',

	// Reactions
	'icon' => 'Icon',
	'type' => 'Typ',
	'positive' => 'Positiv',
	'neutral' => 'Neutral',
	'negative' => 'Negativ',
	'editing_reaction' => 'Editiere Reaktion',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Neue Reaktion',
	'creating_reaction' => 'Erstelle Reaktion',

	// Custom profile fields
	'custom_fields' => 'Eigene Profilfelder',
	'new_field' => '<i class="fa fa-plus-circle"></i> Neues Feld',
	'required' => 'Benötigt',
	'editable' => 'Editable',
	'public' => 'Öffentlich',
	'text' => 'Text',
	'textarea' => 'Textfeld',
	'date' => 'Datum',
	'creating_profile_field' => 'Erstelle Profilfeld',
	'editing_profile_field' => 'Editiere Profilfeld',
	'field_name' => 'Feldname',
	'profile_field_required_help' => 'Benötigte Felder müssen während der Registration ausgefüllt werden.',
	'profile_field_public_help' => 'Öffentliche Felder können von jedem eingesehen werden.',
	'profile_field_error' => 'Der Text muss zwischen 2-16 Zeichen lang sein.',
	'description' => 'Beschreibung',
	'display_field_on_forum' => 'Feld im Forum anzeigen?',
	'profile_field_forum_help' => 'Wenn dies aktiviert ist wird das Feld unter dem Namen angezeigt.',
	'profile_field_editable_help' => 'If enabled, users will have permission to edit the field in their profile settings.',
	'no_custom_fields' => 'There are no custom fields yet.',
	'profile_field_updated_successfully' => 'The profile field was updated successfully.',
	'profile_field_created_successfully' => 'The profile field was created successfully.',
	'profile_field_deleted_successfully' => 'The profile field was deleted successfully.',

	// Minecraft
	'enable_minecraft_integration' => 'Minecraft Integration aktivieren.',
    'mc_service_status' => 'Minecraft Service Status',
    'service_query_error' => 'Der Dienststatus konnte nicht abgerufen werden.',
    'authme_integration' => 'AuthMe Integration',
    'authme_integration_info' => 'Wenn die AuthMe-Integration aktiviert ist, können Benutzer sich nur im Spiel registrieren.',
    'enable_authme' => 'Aktiviere AuthMe Integration?',
    'authme_db_address' => 'AuthMe Datenbank Addresse',
    'authme_db_port' => 'AuthMe Datenbank Port',
    'authme_db_name' => 'AuthMe Datenbank Name',
    'authme_db_user' => 'AuthMe Datenbank Username',
    'authme_db_password' => 'AuthMe Datenbank Passwort',
    'authme_hash_algorithm' => 'AuthMe Hash Algorithmus',
    'authme_db_table' => 'AuthMe User Tabelle',
    'enter_authme_db_details' => 'Bitte geben Sie gültige Datenbank Informationen ein.',
    'authme_password_sync' => 'Synchronisiere AuthMe Passwörter?',
    'authme_password_sync_help' => 'Wenn dies aktiviert ist, wird das Passwort, wenn ein Benutzer-Passwort aktualisiert wird, auch auf der Website aktualisiert.',
    'minecraft_servers' => 'Minecraft Server',
    'account_verification' => 'Minecraft Account Verifizierung',
    'server_banners' => 'Server Banners',
    'query_errors' => 'Abfragefehler',
    'add_server' => '<i class="fa fa-plus-circle"></i> Server hinzufügen',
    'no_servers_defined' => 'Es wurden noch keine Server definiert',
    'query_settings' => 'Abfrage Einstellungen',
    'default_server' => 'Standart Server',
    'no_default_server' => 'Kein Standart Server',
    'external_query' => 'Benutze externe Abfragen?',
    'external_query_help' => 'Wenn die Standard-Serverabfrage nicht funktioniert, aktivieren Sie diese Option.',
    'adding_server' => 'Server hinzufügen',
    'server_name' => 'Server Name',
    'server_address' => 'Server Addresse',
    'server_address_help' => 'Dies ist die IP-Adresse oder Domain, die für die Verbindung zu Ihrem Server verwendet wird, ohne den Port.',
    'server_port' => 'Server Port',
    'parent_server' => 'Übergeordneter Server',
    'parent_server_help' => 'Ein übergeordneter Server ist in der Regel die Bungee-Instanz, mit der der Server verbunden ist.',
    'no_parent_server' => 'Kein übergeordneter Server',
    'bungee_instance' => 'BungeeCord Instanz?',
    'bungee_instance_help' => 'Wählen Sie diese Option, wenn der Server eine BungeeCord-Instanz ist.',
    'server_query_information' => 'Um eine Liste von Online-Spielern auf Ihrer Website anzuzeigen, <strong> muss </strong> Ihr Server die Option \'enable-query\' in der <strong> server.properties </strong> des Servers aktiviert sein',
    'enable_status_query' => 'Aktiviere Status Abfrage?',
    'status_query_help' => 'Wenn dies aktiviert ist, zeigt die Statusseite diesen Server als online oder offline an.',
    'enable_player_list' => 'Spielerliste aktivieren?',
    'pre_1.7' => 'Minecraft Version älter als 1.7?',
    'player_list_help' => 'Wenn dies aktiviert ist, zeigt die Statusseite eine Liste der Online-Spieler an.',
    'server_query_port' => 'Server Afrage Port (Query Port)',
    'server_query_port_help' => 'Dies ist die Option query.port in der Server.Properties-Datei Ihres Servers, sofern die Option enable-query in derselben Datei auf true gesetzt ist.',
    'server_name_required' => 'Bitte geben Sie den Servernamen ein',
    'server_name_minimum' => 'Bitte stellen Sie sicher, dass Ihr Servername mindestens 1 Zeichen hat',
    'server_name_maximum' => 'Bitte stellen Sie sicher, dass Ihr Servername maximal 20 Zeichen hat',
    'server_address_required' => 'Bitte geben Sie die Serveradresse ein',
    'server_address_minimum' => 'Bitte stellen Sie sicher, dass Ihre Serveradresse mindestens 1 Zeichen hat',
    'server_address_maximum' => 'Bitte stellen Sie sicher, dass Ihre Serveradresse maximal 64 Zeichen beträgt',
    'server_port_required' => 'Bitte geben Sie den Server Port ein',
    'server_port_minimum' => 'Bitte stellen Sie sicher, dass Ihr Server Port mindestens 2 Zeichen beträgt',
    'server_port_maximum' => 'Bitte stellen Sie sicher, dass Ihr ServerPort maximal 5 Zeichen beträgt',
    'server_parent_required' => 'Bitte wählen Sie einen übergeordneten Server aus',
    'query_port_maximum' => 'Bitte stellen Sie sicher, dass Ihr Abfrage Port maximal 5 Zeichen beträgt',
    'server_created' => 'Server erfolgreich erstellt.',
    'confirm_delete_server' => 'Sind Sie sicher, dass Sie diesen Server löschen möchten?',
    'server_updated' => 'Server erfolgreich aktualisiert',
    'editing_server' => 'Editiere Server',
    'server_deleted' => 'Server erfolgreich gelöscht',
    'unable_to_delete_server' => 'Server konnte nicht gelöscht werden.',
    'leave_port_empty_for_srv' => 'Sie können den Port leer lass, wenn dieser 25565 ist oder ob Ihre Domain einen SRV-Record verwendet',
    'viewing_query_error' => 'Abfragefehler anzeigen',
    'confirm_query_error_deletion' => 'Sind Sie sicher, dass Sie diesen Abfragefehler löschen möchten?',
    'no_query_errors' => 'Keine Abfrage Fehler protokolliert.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Neuer Banner',
    'purge_errors' => 'Lösche Fehler',
    'confirm_purge_errors' => 'Bist du sicher, dass du alle Fehler löschen willst?',
	'email_errors_purged_successfully' => 'Email errors have been purged successfully.',
	'error_deleted_successfully' => 'The error has been deleted successfully.',
	'no_email_errors' => 'No email errors logged.',
	'email_settings_updated_successfully' => 'Email settings have been updated successfully.',
	'content' => 'Content',
    'mcassoc_help' => 'Mcassoc ist ein externer Dienst, der verwendet werden kann, um zu verifizieren, dass Benutzer das Minecraft-Konto besitzen, mit dem sie sich registriert haben. Um diese Funktion nutzen zu können, musst du dich für einen freigegebenen Schlüssel <a href="https://mcassoc.lukegb.com/" target="_blank">hier</a> anmelden.',
    'mcassoc_key' => 'Mcassoc Gemeinsamer Schlüssel',
    'mcassoc_instance' => 'Mcassoc Instanz Schlüssel',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Klicken Sie hier, um einen Instanzschlüssel zu generieren</a>',
    'mcassoc_error' => 'Bitte stellen Sie sicher, dass Sie Ihren gemeinsamen Schlüssel korrekt eingegeben haben und dass Sie einen Instanzschlüssel richtig erstellt haben.',
    'updated_mcassoc_successfully' => 'Mcassoc Einstellungen erfolgreich aktualisiert.',
    'force_premium_accounts' => 'Force premium Minecraft accounts?',
    'banner_background' => 'Banner Hintergrund',
    'query_interval' => 'Abfrageintervall (in Minuten muss zwischen 5 und 60 liegen)',
    'player_graphs' => 'Spielertafeln',
    'player_count_cronjob_info' => 'Sie können einen Cron-Job einrichten, um Ihre Server alle {x} Minuten mit dem folgenden Befehl abzufragen:',
    'status_page' => 'Enable status page?',

	// Modules
	'modules_installed_successfully' => 'Alle neuen Module wurden erfolgreich installiert.',
	'enabled' => 'Aktiviert',
	'disabled' => 'Deaktiviert',
	'enable' => 'Aktivieren',
	'disable' => 'Deaktivieren',
	'module_enabled' => 'Modul aktiviert.',
	'module_disabled' => 'Modul deaktiviert.',
	'author' => 'Author:',

	// Styles
	'templates' => 'Vorlagen',
	'template_outdated' => 'Diese Vorlage ist nicht für die aktuell installierte NamelessMC Version',
	'active' => 'Aktiv',
	'deactivate' => 'Deaktivieren',
	'activate' => 'Aktivieren',
	'warning_editing_default_template' => 'Warnung! Editiere nicht die Standart Vorlage.',
	'images' => 'Bilder',
	'upload_new_image' => 'Lade ein neues Bild hoch.',
	'reset_background' => 'Hintergrund zurücksetzen.',
	'install' => '<i class="fa fa-plus-circle"></i> Installieren',
	'template_updated' => 'Vorlage erfolgreich geupdatet.',
	'default' => 'Standart',
	'make_default' => 'Als Standart setzen.',
	'default_template_set' => 'Die Vorlage {x} wurde als Standart gesetzt.', // Don't replace {x}
	'template_deactivated' => 'Vorlage wurde deaktiviert.',
	'template_activated' => 'Vorlage wurde aktiviert.',
	'permissions' => 'Berechtigungen',
	'setting_perms_for_x' => 'Festlegen von Berechtigungen für Vorlage {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Neue Vorlagen wurden erfolgreich installiert.',
	'confirm_delete_template' => 'Sind Sie sicher, dass Sie diese Vorlage löschen möchten?',
	'delete' => 'Löschen',
	'template_deleted_successfully' => 'Vorlage erfolgreich gelöscht',
    'background_image_x' => 'Hintergrundbild: <strong>{x}</strong>', // Don't replace {x}

	// Users & groups
	'users' => 'Benutzer',
	'groups' => 'Gruppen',
	'group' => 'Gruppe',
	'new_user' => '<i class="fa fa-plus-circle"></i> Neuer Bentzer',
	'creating_new_user' => 'Erstelle neuen Benutzer',
	'registered' => 'Registriert',
	'user_created' => 'Benutzer wurde erstellt.',
	'cant_delete_root_user' => 'Root Nutzer darf nicht gelöscht werden!',
	'cant_modify_root_user' => 'Root Nutzer darf nicht editiert werden!',
	'user_deleted' => 'Benutzer wurde erfolgreich gelöscht.',
	'confirm_user_deletion' => 'Willst du den Benutzer <strong>{x}</strong> wirklich löschen?', // Don't replace {x}
	'validate_user' => 'Benutzer bestätigen.',
	'update_uuid' => 'UUID Updaten',
	'update_mc_name' => 'Minecraft Benutzername updaten',
	'reset_password' => 'Passwort zurücksetzen',
	'punish_user' => 'Benutzer Bannen',
	'delete_user' => 'User Löschen',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Andere Aktionen',
	'disable_avatar' => 'Avatar deaktivieren',
	'select_user_group' => 'Du musst eine Benutzergruppe auswählen.',
	'uuid_max_32' => 'UUID muss zwischen 2 und 32 Zeichen lang sein.',
	'title_max_64' => 'Der Benutzertitel muss zwischen 2 und 32 Zeichen lang sein..',
	'group_id' => 'Gruppen ID',
	'name' => 'Name',
	'title' => 'Benutzer Titel',
	'new_group' => '<i class="fa fa-plus-circle"></i> Neue Gruppe',
	'group_name_required' => 'Gib bitte einen Gruppen Namen an.',
    'group_name_minimum' => 'Der Name muss mindestens 2 Zeichen lang sein.',
    'group_name_maximum' => 'Der Name darf maximal 20 Zeichen lang sein.',
	'creating_group' => 'Neue Gruppe erstellen',
	'group_html_maximum' => 'HTML Tag darf nicht länger als 1024 Zeichen sein.',
	'group_html' => 'Gruppen HTML',
	'group_html_lg' => 'Gruppen HTML (Groß)',
	'group_username_colour' => 'Benutzernamenfarbe der Gruppe',
	'group_staff' => 'Ist diese Gruppe eine Teamgruppe?',
	'group_modcp' => 'Kann diese Gruppe auf das ModCP zugreifen?',
	'group_admincp' => 'Kann diese Gruppe auf das AdminCP zugreifen?',
	'delete_group' => 'Gruppe Löschen',
	'confirm_group_deletion' => 'Möchtest du die Gruppe {x} wirklich löschen?', // Don't replace {x}
	'group_not_exist' => 'Diese Gruppe existiert nicht.',
	'secondary_groups' => 'Sekundärgruppen',
	'secondary_groups_info' => 'Der Benutzer erhält zusätzliche Berechtigungen aus diesen Gruppen',
	'unable_to_update_uuid' => 'Unmöglich die UUID zu aktualisieren.',
	'default_group' => 'Is the group the default group (for new users)?',
	'user_id' => 'User ID',
	'uuid' => 'UUID',

    // Permissions
    'select_all' => 'Alle auswählen',
    'deselect_all' => 'Alle abwählen',
    'background_image' => 'Hintergrundbild',
    'can_edit_own_group' => 'Kann die Berechtigungen der eigenen Gruppe bearbeiten',
    'permissions_updated_successfully' => 'Anderung der Berechtigungen erfolgreich.',
    'cant_edit_this_group' => 'Sie können die Gruppenberechtigungen nicht verändern!',

	// General Admin language
	'task_successful' => 'Aufgabe erfolgreich .',
	'invalid_action' => 'Ungültige Aktion.',
	'enable_night_mode' => 'Nacht Modus aktivieren',
	'disable_night_mode' => 'Nacht Modus deaktivieren',
	'view_site' => 'Seite ansehen',
	'signed_in_as_x' => 'Eingeloggt als {x}', // Don't replace {x}
	'warning' => 'Warnung',

    // Maintenance
    'maintenance_mode' => 'Wartungsmodus',
    'maintenance_enabled' => 'Der Wartungsmodus ist derzeit aktiviert.',
    'enable_maintenance_mode' => 'Wartungsmodus aktivieren?',
    'maintenance_mode_message' => 'Wartungsmodus-Meldung',
    'maintenance_message_max_1024' => 'Bitte stellen Sie sicher, dass Ihre Wartungsnachricht maximal 1024 Zeichen beträgt.',

	// Security
	'acp_logins' => 'AdminCP Logins',
	'please_select_logs' => 'Bitte wähle die Logs aus.',
	'ip_address' => 'IP Addresse',
	'template_changes' => 'Template Editierungen',
	'file_changed' => 'Datei geändert',
	'all_logs' => 'All Logs',
	'action' => 'Action',
	'action_info' => 'Action Info',

	// Updates
	'update' => 'Update',
	'current_version_x' => 'Aktuelle Version: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Neue version: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Es ist ein Update verfügbar!',
	'new_urgent_update_available' => 'There is a new urgent update available. Please update as soon as possible!',
	'up_to_date' => 'Deine NamelessMC Version ist aktuell!',
	'urgent' => 'Dieses Update ist ein wichtiges Update!',
	'changelog' => 'Changelog',
	'update_check_error' => 'Fehler beim abrufen der neuesten Version:',
	'instructions' => 'Anleitung',
	'download' => 'Download',
	'install_confirm' => 'Sei sicher dass du die Dateien zuerst hochgeladen hast!',

	// Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget aktiviert.',
	'widget_disabled' => 'Widget deaktiviert.',
	'editing_widget_x' => 'Bearbeite Widget {x}', // Don't replace {x}
	'module_x' => 'Module: {x}', // Don't replace {x}
	'widget_order' => 'Widget Order',

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',

    // Custom Pages
    'pages' => 'Seiten',
    'custom_pages' => 'Seiten',
    'new_page' => '<i class="fa fa-plus-circle"></i> Neue Seite',
    'no_custom_pages' => 'Es wurden noch keine Seiten erstellt.',
    'creating_new_page' => 'Erstelle Seite',
    'page_title' => 'Seiten Titel',
    'page_path' => 'Seiten Pfad (mit vorhergehendem /, zB / Beispiel)',
    'page_icon' => 'Page Icon',
    'page_link_location' => 'Seitenlink-Standort',
    'page_link_navbar' => 'Navigationsleiste',
    'page_link_footer' => 'Fusszeile',
    'page_link_more' => '"Mehr" Dropdown Menü',
    'page_link_none' => 'Kein Link',
    'page_content' => 'Seiten Inhalt',
    'page_redirect' => 'Seiten weiterleitung?',
    'page_redirect_to' => 'Link umleiten (mit vorhergehendem http: //)',
    'unsafe_html' => 'Erlaube unsicheres HTML?',
    'unsafe_html_warning' => 'Wenn Sie diese Option aktivieren, kann jeder HTML-Code auf der Seite verwendet werden, einschließlich potenziell gefährlichem JavaScript. Aktivieren Sie dies nur, wenn Sie sicher sind, dass Ihr HTML-Code sicher ist.',
    'include_in_sitemap' => 'Include in sitemap?',
    'page_permissions' => 'Seiten Berechtigungen',
    'view_page' => 'Seite anzeigen?',
    'editing_page_x' => 'Seite bearbeiten {x}', // Don't replace {x}
    'unable_to_create_page' => 'Seite kann nicht erstellt werden:',
    'page_title_required' => 'Ein Seitentitel ist erforderlich.',
    'page_url_required' => 'Ein Seitenpfad ist erforderlich.',
    'link_location_required' => 'Ein Linkstandort ist erforderlich.',
    'page_title_minimum_2' => 'Der Seitentitel muss mindestens 2 Zeichen lang sein.',
    'page_url_minimum_2' => 'Der Seitenpfad muss mindestens 2 Zeichen lang sein.',
    'page_title_maximum_30' => 'Der Seitentitel darf maximal 30 Zeichen lang sein.',
    'page_icon_maximum_64' => 'Das Seitensymbol darf maximal 64 Zeichen lang sein.',
    'page_url_maximum_20' => 'Der Seitenpfad darf maximal 20 Zeichen lang sein.',
    'page_content_maximum_100000' => 'Der Seiteninhalt darf maximal 100000 Zeichen lang sein.',
    'page_redirect_link_maximum_512' => 'Der Seitenumleitungslink darf maximal 512 Zeichen lang sein.',
    'confirm_delete_page' => 'Möchten Sie diese Seite wirklich löschen?',

    // API
    'api' => 'API',
    'enable_api' => 'API aktivieren?',
    'api_info' => 'Die API ermöglicht es Plugins und anderen Diensten, mit Ihrer Website zu interagieren, wie zum Beispiel das <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank"> offizielle Nameless-Plugin</a>.',
    'enable_legacy_api' => 'Legacy-API aktivieren',
    'legacy_api_info' => 'Die Legacy-API ermöglicht Plug-ins, die die alte Nameless version 1 API verwenden, um mit Ihrer Version 2-Website zu arbeiten.',
    'confirm_api_regen' => 'Sind Sie sicher, dass Sie Ihren API-Schlüssel neu generieren möchten?',
	'api_key' => 'API Key',
	'api_url' => 'API URL',
	'copy' => 'Copy',
	'api_key_regenerated' => 'The API key has been regenerated successfully.',
    'api_registration_email' => 'API Registrierung E-Mail',
    'link_to_complete_registration' => 'Link zur vollständigen Registrierung: {x}', // Don't replace {x}
    'api_verification' => 'Enable API verification?',
    'api_verification_info' => 'If enabled, accounts can only be verified through the API, for example ingame using the official Nameless plugin. <strong>This option will override email verification, and accounts will be automatically activated!</strong><br />You should set up your default group to have limited permissions, and then update the post-validation group in the AdminCP -> Core -> Registration tab to the full member group with normal permissions.',
    'enable_username_sync' => 'Enable username sync?',
    'enable_username_sync_info' => 'If enabled, website usernames will be updated to match ingame usernames.',
	'api_settings_updated_successfully' => 'API settings updated successfully.',

	// File uploads
	'drag_files_here' => 'Ziehe ein Bild hierhin.',
	'invalid_file_type' => 'Ungültiges Dateiformat!',
	'file_too_big' => 'Datei zu groß! Die Datei hat eine größe von {{filesize}}, das Limit ist {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Allowed Proxies',
	'allowed_proxies_info' => 'Line separated list of allowed proxy IPs.',

	// Error logs
	'error_logs' => 'Error Logs',
	'notice_log' => 'Notice log',
	'warning_log' => 'Warning log',
	'custom_log' => 'Custom log',
	'other_log' => 'Other log',
	'fatal_log' => 'Fatal log',
	'log_file_not_found' => 'Log file not found.',
	'log_purged_successfully' => 'The log has been purged successfully.',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'Send a message to a Discord channel when something happens on your site. Create a Discord hook in your Discord Server Settings -> Webhooks tab.',
	'discord_hook_url' => 'Discord webhook URL',
	'discord_hook_events' => 'Enabled Discord hook events (Ctrl+click to select multiple events)',
	'register_hook_info' => 'User registration',
	'validate_hook_info' => 'User validation',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Unable to load sitemap file {x}', // Don't replace {x}
	'sitemap_generated' => 'Sitemap generated successfully',
	'sitemap_not_writable' => 'The <strong>cache/sitemaps</strong> directory is not writable.',
	'cache_not_writable' => 'The <strong>cache</strong> directory is not writable.',
	'generate_sitemap' => 'Generate Sitemap',
	'download_sitemap' => 'Download Sitemap',
	'sitemap_not_generated_yet' => 'A sitemap has not been generated yet!',
	'sitemap_last_generated_x' => 'The sitemap was last generated {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Page Metadata',
	'metadata_page_x' => 'Viewing metadata for page {x}', // Don't replace {x}
	'keywords' => 'Keywords',
	'description_max_500' => 'The description must be at most 500 characters.',

	// Dashboard
	'total_users' => 'Total Users',
	'total_users_statistic_icon' => '<i class="fa fa-users"></i>',
	'recent_users' => 'New Users',
	'recent_users_statistic_icon' => '<i class="fa fa-users"></i>',
	'average_players' => 'Average Players',
	'nameless_news' => 'NamelessMC News',
	'unable_to_retrieve_nameless_news' => 'Unable to retrieve the latest news',
	'confirm_leave_site' => 'You are about to leave this site! Are you sure you want to visit <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Server Compatibility',
	'issues' => 'Issues',

	// Other
	'source' => 'Source',
	'support' => 'Support'
);
