<?php

return [
    'auth' => [
        'title' => 'Admin-Bereich',
        'invalid_login' => 'Die Angaben stimmen nicht mit unseren Einträgen überein. Überprüfen Sie diese und versuchen Sie es noch einmal.',
    ],
    'field' => [
        'invalid_type' => 'Ungültiger Feldtyp :type.',
        'options_method_invalid_model' => 'Das Attribut ":field" löst sich nicht zu einen gültigen Model auf. Probieren Sie die options-Methode der Model-Klasse :model explicit zu definieren.',
        'options_method_not_exists' => 'Die Model-Klasse :model muss eine Methode :method() mit Rückgabe der Werte von ":field" besitzen.',
        'options_static_method_invalid_value' => 'Die statische Methode ":method()" in der Klasse :class hat kein valides Options-Array zurückgegeben.',
        'colors_method_not_exists' => 'Die Model-Klasse :model muss eine Methode :method() definieren, welche HTML-Farbcodes (HEX) für das ":field"-Formularfeld zurückgibt.',
    ],
    'widget' => [
        'not_registered' => 'Ein Widget namens ":name" wurde nicht registriert',
        'not_bound' => 'Ein Widget mit dem Klassennamen ":name" wurde nicht mit dem Controller verbunden',
    ],
    'page' => [
        'untitled' => 'Unbenannt',
        '404' => [
            'label' => 'Seite nicht gefunden',
            'help' => 'Die von Ihnen angeforderte Seite konnte nicht gefunden werden.',
            'back_link' => 'Zurück zur vorherigen Seite',
        ],
        'access_denied' => [
            'label' => 'Zugriff verweigert',
            'help' => 'Sie haben nicht die erforderlichen Berechtigungen, um diese Seite zu sehen.',
            'cms_link' => 'Zum CMS-Backend',
        ],
        'no_database' => [
            'label' => 'Datenbank fehlt',
            'help' => 'Eine Datenbank wird benötigt um Zugriff auf das Backend zu haben. Überprüfen Sie die Datenbankkonfiguration und migrieren Sie die Datenbank bevor Sie es noch einmal probieren.',
            'cms_link' => 'Zurück zur Homepage',
        ],
    ],
    'partial' => [
        'not_found_name' => 'Das Partial ":name" wurde nicht gefunden.',
        'invalid_name' => 'Ungültiges Partial: :name.',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Ungültiger AJAX-Handler: :name.',
        'not_found' => 'AJAX-Handler ":name" wurde nicht gefunden.',
    ],
    'account' => [
        'impersonate_confirm' => 'Sind Sie sicher, dass Sie sich als dieser Benutzer anmelden wollen? Sie können zu Ihrem ursprünglichen Zustand zurückkehren, indem Sie sich abmelden.',
        'impersonate_success' => 'Sie sind jetzt als dieser Benutzer angemeldet',
        'impersonate_success' => 'Sie imitieren jetzt diesen Benutzer',
        'impersonate_working' => 'Imitiere...',
        'impersonating' => 'Sie sind jetzt temporär eingeloogt als :impersonatee. Log-Dateien indentifizieren Sie jedoch als :impersonator',
        'stop_impersonating' => 'Imitieren beenden',
        'unsuspend' => 'Entsperren',
        'unsuspend_confirm' => 'Sind Sie sicher, dass Sie diesen Benutzer entsperren wollen?',
        'unsuspend_success' => 'Benutzer wurde entsperrt.',
        'unsuspend_working' => 'Entsperre...',
        'signed_in_as' => 'Angemeldet als :full_name',
        'sign_out' => 'Abmelden',
        'login' => 'Anmelden',
        'reset' => 'Zurücksetzen',
        'restore' => 'Wiederherstellen',
        'login_placeholder' => 'Benutzername',
        'password_placeholder' => 'Passwort',
        'remember_me' => 'Angemeldet bleiben',
        'forgot_password' => 'Passwort vergessen?',
        'enter_email' => 'Bitte E-Mail-Adresse eingeben',
        'enter_login' => 'Bitte Benutzernamen eingeben',
        'email_placeholder' => 'E-Mail',
        'enter_new_password' => 'Bitte ein neues Passwort eingeben',
        'password_reset' => 'Passwort zurücksetzen',
        'restore_success' => 'Eine E-Mail mit weiteren Anweisungen zum Zurücksetzen Ihres Passworts wurde an Sie versandt.',
        'reset_success' => 'Ihr Passwort wurde erfolgreich zurückgesetzt. Sie können sich jetzt anmelden.',
        'reset_error' => 'Konnte Passwort nicht zurücksetzen. Bitte erneut versuchen!',
        'reset_fail' => 'Passwort-Zurücksetzung nicht möglich!',
        'apply' => 'Anwenden',
        'cancel' => 'Abbrechen',
        'delete' => 'Löschen',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Dashboard',
        'widget_label' => 'Widget',
        'widget_width' => 'Breite',
        'full_width' => 'Volle Breite',
        'manage_widgets' => 'Widgets verwalten',
        'add_widget' => 'Neues Widget',
        'widget_inspector_title' => 'Widget-Konfiguration',
        'widget_inspector_description' => 'Dieses Widget konfigurieren',
        'widget_columns_label' => 'Breite :columns',
        'widget_columns_description' => 'Die Breite des Widgets, eine Zahl zwischen 1 und 10.',
        'widget_columns_error' => 'Bitte geben Sie als Breite des Widgets eine Zahl zwischen 1 und 10 ein.',
        'columns' => '{1} Spalte|[2,Inf] Spalten',
        'widget_new_row_label' => 'Neue Zeile erzwingen',
        'widget_new_row_description' => 'Setzt das Widget in eine neue Zeile',
        'widget_title_label' => 'Titel des Widgets',
        'widget_title_error' => 'Das Widgets benötigt einen Titel.',
        'reset_layout' => 'Layout zurücksetzen',
        'reset_layout_confirm' => 'Layout auf Ursprungszustand zurücksetzen',
        'reset_layout_success' => 'Layout wurde zurückgesetzt',
        'make_default' => 'Setze Standard',
        'make_default_confirm' => 'Das aktuelle Layout auf Standard setzen',
        'make_default_success' => 'Das aktuelle Layout ist nun das Standardlayout',
        'collapse_all' => 'Alles einklappen',
        'expand_all' => 'Alles ausklappen',
        'status' => [
            'widget_title_default' => 'System-Status',
            'update_available' => '{0} Updates verfügbar!|{1} Update verfügbar!|[2,Inf] Updates verfügbar!',
            'updates_pending' => 'Ausstehende Software Updates',
            'updates_nil' => 'Software ist auf dem neuesten Stand',
            'updates_link' => 'Update',
            'warnings_pending' => 'Es sind Probleme aufgetreten',
            'warnings_nil' => 'Keine Probleme',
            'warnings_link' => 'Untersuchen',
            'core_build' => 'System Build',
            'event_log' => 'Event Log',
            'request_log' => 'Request Log',
            'app_birthday' => 'Online seit',
        ],
        'welcome' => [
            'widget_title_default' => 'Willkommen',
            'welcome_back_name' => 'Willkommen zurück zu :app, :name.',
            'welcome_to_name' => 'Willkommen zu :app, :name.',
            'first_sign_in' => 'Das ist das erste mal, dass Sie sich eingeloggt haben.',
            'last_sign_in' => 'Ihr letzter Login war',
            'view_access_logs' => 'Zugriffsprotokoll einsehen',
            'nice_message' => 'Wir wünschen einen schönen Tag!',
        ],
    ],
    'user' => [
        'name' => 'Administrator',
        'menu_label' => 'Administratoren',
        'menu_description' => 'Backend-Benutzer, Administratoren, Gruppen und Zugriffsrechte verwalten.',
        'list_title' => 'Administratoren verwalten',
        'new' => 'Neuer Administrator',
        'login' => 'Benutzername',
        'first_name' => 'Vorname',
        'last_name' => 'Nachname',
        'full_name' => 'Vollständiger Name',
        'email' => 'E-Mail',
        'role_field' => 'Rolle',
        'role_comment' => 'Rollen definieren Benutzerberechtigungen, die auf Benutzerebene auf der Registerkarte Berechtigungen überschrieben werden können.',
        'groups' => 'Gruppen',
        'groups_comment' => 'Geben Sie hier die Gruppenzugehörigkeit an',
        'avatar' => 'Avatar',
        'password' => 'Passwort',
        'password_confirmation' => 'Passwort bestätigen',
        'permissions' => 'Rechte',
        'account' => 'Account',
        'superuser' => 'Super-User',
        'superuser_comment' => 'Bestätigen Sie hier, um dem Nutzer Vollzugriff zu gestatten',
        'send_invite' => 'Einladung per E-Mail versenden',
        'send_invite_comment' => 'Hier bestätigen, dass eine Einladung per E-Mail erfolgt',
        'delete_confirm' => 'Möchten Sie diesen Administrator-Account wirklich löschen?',
        'return' => 'Zurück zur Administratoren-Übersicht',
        'allow' => 'Zulassen',
        'inherit' => 'Vererben',
        'deny' => 'Verbieten',
        'activated' => 'Aktiviert',
        'last_login' => 'Letzer Login',
        'created_at' => 'Erstellt am',
        'updated_at' => 'Aktualisiert am',
        'deleted_at' => 'Gelöscht am',
        'show_deleted' => 'Zeige gelöschte',
        'group' => [
            'name' => 'Gruppe',
            'name_comment' => 'Der Anzeigename, der in der Gruppen-Liste im Administrator-Formular angezeigt wird.',
            'name_field' => 'Name',
            'description_field' => 'Beschreibung',
            'is_new_user_default_field_label' => 'Standard Gruppe',
            'is_new_user_default_field_comment' => 'Fügt neue Administratoren zu dieser Gruppe automatisch hinzu.',
            'code_field' => 'Code',
            'code_comment' => 'Eindeutigen Code hinzufügen, wenn dies über die API bearbeitet werden soll.',
            'menu_label' => 'Gruppen',
            'list_title' => 'Gruppen verwalten',
            'new' => 'Neue Administratoren-Gruppe',
            'delete_confirm' => 'Möchten Sie diese Administratoren-Gruppe wirklich löschen?',
            'return' => 'Zurück zur Gruppen-Übersicht',
            'users_count' => 'Benutzer',
        ],
        'role' => [
            'name' => 'Rolle',
            'name_field' => 'Name',
            'name_comment' => 'Der Name wird in der Rollen-Liste auf dem Administrator-Formular angezeigt.',
            'description_field' => 'Beschreibung',
            'code_field' => 'Code',
            'code_comment' => 'Geben Sie einen eindeutigen Code an, wenn Sie mit der API auf das Rollenobjekt zugreifen möchten.',
            'menu_label' => 'Rollen verwalten',
            'list_title' => 'Rollen verwalten',
            'new' => 'Neue Rolle',
            'delete_confirm' => 'Diese Administratorrolle löschen?',
            'return' => 'Zurück zur Rollen-Liste',
            'users_count' => 'Benutzer',
        ],
        'preferences' => [
            'not_authenticated' => 'Zum Speichern oder Anzeigen dieser Einstellungen liegt kein Benutzerkonto vor.',
        ],
        'trashed_hint_title' => 'Dieser Benutzer wurde gelöscht.',
        'trashed_hint_desc' => 'Dieser Benutzer wurde gelöscht und kann sich nicht mehr anmelden. Um ihn wiederherzustellen, klicken Sie auf das Symbol "Benutzer wiederherstellen" unten rechts',
    ],
    'list' => [
        'default_title' => 'Auflisten',
        'search_prompt' => 'Suchen...',
        'no_records' => 'Es wurden keine Ergebnisse für diese Ansicht gefunden.',
        'missing_model' => 'In der Klasse :class wurde für das Listenverhalten (Behaviour) kein Model definiert.',
        'missing_column' => 'Keine Spaltendefinition für :columns.',
        'missing_columns' => 'Die Klasse :class hat im Listeverhalten (Behaviour) keine Spalten definiert.',
        'missing_definition' => 'Der Liste fehlt eine Spalte für ":field".',
        'missing_parent_definition' => 'Listenverhalten (Behaviour) beinhaltet keine Definition von ":definition".',
        'behavior_not_ready' => 'Listenverhalten kann nicht initialisiert werden, überprüfen Sie den Aufruf von makeLists() in Ihrem Controller.',
        'invalid_column_datetime' => ' Der Spaltenwert ":column" ist kein gültiges DateTime-Objekt, haben Sie eine \$dates-Referenz in dem Model vergessen?',
        'pagination' => 'Angezeigte Einträge: :from-:to von :total',
        'first_page' => 'Erste Seite',
        'last_page' => 'Letzte Seite',
        'prev_page' => 'Vorherige Seite',
        'next_page' => 'Nächste Seite',
        'refresh' => 'Erneuern',
        'updating' => 'Aktualisiere...',
        'loading' => 'Laden...',
        'setup_title' => 'Listen-Einstellungen',
        'setup_help' => 'Benutzen Sie Checkboxen, um Spalten auszuwählen, welche Sie in den Listen sehen möchten. Sie können die Position der Spalten ändern, indem Sie diese hoch oder runter ziehen.',
        'records_per_page' => 'Aufzeichnungen pro Seite',
        'records_per_page_help' => 'Wählen Sie, wie viele Einträge pro Seite dargestellt werden sollen. Bitte beachten Sie, dass eine hohe Anzahl pro Seite die Performance negativ beeinflussen kann.',
        'check' => 'Gesetzt',
        'delete_selected' => 'Markierte löschen',
        'delete_selected_empty' => 'Keine Einträge zum Löschen markiert.',
        'delete_selected_confirm' => 'Markierte Einträge löschen?',
        'delete_selected_success' => 'Markierte Einträge erfolgreich gelöscht.',
        'column_switch_true' => 'Ja',
        'column_switch_false' => 'Nein',
    ],
    'fileupload' => [
        'attachment' => 'Anhang',
        'help' => 'Fügen Sie dem Anhang einen Titel und eine Beschreibung hinzu.',
        'title_label' => 'Titel',
        'description_label' => 'Beschreibung',
        'default_prompt' => 'Auf %s klicken oder eine Datei hierhin ziehen, um sie hochzuladen',
        'attachment_url' => 'Originaldatei-URL',
        'upload_file' => 'Datei hochladen',
        'upload_error' => 'Fehler beim hochladen',
        'remove_confirm' => 'Sind Sie sicher?',
        'remove_file' => 'Datei entfernen',
    ],
    'repeater' => [
        'add_new_item' => 'Neues Element hinzufügen',
        'min_items_failed' => ':name erfordert ein Minimum an :min Elementen, aber es wurden nur :items bereitgestellt',
        'max_items_failed' => ':name lässt nur bis zu :max Elemente zu, :items wurden bereitgestellt',
    ],
    'form' => [
        'create_title' => 'Neuer :name',
        'update_title' => 'Bearbeite :name',
        'preview_title' => 'Vorschau für :name',
        'create_success' => ':name wurde erfolgreich erzeugt',
        'update_success' => ':name wurde erfolgreich aktualisiert',
        'delete_success' => ':name wurde erfolgreich gelöscht',
        'restore_success' => ':name wurde erfolgreich wiederhergestellt',
        'reset_success' => 'Zurücksetzung abgeschlossen',
        'missing_id' => 'Datensatz-ID (Form record ID) fehlt.',
        'missing_model' => 'Das in der Klasse :class genutztes Formularverhalten (Behaviour) hat kein definiertes Model',
        'missing_definition' => 'Formverhalten (Behaviour) fehlt ein Feld für ":field".',
        'not_found' => 'Der Formulareintrag mit der ID :id kann nicht gefunden werden.',
        'action_confirm' => 'Sind Sie sich sicher?',
        'create' => 'Erstellen',
        'create_and_close' => 'Erstellen und schließen',
        'creating' => 'Erstellen...',
        'creating_name' => 'Erstelle :name...',
        'save' => 'Speichern',
        'save_and_close' => 'Speichern und schließen',
        'saving' => 'Wird gespeichert...',
        'saving_name' => ':name wird gespeichert...',
        'delete' => 'Löschen',
        'deleting' => 'Löschen...',
        'confirm_delete' => 'Wollen Sie diesen Eintrag wirklich löschen?',
        'confirm_delete_multiple' => 'Wollen Sie diese Einträge wirklich löschen?',
        'deleting_name' => 'Lösche :name...',
        'restore' => 'Wiederherstellen',
        'restoring' => 'Wiederherstellen...',
        'confirm_restore' => 'Sind Sie sicher, dass Sie den Eintrag wiederherstellen möchten?',
        'reset_default' => 'Zurücksetzen',
        'resetting' => 'Setze zurück...',
        'resetting_name' => 'Setze :name zurück...',
        'undefined_tab' => 'Verschiedenes',
        'field_off' => 'Aus',
        'field_on' => 'An',
        'add' => 'Hinzufügen',
        'apply' => 'Anwenden',
        'cancel' => 'Abbrechen',
        'close' => 'Schließen',
        'confirm' => 'Bestätigen',
        'reload' => 'Erneut laden',
        'complete' => 'Abgeschlossen',
        'ok' => 'OK',
        'or' => 'oder',
        'confirm_tab_close' => 'Wollen Sie den Tab wirklich schließen? Ungespeicherte Änderungen gehen verloren.',
        'behavior_not_ready' => 'Formularverhalten kann nicht initialisiert werden, überprüfen Sie den Aufruf von makeLists() in Ihrem Controller.',
        'preview_no_files_message' => 'Es wurden keine Dateien hochgeladen',
        'preview_no_media_message' => 'Es wurde keine Media-Datei ausgewählt.',
        'preview_no_record_message' => 'Es ist kein Eintrag ausgewählt.',
        'select' => 'Auswählen',
        'select_all' => 'Alle auswählen',
        'select_none' => 'Nichts ausgewählt',
        'select_placeholder' => 'Bitte auswählen',
        'insert_row' => 'Zeile einfügen',
        'insert_row_below' => 'Neue Zeile darunter einfügen',
        'delete_row' => 'Zeile löschen',
        'concurrency_file_changed_title' => 'Datei wurde geändert',
        'concurrency_file_changed_description' => 'Die Datei, welche Sie bearbeiten, wurde von einem anderen Benutzer geändert. Sie können die Datei entweder erneut laden, wodurch Ihre Änderungen verloren gehen oder Sie überschreiben die Datei auf dem Server',
        'return_to_list' => 'Zurück zur Liste',
    ],
    'recordfinder' => [
        'find_record' => 'Finde Eintrag',
        'invalid_model_class' => 'Die angegebene Model-Klasse ":modelClass" für den Eintragsfinder ist ungültig.',
        'cancel' => 'Abbrechen',
    ],
    'pagelist' => [
        'page_link' => 'Seitenlink',
        'select_page' => 'Wähle eine Seite...',
    ],
    'relation' => [
        'missing_config' => 'Das Verhalten (Behaviour) der Beziehung hat keine Konfiguration für ":config".',
        'missing_definition' => 'Das Verhalten (Behaviour) der Beziehung umfasst keine Definition für ":field".',
        'missing_model' => 'Das Verhalten (Behaviour) der Beziehung, die in :class benutzt wird, hat kein definiertes Model.',
        'invalid_action_single' => 'Dieser Vorgang kann nicht auf eine Einwege-Verbindung (singular) angewendet werden.',
        'invalid_action_multi' => 'Dieser Vorgang kann nicht auf eine Mehrwege-Verbindung (multiple) angewendet werden.',
        'relationwidget_unsupported_type' => 'Der ":type"-Beziehungstyp wird nicht vom Relation-Widget unterstützt.',
        'help'  => 'Zum Hinzufügen auf einen Eintrag klicken',
        'related_data' => 'Verwandte :name Daten',
        'add' => 'Hinzufügen',
        'add_selected' => 'Auswahl hinzufügen',
        'add_a_new' => ':name hinzufügen',
        'link_selected' => 'Auswahl verlinken',
        'link_a_new' => ':name verlinken',
        'cancel' => 'Abbrechen',
        'close' => 'Schließen',
        'add_name' => ':name hinzufügen',
        'create' => 'Erstellen',
        'create_name' => 'Erstelle :name',
        'update' => 'Speichern',
        'update_name' => ':name bearbeiten',
        'preview' => 'Vorschau',
        'preview_name' => 'Vorschau :name',
        'remove' => 'Entfernen',
        'remove_name' => ':name entfernen',
        'delete' => 'Löschen',
        'delete_name' => ':name löschen',
        'delete_confirm' => 'Sind Sie sicher?',
        'link' => 'Link',
        'link_name' => 'Link :name',
        'unlink' => 'Link entfernen',
        'unlink_name' => 'Link von :name entfernen',
        'unlink_confirm' => 'Sind Sie sicher?',
    ],
    'reorder' => [
        'default_title' => 'Einträge sortieren',
        'no_records' => 'Es gibt keine Einträge zum sortieren.',
    ],
    'model' => [
        'name' => 'Model',
        'not_found' => 'Model ":class" mit ID :id konnte nicht gefunden werden',
        'missing_id' => 'Für diesen Model-Datensatz ist keine ID angegeben',
        'missing_relation' => 'Das Model ":class" hat keine definierte Beziehung ":relation".',
        'missing_method' => 'Das Model ":class" besitzt keine Methode ":method".',
        'invalid_class' => 'In der Klasse :class das benutztes Model :model ist ungültig, da es von der Klasse \Model abgeleitet sein muss (inherit).',
        'mass_assignment_failed' => 'Die Mehrfachzuweisung für das Model-Attribut ":attribute" ist fehlgeschlagen.',
    ],
    'warnings' => [
        'tips' => 'System-Konfigurationstipps',
        'tips_description' => 'Es gibt Probleme, welche Sie beachten müssen, um das System korrekt zu konfigurieren.',
        'permissions'  => 'Das Verzeichnis :name oder ein Unterverzeichnis kann nicht von PHP beschrieben werden. Bitte setzen Sie die korrekten Rechte für den Webserver in diesem Verzeichnis.',
        'extension' => 'Die PHP-Erweiterung :name ist nicht installiert. Bitte installieren und aktivieren Sie diese Erweiterung.',
        'plugin_missing' => 'Das Plugin :name hat eine Abhängigkeit, die nicht installiert ist. Bitte installieren Sie alle benötigten Plugins.',
        'debug' => 'Der Debug-Modus ist aktiviert. Dies wird für Produktionsinstallationen nicht empfohlen.',
        'decompileBackendAssets' => 'Assets im Backend sind derzeit dekompiliert. Dies wird für Produktionsinstallationen nicht empfohlen.',
        'default_backend_user' => 'Ein Benutzer mit Standard Login-Daten (admin / admin@domain.tld) wurde gefunden. Ändern Sie den Benutzername und / oder die E-Mail-Adresse, um dabei zu helfen das System zu schützen.',
    ],
    'editor' => [
        'menu_label' => 'Editor-Einstellungen',
        'menu_description' => 'Verwalten der Einstellungen für den Code-Editor.',
        'preview' => 'Vorschau',
        'font_size' => 'Schriftgröße',
        'tab_size' => 'Tabgröße',
        'use_hard_tabs' => 'Einrückungen mit Tabs',
        'code_folding' => 'Code-Folding',
        'code_folding_begin' => 'Markierungsbeginn',
        'code_folding_begin_end' => 'Markierungsbeginn und Ende',
        'autocompletion' => 'Autovervollständigung',
        'word_wrap' => 'Wortumbruch',
        'highlight_active_line' => 'Aktive Zeile hervorheben',
        'auto_closing' => 'Automatisch Tags schließen',
        'show_invisibles' => 'Unsichtbare Zeichen anzeigen',
        'show_gutter' => 'Gutter anzeigen',
        'basic_autocompletion' => 'Basic-Autovervollständigung (Strg + Leertaste)',
        'live_autocompletion' => 'Live-Autovervollständigung',
        'enable_snippets' => 'Aktiviere Code-snippets (Tab)',
        'display_indent_guides' => 'Zeige Einrückungshilfen',
        'show_print_margin' => 'Zeige Druckabstand',
        'mode_off' => 'Aus',
        'mode_fluid' => 'Fluid',
        '40_characters' => '40 Zeichen',
        '80_characters' => '80 Zeichen',
        'theme' => 'Farbschema',
        'markup_styles' => 'Markup Styles',
        'custom_styles' => 'Benutzerdefiniertes Stylesheet',
        'custom styles_comment' => 'Benutzerdefinierte Styles im HTML-Editor einbinden.',
        'markup_classes' => 'Markup-Klassen',
        'paragraph' => 'Absatz',
        'link' => 'Link',
        'table' => 'Tabelle',
        'table_cell' => 'Tabellenzelle',
        'image' => 'Bild',
        'label' => 'Beschriftung',
        'class_name' => 'Klassen-Name',
        'markup_tags' => 'Markup-Tags',
        'markup_tag' => 'Markup-Tag',
        'allowed_empty_tags' => 'Erlaube leere Tags',
        'allowed_empty_tags_comment' => 'Die Liste von Tags, welche nicht entfernt werden wenn sie keinen Inhalt haben / leer sind.',
        'allowed_tags' => 'Erlaubte Tags',
        'allowed_tags_comment' => 'Die Liste von erlaubten Tags.',
        'allowed_attributes' => 'Erlaubte Attribute',
        'allowed_attributes_comment' => 'Die Liste von erlaubten Attributen.',
        'no_wrap' => 'Tags nicht umbrechen',
        'no_wrap_comment' => 'Die Liste von Tags, welche nicht innerhalb Block-Tags stehen sollen.',
        'remove_tags' => 'Entferne Tags',
        'remove_tags_comment' => 'Die Liste an Tags welche nicht zusammen entfernt werden mit ihrem Inhalt.',
        'line_breaker_tags' => 'Zeilenumbruch-Tags',
        'line_breaker_tags_comment' => 'Die Liste von Tags, zwischen die ein Zeilenumbruch-Element eingefügt wird.',
        'toolbar_options' => 'Toolbar-Optionen',
        'toolbar_buttons' => 'Toolbar-Buttons',
        'toolbar_buttons_comment' => 'Die Toolbar-Buttons, die im Rich-Editor standardmäßig angezeigt werden sollen.',
        'toolbar_buttons_preset' => 'Standard-Vorlage für Toolbars übernehmen:',
        'toolbar_buttons_presets' => [
            'default' => 'Standard',
            'minimal' => 'Minimal',
            'full' => 'Vollständig',
        ],
        'paragraph_formats' => 'Absatzformatierungen',
        'paragraph_formats_comment' => 'Die Optionen, welche in der Dropdown-Liste für Absatzformatierungen angezeigt werden.',
    ],
    'tooltips' => [
        'preview_website' => 'Vorschau der Webseite'
    ],
    'mysettings' => [
        'menu_label' => 'Meine Einstellungen',
        'menu_description' => 'Einstellungen beziehen sich auf Ihren Administratoren-Benutzer',
    ],
    'myaccount' => [
        'menu_label' => 'Mein Account',
        'menu_description' => 'Aktualisieren Sie Ihre Account-Details wie z.B. den Namen, die E-Mail-Adresse und das Passwort.',
        'menu_keywords' => 'Sicheres Anmelden',
    ],
    'branding' => [
        'menu_label' => 'Backend anpassen',
        'menu_description' => 'Passe den Admin-Bereich an - z.B. Name, Farben und Logo.',
        'brand' => 'Brand',
        'logo' => 'Logo',
        'logo_description' => 'Lade ein eigenes Logo hoch, das im Backend verwendet werden soll.',
        'favicon' => 'Favicon',
        'favicon_description' => 'Laden Sie ein benutzerdefiniertes Favicon zur Verwendung im Backend hoch',
        'app_name' => 'App-Name',
        'app_name_description' => 'Dieser Name wird als Titel des Backends angezeigt.',
        'app_tagline' => 'App-Tagline',
        'app_tagline_description' => 'Die Tagline wird im Login-Bereich des Backends angezeigt.',
        'colors' => 'Farben',
        'branding_colors' => 'Brand-Farben',
        'branding_colors_comment' => 'Diese Farben werden innerhalb des Backends verwenden um zu Ihrer Brand zu passen.',
        'default_colors' => 'Standard-Farben',
        'default_colors_comment' => 'Diese Farben werden als Farbfelder in allen Color-Pickern angezeigt, sofern nicht überschrieben.',
        'add_default_color' => 'Füge eine Standard-Farbe hinzu',
        'primary_color' => 'Primärfarbe',
        'secondary_color' => 'Zweitfarbe',
        'accent_color' => 'Akzentfarbe',
        'styles' => 'Styles',
        'custom_stylesheet' => 'Benutzerdefiniertes Stylesheet',
        'navigation' => 'Navigation',
        'menu_mode' => 'Menüstyles',
        'menu_mode_inline' => 'Inline',
        'menu_mode_inline_no_icons' => 'Inline (ohne Icons)',
        'menu_mode_tile' => 'Tiles',
        'menu_mode_collapsed' => 'Collapsed',
    ],
    'backend_preferences' => [
        'menu_label' => 'Backend-Einstellungen',
        'menu_description' => 'Verwalten der Spracheinstellungen und der Backend-Darstellung.',
        'region' => 'Region',
        'code_editor' => 'Code-Editor',
        'timezone' => 'Zeitzone',
        'timezone_comment' => 'Passt die Datumsanzeigen an diese Zeitzone an.',
        'locale' => 'Sprache',
        'locale_comment' => 'Wählen Sie Ihre gewünschte Sprache für das Backend.',
    ],
    'access_log' => [
        'hint' => 'Dieses Log zeigt eine Liste mit erfolgreichen Anmeldeversuchen von Administratoren. Die Aufzeichnungen bleiben erhalten für :days Tage.',
        'menu_label' => 'Zugriffslog',
        'menu_description' => 'Sehen Sie sich eine Liste mit erfolgreichen Benutzeranmeldungen im Backend an.',
        'id' => 'ID',
        'created_at' => 'Datum & Uhrzeit',
        'type' => 'Typ',
        'login' => 'Anmeldung',
        'ip_address' => 'IP-Adresse',
        'first_name' => 'Vorname',
        'last_name' => 'Nachname',
        'email' => 'E-Mail',
    ],
    'filter' => [
      'all' => 'Alle',
      'options_method_not_exists' => 'Die Modelklasse :model muss eine Methode :method() definiert haben, welche die Optionen für den Filter ":filter" zurückgibt.',
      'date_all' => 'Ganzen Zeitraum',
      'number_all' => 'Alle Zahlen',
    ],
    'import_export' => [
        'upload_csv_file' => '1. CSV-Datei hochladen',
        'import_file' => 'Datei importieren',
        'row' => 'Zeile :row',
        'first_row_contains_titles' => 'Erste Zeile enthält Spaltentitel',
        'first_row_contains_titles_desc' => 'Aktiviert lassen, falls erste Zeile Spaltentitel enthält.',
        'match_columns' => '2. Spalten der Datei den Datenbankfeldern zuordnen',
        'file_columns' => 'Spalten der Datei',
        'database_fields' => 'Datenbankfelder',
        'set_import_options' => '3. Importoptionen festlegen',
        'export_output_format' => '1. Exportformat wählen',
        'file_format' => 'Dateiformat',
        'standard_format' => 'Standardformat',
        'custom_format' => 'Benutzerdefiniertes Format',
        'delimiter_char' => 'Trennzeichen',
        'enclosure_char' => 'Textqualifizierer',
        'escape_char' => 'Escape-Zeichen',
        'select_columns' => '2. Spalten für den Export auswählen',
        'column' => 'Spalte',
        'columns' => 'Spalten',
        'set_export_options' => '3. Exportoptionen festlegen',
        'show_ignored_columns' => 'Ignorierte Spalten anzeigen',
        'auto_match_columns' => 'Spalten automatisch zuordnen',
        'created' => 'Erstellt',
        'updated' => 'Geändert',
        'skipped' => 'Übersprungen',
        'warnings' => 'Warnungen',
        'errors' => 'Fehler',
        'skipped_rows' => 'Übersprungene Zeilen',
        'import_progress' => 'Import-Fortschritt',
        'processing' => 'Verarbeite',
        'import_error' => 'Import-Fehler',
        'upload_valid_csv' => 'Bitte eine gültige CSV-Datei hochladen.',
        'drop_column_here' => 'Spalte hier ablegen...',
        'ignore_this_column' => 'Diese Spalte ignorieren',
        'processing_successful_line1' => 'Datei-Exportvorgang erfolgreich abgeschlossen!',
        'processing_successful_line2' => 'Ihr Browser sollte Sie nun automatisch zum Download weiterleiten.',
        'export_progress' => 'Export-Fortschritt',
        'export_error' => 'Export-Fehler',
        'column_preview' => 'Spaltenvorschau',
        'file_not_found_error' => 'Datei nicht gefunden',
        'empty_error' => 'Es wurden keine Daten geliefert die exportiert werden können.',
        'empty_import_columns_error' => 'Bitte geben Sie einige Spalten zum importieren an.',
        'match_some_column_error' => 'Bitte verbinden Sie erst einige Spalten.',
        'required_match_column_error' => 'Bitte stellen Sie eine Verbindung zwischen den benötigten Feldern :label her.',
        'empty_export_columns_error' => 'Bitte geben Sie einige Spalten für den Export an.',
        'behavior_missing_uselist_error' => 'Sie müssen das Controller-Verhalten "ListController" implementieren und die "useList"-Option aktivieren.',
        'missing_model_class_error' => 'Bitte definieren Sie Eigenschaft in der Model-Klasse für :type an.',
        'missing_column_id_error' => 'Fehlenede Spaltenkennung',
        'unknown_column_error' => 'Unbekannte Spalte',
        'encoding_not_supported_error' => 'Das Encoding der Quelldatei wurde nicht erkannt. Bitte wählen Sie ein Dateiformat mit einem entsprechenden Encoding, um eine Datei zu importieren.',
        'encoding_format' => 'Datei-Encoding',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Westeuropäisch)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Mitteleuropäisch)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, Südeuropäisch)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, Nordeuropäisch)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Kyrillisch)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabisch)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Griechisch)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebräisch)',
            'iso_8859_9' => 'ISO-8859-9 (Latin-5, Türkisch)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordisch)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltisch)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Keltisch)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Westeuropäisch: Revision mit Euro-Symbol)',
            'windows_1250' => 'Windows-1250 (CP1250, Mittel- und Osteuropäisch)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)',
        ],
    ],
    'permissions' => [
        'manage_media' => 'Hochladen und verwalten von Medien - Bilder, Videos, Audios, Dokumente',
        'allow_unsafe_markdown' => 'Unsicheres Markdown verwenden (kann Javascript enthalten)',
    ],
    'mediafinder' => [
        'label' => 'Media Finder',
        'default_prompt' => 'Klicke auf %s um eine Mediendatei auszuwählen',
        'no_image' => 'Das Bild konnte nicht gefunden werden',
    ],
    'media' => [
        'menu_label' => 'Medien',
        'upload' => 'Hochladen',
        'move' => 'Verschieben',
        'delete' => 'Löschen',
        'add_folder' => 'Ordner erstellen',
        'search' => 'Suchen',
        'display' => 'Anzeigen',
        'filter_everything' => 'Alles',
        'filter_images' => 'Bilder',
        'filter_video' => 'Video',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Dokumente',
        'library' => 'Sammlung',
        'size' => 'Größe',
        'title' => 'Titel',
        'last_modified' => 'Zuletzt bearbeitet',
        'public_url' => 'Öffentliche URL',
        'click_here' => 'Hier klicken',
        'thumbnail_error' => 'Fehler beim Erstellen des Thumbnails.',
        'return_to_parent' => 'Zu oberem Ordner zurückkehren',
        'return_to_parent_label' => 'Gehe hoch ..',
        'nothing_selected' => 'Nichts ausgewählt.',
        'multiple_selected' => 'Mehrere Dateien ausgewählt.',
        'uploading_file_num' => 'Lade :number Datei(en) hoch...',
        'uploading_complete' => 'Upload vollständig',
        'uploading_error' => 'Upload fehlgeschlagen',
        'type_blocked' => 'Der verwendete Dateityp ist aus Sicherheitsgründen gesperrt.',
        'order_by' => 'Sortieren nach',
        'direction' => 'Reihenfolge',
        'direction_asc' => 'Aufsteigend',
        'direction_desc' => 'Absteigend',
        'folder' => 'Ordner',
        'no_files_found' => 'Keine entsprechenden Dateien gefunden.',
        'delete_empty' => 'Bitte wählen Sie Dateien zum Löschen aus.',
        'delete_confirm' => 'Wollen Sie wirklich die gewählte(n) Datei(en) löschen?',
        'error_renaming_file' => 'Fehler beim Umbenennen.',
        'new_folder_title' => 'Neuer Ordner',
        'folder_name' => 'Ordnername',
        'error_creating_folder' => 'Fehler beim Erstellen des Ordners',
        'folder_or_file_exist' => 'Ein Ordner oder eine Datei mit dem gewählten Namen existiert bereits.',
        'move_empty' => 'Bitte wählen Sie Dateien zum Verschieben aus',
        'move_popup_title' => 'Verschiebe Dateien oder Ordner',
        'move_destination' => 'Zielordner',
        'please_select_move_dest' => 'Bitte wählen Sie einen Zielordner.',
        'move_dest_src_match' => 'Bitte wählen Sie einen anderen Zielordner.',
        'empty_library' => 'Diese Medienbibliothek ist leer. Laden Sie Dateien hoch oder erstellen Sie Ordner!',
        'insert' => 'Einfügen',
        'crop_and_insert' => 'Zuschneiden und Einfügen',
        'select_single_image' => 'Bitte wählen Sie ein einzelnes Bild.',
        'selection_not_image' => 'Die gewählte Datei ist keine Bilddatei.',
        'restore' => 'Alle Änderungen rückgängig machen',
        'resize' => 'Größe anpassen...',
        'selection_mode_normal' => 'Normal',
        'selection_mode_fixed_ratio' => 'Proportionen beibehalten',
        'selection_mode_fixed_size' => 'Feste Größe',
        'height' => 'Höhe',
        'width' => 'Breite',
        'selection_mode' => 'Auswahlmodus',
        'resize_image' => 'Bildgröße anpassen',
        'image_size' => 'Dimensionen:',
        'selected_size' => 'Ausgewählt:',
        'rename_popup_title' => 'Umbenennen',
        'rename_new_name' => 'Neuer Name',
        'move_please_select' => 'Bitte auswählen',
        'move_button' => 'Verschieben',
    ],
];
