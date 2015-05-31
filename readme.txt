=== WP-Piwik Privacy by WPADO ===
Contributors: thorbenr
Tags: piwik, analytics, privatsphäre, privacy
Requires at least: 3.2
Tested up to: 4.2.2
Stable tag: 1.0.4
License: GPLv2

Mit diesem Plugin kann der Besucher den Trackingprozress des Analyse-Tools Piwik deaktivieren.

== Description ==

Mit diesem Plugin kann der Besucher den Trackingprozress des Analyse-Tools [Piwik](http://piwik.org/) deaktivieren.

Der Seiteninhaber kann die Deaktivierungsmöglichkeit mit dem Shortcode

    [wpado_piwik_privacy]

einfügen.

**Des Weiteren können folgende Optionen ausgewählt werden:** 

* css: "yes" oder "no" (Wenn das Piwik-Plugin "CustomOptOut" installiert und aktiviert ist, kann die Ausgabe angepasst werden) 
* width: z.B. "100%" 
* height: z.B. "200px" 

Der Shortcode sieht dann wie folgt aus:

    [wpado_piwik_privacy css="yes" width="100%" height="200px"]

**Voraussetzungen:**

* [PHP](http://php.net/) 5.4 oder aktueller
* [WordPress](https://wordpress.org/download/) 3.2 oder aktueller
* [Piwik](http://piwik.org/) 2.9 oder aktueller
* [WP-Piwik](http://wordpress.org/extend/plugins/wp-piwik/) 1.0.1 oder aktueller

Um die Ausgabe grafisch anzupassen, wird das [Piwik-Plugin "CustomOptOut"](http://plugins.piwik.org/customoptout) vorausgesetzt.

Weitere Informationen erhalten Sie auf der Projektseite:
http://www.wp-agentur-do.de/referenzen-eintrag/wp-piwik-privacy-by-wpado/

Dieses Plugin wurde nicht vom offiziellen Piwik-Team erstellt und wird somit auch nicht von deren Seite zur Verfügung gestellt.

== Installation ==

= Installation via Wordpress =

1. Menu "Plugins" -> "Installieren" und nach "WP-Piwik Privacy by WPADO" suchen
2. Installieren klicken

= Manuelle Installation =

1. Plugin herunterladen und entpacken
2. Verzeichnis "wp-piwik-privacy-by-wpado" nach "/wp-content/plugins/" hochladen.
3. Plugin aktivieren.

== Frequently Asked Questions ==

Bei Fragen nutze Sie bitte das Kontaktformular unter [http://www.wp-agentur-do.de](http://www.wp-agentur-do.de).

== Screenshots ==

Keine.

== Changelog ==

= 1.0.4 =
* Datum: 31.05.2015
* Unterstützung WP-Piwik 1.0.1 (https://wordpress.org/plugins/wp-piwik/)
* Bugs behoben

= 1.0.3 =
* Datum: 30.05.2015
* Unterstützung Piwik-Plugin "CustomOptOut" 0.2.5 (http://plugins.piwik.org/customoptout) zur grafischen Anpassung

= 1.0.2 =
* Datum: 30.05.2015
* Automatische Spracherkennung (WPML oder Browsersprache)

= 1.0.0 =
* Datum: 29.05.2015
* Unterstützung Piwik-Version 2.13.1 (http://piwik.org/download/)
* Unterstützung WP-Piwik 1.0.0 (https://wordpress.org/plugins/wp-piwik/)

