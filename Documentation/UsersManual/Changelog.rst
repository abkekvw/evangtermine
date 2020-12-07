Version 2.1.6
-------------

Datum 07.12.2020

- Anpassungen für Feature "Anmeldeformulare mit Zählfeld" (Platzreservierung)


Version 2.1.5
-------------

Datum 10.07.2020

- Anpassungen für TYPO3 Version 10


Version 2.1.4
-------------

Datum 07.02.2020

- Bugfix in composer.json


Version 2.1.3
-------------

Datum 28.06.2019

- Anpassung der Fluid-Standardtemplates an Systeme mit [FE][pageNotFoundOnCHashError] = true. In Links werden jetzt cHash Werte generiert.
- Anzeige von _event_IMAGE und _event_CAPTION falls vorhanden. Vorher "Cache nicht benutzen" in den Einstellungen aktivieren.


Version 2.1.2
-------------

Datum 21.05.2019

- Bugfix: Beim Abruf der XML-Daten kam es in bestimmten Serverumgebungen zu Timeouts, wenn die IP-Adressen in IPv6 abgerufen wurden. Es wird jetzt nur IPv4 verwendet.


Version 2.1.1
-------------

Datum 07.02.2019

- Bugfix: Im Feld "Weitere Parameter" können Werte jetzt kommasepariert eingegeben werden, z.B. cha=35,41
- Bugfix: Bei mehr als einem Plugin im List-Modus auf einer Seite überschreiben die Suchformulare sich nicht mehr gegenseitig.
- Fluid Template Show.html erkennt jetzt auch Bild/Logo des Veranstalters.
- Extension-Status auf "stable" geändert.


Version 2.1.0
-------------

Datum: 07.02.2019

- Keine Unterstützung mehr für TYPO3 7.x und ältere.
- Anpassung an TYPO3 9.5. Dazu mussten eine ganze Reihe PHP-Klassen und geringfügig auch Fluid-Templates geändert werden. Das führt u.a. dazu, dass TYPO3 7 nicht mehr unterstützt wird.
- Intern kleinere Verbesserungen, keine neuen Features.


Version 2.0.7
-------------

Datum: 08.06.2018

- Anpassung des Fluid Templates an https://
- Aufnahme Parameter bf und lang (https://handbuch.evangelische-termine.de/Ausgabe-Parameter)


Version 2.0.6
-------------

Datum: 07.04.2017

- Bugfix: Bei Übergabe des "date"-Parameters werden "d" und "month" synchronisiert.


Version 2.0.5
-------------

Datum: 14.10.2016

- Bugfix: Problem mit Exception/CMS/1313855175 gelöst (hier: "list action not allowed")


Version 2.0.4
-------------

Datum: 19.07.2016

- Anpassung an TYPO3 Version 8


Version 2.0.3
-------------

Datum: 09.10.2015

- Bugfix: Voreinstellungen auf Themenseiten wurden nicht berücksichtigt
- Getestet mit TYPO3 7.5.0


Version 2.0.2
-------------

Datum: 22.09.2015

- Kleinere Änderungen im TypoScript Setup: templateRootPaths usw. jetzt mit Index
- Kleinere Verbesserungen in den mitgelieferten Fluid-Templates
- Getestet mit TYPO3 7.4.0


Version 2.0.1
-------------

Datum: 20.07.2015

- Fehler mit templateRootPaths usw. in Dokumentation korrigiert.

 
Version 2.0.0
-------------

Datum: 20.07.2015

- Erste veröffentlichte Version

 