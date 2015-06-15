<?php

namespace ArbkomEKvW\Evangtermine\Tests;

class TestXmlData {
	static public function getTestXmlEmpty() {
		$xmlTestBlob = <<<EOTXML
<?xml version="1.0" encoding="UTF-8"?>
<root>
	<Export>
		<meta>
			<totalItems>0</totalItems>
			<activeParams>vid=all|region=all|own=all|d=all|m=06|y=2015|start=|end=|date=|until=yes|past=1|year=none|q=ashjdkjfghdkfjgjghjfg|highlight=high|eventtype=all|people=0|menue1=all|menue2=all|ipm=all|place=all|person=all|cha=all|dest=extern|pageID=1|itemsPerPage=5</activeParams>
			<eventtypes>
				<eventtype key="1">Gottesdienste</eventtype>
				<eventtype key="2">Gruppen / Kreise</eventtype>
				<eventtype key="3">Fortbildungen / Seminare / Vorträge</eventtype>
				<eventtype key="4">Konzerte / Theater / Musik</eventtype>
				<eventtype key="5">Freizeiten / Reisen</eventtype>
				<eventtype key="6">Ausstellungen / Kunst</eventtype>
				<eventtype key="7">Feste / Feiern</eventtype>
				<eventtype key="8">Sport/Spiel</eventtype>
				<eventtype key="9">Sonstiges</eventtype>
			</eventtypes>
			<peoples>
				<people key="0">Alle Zielgruppen</people>
				<people key="5">Kinder</people>
				<people key="40">Konfirmanden</people>
				<people key="10">Jugendliche</people>
				<people key="15">Junge Erwachsene</people>
				<people key="16">Frauen</people>
				<people key="17">Männer</people>
				<people key="20">Familien</people>
				<people key="25">Erwachsene</people>
				<people key="30">Senioren</people>
				<people key="35">besondere Zielgruppe</people>
			</peoples>
			<months>
				<month key="all">alle Termine</month>
				<month key="6.15">Juni 15</month>
				<month key="7.15">Juli 15</month>
				<month key="8.15">August 15</month>
				<month key="9.15">September 15</month>
				<month key="10.15">Oktober 15</month>
				<month key="11.15">November 15</month>
				<month key="12.15">Dezember 15</month>
				<month key="1.16">Januar 16</month>
				<month key="2.16">Februar 16</month>
				<month key="3.16">März 16</month>
				<month key="4.16">April 16</month>
				<month key="5.16">Mai 16</month>
				<month key="6.16">Juni 16</month>
				<month key="7.16">Juli 16</month>
				<month key="8.16">August 16</month>
				<month key="9.16">September 16</month>
				<month key="10.16">Oktober 16</month>
				<month key="11.16">November 16</month>
				<month key="12.16">Dezember 16</month>
			</months>
			<headline>Veranstaltungen (Suche nach 'ashjdkjfghdkfjgjghjfg')</headline>
		</meta>
	</Export>
</root>
EOTXML;
		
return $xmlTestBlob;
} // end of function getTestXmlEmpty()

static public function getTestXmlFive() {
		$xmlTestBlob = <<<EOTXML
<?xml version="1.0" encoding="UTF-8"?>
<root>
	<Export>
		<meta>
			<totalItems>338</totalItems>
			<activeParams>vid=all|region=all|own=all|d=all|m=06|y=2015|start=|end=|date=|until=yes|past=1|year=none|q=|highlight=high|eventtype=all|people=0|menue1=all|menue2=all|ipm=all|place=all|person=all|cha=all|dest=extern|pageID=1|itemsPerPage=5
			</activeParams>
			<eventtypes>
				<eventtype key="1">Gottesdienste</eventtype>
				<eventtype key="2">Gruppen / Kreise</eventtype>
				<eventtype key="3">Fortbildungen / Seminare / Vorträge
				</eventtype>
				<eventtype key="4">Konzerte / Theater / Musik</eventtype>
				<eventtype key="5">Freizeiten / Reisen</eventtype>
				<eventtype key="6">Ausstellungen / Kunst</eventtype>
				<eventtype key="7">Feste / Feiern</eventtype>
				<eventtype key="8">Sport/Spiel</eventtype>
				<eventtype key="9">Sonstiges</eventtype>
			</eventtypes>
			<peoples>
				<people key="0">Alle Zielgruppen</people>
				<people key="5">Kinder</people>
				<people key="40">Konfirmanden</people>
				<people key="10">Jugendliche</people>
				<people key="15">Junge Erwachsene</people>
				<people key="16">Frauen</people>
				<people key="17">Männer</people>
				<people key="20">Familien</people>
				<people key="25">Erwachsene</people>
				<people key="30">Senioren</people>
				<people key="35">besondere Zielgruppe</people>
			</peoples>
			<months>
				<month key="all">alle Termine</month>
				<month key="6.15">Juni 15</month>
				<month key="7.15">Juli 15</month>
				<month key="8.15">August 15</month>
				<month key="9.15">September 15</month>
				<month key="10.15">Oktober 15</month>
				<month key="11.15">November 15</month>
				<month key="12.15">Dezember 15</month>
				<month key="1.16">Januar 16</month>
				<month key="2.16">Februar 16</month>
				<month key="3.16">März 16</month>
				<month key="4.16">April 16</month>
				<month key="5.16">Mai 16</month>
				<month key="6.16">Juni 16</month>
				<month key="7.16">Juli 16</month>
				<month key="8.16">August 16</month>
				<month key="9.16">September 16</month>
				<month key="10.16">Oktober 16</month>
				<month key="11.16">November 16</month>
				<month key="12.16">Dezember 16</month>
			</months>
			<headline>Veranstaltungen</headline>
		</meta>
		<Veranstaltung>
			<ID Label="Datum-ID">171350</ID>
			<START Label="am/von">2015-06-07 04:00:00</START>
			<END Label="bis">2015-06-14 12:00:00</END>
			<MODE Label="Start-End-Modus">vonbis</MODE>
			<DATUM>Sonntag, 7.6. 4 Uhr - Sonntag, 14.6. 12 Uhr</DATUM>
			<DATUM2>So, 7.6. 4 Uhr - So, 14.6. 12 Uhr</DATUM2>
			<WOCHENTAG_START_LANG>Sonntag</WOCHENTAG_START_LANG>
			<WOCHENTAG_START_KURZ>So</WOCHENTAG_START_KURZ>
			<START_DATUM> 7.06.</START_DATUM>
			<START_UHRZEIT>04.00</START_UHRZEIT>
			<START_MONAT>Juni</START_MONAT>
			<START_JAHR>2015</START_JAHR>
			<WOCHENTAG_END_LANG>Sonntag</WOCHENTAG_END_LANG>
			<WOCHENTAG_END_KURZ>So</WOCHENTAG_END_KURZ>
			<END_DATUM>14.06.</END_DATUM>
			<END_UHRZEIT>12.00</END_UHRZEIT>
			<END_MONAT>Juni</END_MONAT>
			<END_JAHR>2015</END_JAHR>
			<monthbar>Juni 2015</monthbar>
			<_event_ID Label="Veranstaltungs-ID">68910</_event_ID>
			<_event_INPUTMASK_ID Label="Eingabformular-ID">11
			</_event_INPUTMASK_ID>
			<_event_TITLE Label="Titel">Sizilien - Insel der Widersprüche
			</_event_TITLE>
			<_event_EVENTTYPE Label="Art der Veranstaltung / Kategorie">Fortbildungen / Seminare /
				Vorträge</_event_EVENTTYPE>
			<_event_PEOPLE Label="Zielgruppe">Erwachsene</_event_PEOPLE>
			<_event_SHORT_DESCRIPTION Label="Beschreibung" />
			<_event_LONG_DESCRIPTION />
			<_event_LINK Label="Internetadresse (eigene Infos im Internet)">http://www.kircheundgesellschaft.de/veranstaltungen/einzelansicht/?tx_events_pi1%5Bevent%5D=1014
			</_event_LINK>
			<_event_KAT />
			<_event_KAT_2 />
			<_event_EMAIL Label="Email" />
			<_event_PERSON_ID Label="Ansprechpartner">2105</_event_PERSON_ID>
			<_event_PLACE_ID Label="Ort">2434</_event_PLACE_ID>
			<_event_REGION_ID />
			<_event_SUBREGION_ID Label="Kirchenkreis">überregional
			</_event_SUBREGION_ID>
			<_event_REGION_2_ID />
			<_event_REGION_3_ID />
			<_event_PROFESSION_ID />
			<_event_MUSIC_KAT_ID>keine Angabe</_event_MUSIC_KAT_ID>
			<_event_FLAG1 Label="Ausgabe auf www.solideo.de [1|0]">0</_event_FLAG1>
			<_event_TEXTLINE_1 />
			<_event_TEXTLINE_2 />
			<_event_TEXTLINE_3 />
			<_event_TEXTLINE_4 />
			<_event_TEXTLINE_5 />
			<_event_TEXTBOX_1 Label="Weitere Informationen">Aus der Perspektive der
				Waldenserkirche, die zu den ältesten protestantischen Kirchen
				gehört,&amp;nbsp; können wir Einblicke in das Leben der Menschen auf
				Sizilien nehmen, ihre sozialen Lebensbedingungen erfahren, ihre
				Schwierigkeiten und ihre Kultur.
				Vorgesehen ist der Besuch zweier Zentren der Waldenserkirche auf Sizilien – in
				Riesi&amp;nbsp; und Palermo.
				In Riesi lernen wir das Servizio Cristiano kennen, seine sozialen
				Aktivitäten, sein Engagement in der Anti-Mafia-Arbeit und seine
				ökologische Landwirtschaft.
				In Palermo lernen wir das großstädtische Centro Diaconale La Noce mit
				seinen Aktivitäten im Bereich Schule, Kindergarten, Familienhilfen
				und Migration kennen. Darüber hinaus noch eine Initiative, die
				engagiert Anti-Mafia-Arbeit mit ihrem Projekt betreibt.&amp;nbsp;

				Veranstaltungsort: Istituto Valdese

				Seminarnummer: 154008
			</_event_TEXTBOX_1>
			<_event_TEXTBOX_2 />
			<_event_TEXTBOX_3 />
			<_event_MENUE_1 Label="Empfohlen für:" />
			<_event_MENUE_2 />
			<_event_YESNO_1>Ja</_event_YESNO_1>
			<_event_YESNO_2>Ja</_event_YESNO_2>
			<_event_YESNO_3>keine Angabe</_event_YESNO_3>
			<_event_DESTINATION Label="Öffentlich / Intern">öffentlich
			</_event_DESTINATION>
			<_event_STATUS Label="Freigabe">ok</_event_STATUS>
			<_event_FEEDBACK_ID />
			<_event_HIGHLIGHT Label="Highlight">high</_event_HIGHLIGHT>
			<_event_USER_ID Label="Veranstalter-ID">45</_event_USER_ID>
			<_event_IMAGE Label="Bild" />
			<_event_THUMBNAIL />
			<_event_MODIFIED Label="Zuletzt geändert">2015-04-30 11:39:28
			</_event_MODIFIED>
			<_inputmask_NAME Label="Eingabformular-Name">Standard</_inputmask_NAME>
			<_place_ID>2434</_place_ID>
			<_place_NAME Label="Name des Veranstaltungsortes">
			</_place_NAME>
			<_place_STREET_NR Label="Strasse, Nr." />
			<_place_ZIP Label="Postleitzahl" />
			<_place_CITY Label="postalischer Ort">siehe Beschreibungstext</_place_CITY>
			<_place_INFO Label="Weitere Informationen zum Ort" />
			<_place_HIDDEN Label="Verwaltungsinformationen" />
			<_place_IMAGE Label="Bild des Veranstaltungsortes" />
			<_place_THUMBNAIL Label="Vorschaubild" />
			<_place_POSITION Label="Position">1</_place_POSITION>
			<_place_KAT Label="Kategorie" />
			<_place_OPEN Label="Öffnungszeiten" />
			<_place_GLAT>0</_place_GLAT>
			<_place_GLONG>0</_place_GLONG>
			<_person_NAME Label="Name des Ansprechpartners">Beate Vox</_person_NAME>
			<_person_EMAIL Label="Email des Ansprechpartners">beate.vox@kircheundgesellschaft.de
			</_person_EMAIL>
			<_person_CONTACT Label="Kontaktinformationen des Ansprechpartners">Tel. 0 25 73 / 93 86 28
			</_person_CONTACT>
			<_person_POSITION>0</_person_POSITION>
			<_person_SURNAME Label="Nachname">Vox</_person_SURNAME>
			<_user_REALNAME Label="Veranstalter">Institut für Kirche und
				Gesellschaft</_user_REALNAME>
			<_user_DESCRIPTION Label="Veranstalter Beschreibung">Das Institut für Kirche
				und Gesellschaft (IKG) ist eine Einrichtung der Evangelischen Kirche
				von Westfalen (EKvW) und Mitglied im Ev. Erwachsenenbildungswerk
				Westfalen und Lippe e.V. Auf der Grundlage des
				Weiterbildungsgesetzes NRW bietet das IKG öff</_user_DESCRIPTION>
			<_user_STREET_NR Label="Veranstalter Strasse, Nr">Iserlohner Str. 25
			</_user_STREET_NR>
			<_user_ZIP Label="Veranstalter Postleitzahl">58239</_user_ZIP>
			<_user_CITY Label="Veranstalter postalischer Ort">Schwerte</_user_CITY>
			<_user_EMAIL Label="Veranstalter Email">info@kircheundgesellschaft.de
			</_user_EMAIL>
			<_user_CONTACT Label="Veranstalter Kontaktdaten" />
			<LITURG_BEZ Label="Liturgische Bezeichnung">1. Sonntag nach Trinitatis</LITURG_BEZ>
			<CHANNELS Label="Kanäle" />
			<_inputmask_FIELDS Label="Elemente des Eingabeformulars">
				<_event_TITLE />
				<_event_PLACE_ID />
				<_event_SHORT_DESCRIPTION />
				<_event_EVENTTYPE />
				<_event_LINK />
				<_event_EMAIL />
				<_event_PERSON_ID />
				<_event_SUBREGION_ID />
				<_event_TEXTBOX_1 />
				<_event_DESTINATION />
				<_event_PEOPLE />
				<_event_IMAGE />
				<_event_MENUE_1 />
			</_inputmask_FIELDS>
		</Veranstaltung>
		<Veranstaltung>
			<ID Label="Datum-ID">171291</ID>
			<START Label="am/von">2015-06-09 13:00:00</START>
			<END Label="bis">2015-06-15 13:00:00</END>
			<MODE Label="Start-End-Modus">vonbis</MODE>
			<DATUM>Dienstag, 9.6. 13 Uhr - Montag, 15.6. 13 Uhr</DATUM>
			<DATUM2>Di, 9.6. 13 Uhr - Mo, 15.6. 13 Uhr</DATUM2>
			<WOCHENTAG_START_LANG>Dienstag</WOCHENTAG_START_LANG>
			<WOCHENTAG_START_KURZ>Di</WOCHENTAG_START_KURZ>
			<START_DATUM> 9.06.</START_DATUM>
			<START_UHRZEIT>13.00</START_UHRZEIT>
			<START_MONAT>Juni</START_MONAT>
			<START_JAHR>2015</START_JAHR>
			<WOCHENTAG_END_LANG>Montag</WOCHENTAG_END_LANG>
			<WOCHENTAG_END_KURZ>Mo</WOCHENTAG_END_KURZ>
			<END_DATUM>15.06.</END_DATUM>
			<END_UHRZEIT>13.00</END_UHRZEIT>
			<END_MONAT>Juni</END_MONAT>
			<END_JAHR>2015</END_JAHR>
			<monthbar>0</monthbar>
			<_event_ID Label="Veranstaltungs-ID">68851</_event_ID>
			<_event_INPUTMASK_ID Label="Eingabformular-ID">11
			</_event_INPUTMASK_ID>
			<_event_TITLE Label="Titel">Trutz Blanken Hans! Der Mensch,
				Gestalter oder Experiment der Natur?</_event_TITLE>
			<_event_EVENTTYPE Label="Art der Veranstaltung / Kategorie">Fortbildungen / Seminare /
				Vorträge</_event_EVENTTYPE>
			<_event_PEOPLE Label="Zielgruppe">Erwachsene</_event_PEOPLE>
			<_event_SHORT_DESCRIPTION Label="Beschreibung" />
			<_event_LONG_DESCRIPTION />
			<_event_LINK Label="Internetadresse (eigene Infos im Internet)">http://www.kircheundgesellschaft.de/veranstaltungen/einzelansicht/?tx_events_pi1%5Bevent%5D=1032
			</_event_LINK>
			<_event_KAT />
			<_event_KAT_2 />
			<_event_EMAIL Label="Email" />
			<_event_PERSON_ID Label="Ansprechpartner">1564</_event_PERSON_ID>
			<_event_PLACE_ID Label="Ort">2434</_event_PLACE_ID>
			<_event_REGION_ID />
			<_event_SUBREGION_ID Label="Kirchenkreis">überregional
			</_event_SUBREGION_ID>
			<_event_REGION_2_ID />
			<_event_REGION_3_ID />
			<_event_PROFESSION_ID />
			<_event_MUSIC_KAT_ID>keine Angabe</_event_MUSIC_KAT_ID>
			<_event_FLAG1 Label="Ausgabe auf www.solideo.de [1|0]">0</_event_FLAG1>
			<_event_TEXTLINE_1 />
			<_event_TEXTLINE_2 />
			<_event_TEXTLINE_3 />
			<_event_TEXTLINE_4 />
			<_event_TEXTLINE_5 />
			<_event_TEXTBOX_1 Label="Weitere Informationen">Seminarbeschreibung folgt

				Veranstaltungsort:

				Seminarnummer: 150817
			</_event_TEXTBOX_1>
			<_event_TEXTBOX_2 />
			<_event_TEXTBOX_3 />
			<_event_MENUE_1 Label="Empfohlen für:" />
			<_event_MENUE_2 />
			<_event_YESNO_1>Ja</_event_YESNO_1>
			<_event_YESNO_2>Ja</_event_YESNO_2>
			<_event_YESNO_3>keine Angabe</_event_YESNO_3>
			<_event_DESTINATION Label="Öffentlich / Intern">öffentlich
			</_event_DESTINATION>
			<_event_STATUS Label="Freigabe">ok</_event_STATUS>
			<_event_FEEDBACK_ID />
			<_event_HIGHLIGHT Label="Highlight">high</_event_HIGHLIGHT>
			<_event_USER_ID Label="Veranstalter-ID">45</_event_USER_ID>
			<_event_IMAGE Label="Bild" />
			<_event_THUMBNAIL />
			<_event_MODIFIED Label="Zuletzt geändert">2015-04-30 11:39:25
			</_event_MODIFIED>
			<_inputmask_NAME Label="Eingabformular-Name">Standard</_inputmask_NAME>
			<_place_ID>2434</_place_ID>
			<_place_NAME Label="Name des Veranstaltungsortes">
			</_place_NAME>
			<_place_STREET_NR Label="Strasse, Nr." />
			<_place_ZIP Label="Postleitzahl" />
			<_place_CITY Label="postalischer Ort">siehe Beschreibungstext</_place_CITY>
			<_place_INFO Label="Weitere Informationen zum Ort" />
			<_place_HIDDEN Label="Verwaltungsinformationen" />
			<_place_IMAGE Label="Bild des Veranstaltungsortes" />
			<_place_THUMBNAIL Label="Vorschaubild" />
			<_place_POSITION Label="Position">1</_place_POSITION>
			<_place_KAT Label="Kategorie" />
			<_place_OPEN Label="Öffnungszeiten" />
			<_place_GLAT>0</_place_GLAT>
			<_place_GLONG>0</_place_GLONG>
			<_person_NAME Label="Name des Ansprechpartners">Rosemarie Fäckeler</_person_NAME>
			<_person_EMAIL Label="Email des Ansprechpartners">Rosemarie.Faeckeler@kircheundgesellschaft.de
			</_person_EMAIL>
			<_person_CONTACT Label="Kontaktinformationen des Ansprechpartners">02304/755-346
			</_person_CONTACT>
			<_person_POSITION>2</_person_POSITION>
			<_person_SURNAME Label="Nachname">Fäckeler</_person_SURNAME>
			<_user_REALNAME Label="Veranstalter">Institut für Kirche und
				Gesellschaft</_user_REALNAME>
			<_user_DESCRIPTION Label="Veranstalter Beschreibung">Das Institut für Kirche
				und Gesellschaft (IKG) ist eine Einrichtung der Evangelischen Kirche
				von Westfalen (EKvW) und Mitglied im Ev. Erwachsenenbildungswerk
				Westfalen und Lippe e.V. Auf der Grundlage des
				Weiterbildungsgesetzes NRW bietet das IKG öff</_user_DESCRIPTION>
			<_user_STREET_NR Label="Veranstalter Strasse, Nr">Iserlohner Str. 25
			</_user_STREET_NR>
			<_user_ZIP Label="Veranstalter Postleitzahl">58239</_user_ZIP>
			<_user_CITY Label="Veranstalter postalischer Ort">Schwerte</_user_CITY>
			<_user_EMAIL Label="Veranstalter Email">info@kircheundgesellschaft.de
			</_user_EMAIL>
			<_user_CONTACT Label="Veranstalter Kontaktdaten" />
			<LITURG_BEZ Label="Liturgische Bezeichnung" />
			<CHANNELS Label="Kanäle" />
			<_inputmask_FIELDS Label="Elemente des Eingabeformulars">
				<_event_TITLE />
				<_event_PLACE_ID />
				<_event_SHORT_DESCRIPTION />
				<_event_EVENTTYPE />
				<_event_LINK />
				<_event_EMAIL />
				<_event_PERSON_ID />
				<_event_SUBREGION_ID />
				<_event_TEXTBOX_1 />
				<_event_DESTINATION />
				<_event_PEOPLE />
				<_event_IMAGE />
				<_event_MENUE_1 />
			</_inputmask_FIELDS>
		</Veranstaltung>
		<Veranstaltung>
			<ID Label="Datum-ID">171304</ID>
			<START Label="am/von">2015-06-12 16:30:00</START>
			<END Label="bis">2015-06-14 14:00:00</END>
			<MODE Label="Start-End-Modus">vonbis</MODE>
			<DATUM>Freitag, 12.6. 16:30 Uhr - Sonntag, 14.6. 14 Uhr</DATUM>
			<DATUM2>Fr, 12.6. 16:30 Uhr - So, 14.6. 14 Uhr</DATUM2>
			<WOCHENTAG_START_LANG>Freitag</WOCHENTAG_START_LANG>
			<WOCHENTAG_START_KURZ>Fr</WOCHENTAG_START_KURZ>
			<START_DATUM>12.06.</START_DATUM>
			<START_UHRZEIT>16.30</START_UHRZEIT>
			<START_MONAT>Juni</START_MONAT>
			<START_JAHR>2015</START_JAHR>
			<WOCHENTAG_END_LANG>Sonntag</WOCHENTAG_END_LANG>
			<WOCHENTAG_END_KURZ>So</WOCHENTAG_END_KURZ>
			<END_DATUM>14.06.</END_DATUM>
			<END_UHRZEIT>14.00</END_UHRZEIT>
			<END_MONAT>Juni</END_MONAT>
			<END_JAHR>2015</END_JAHR>
			<monthbar>0</monthbar>
			<_event_ID Label="Veranstaltungs-ID">68864</_event_ID>
			<_event_INPUTMASK_ID Label="Eingabformular-ID">11
			</_event_INPUTMASK_ID>
			<_event_TITLE Label="Titel">Nachrodt: Auf der Suche nach der
				Schatzinsel</_event_TITLE>
			<_event_EVENTTYPE Label="Art der Veranstaltung / Kategorie">Fortbildungen / Seminare /
				Vorträge</_event_EVENTTYPE>
			<_event_PEOPLE Label="Zielgruppe">Erwachsene</_event_PEOPLE>
			<_event_SHORT_DESCRIPTION Label="Beschreibung" />
			<_event_LONG_DESCRIPTION />
			<_event_LINK Label="Internetadresse (eigene Infos im Internet)">http://www.kircheundgesellschaft.de/veranstaltungen/einzelansicht/?tx_events_pi1%5Bevent%5D=1069
			</_event_LINK>
			<_event_KAT />
			<_event_KAT_2 />
			<_event_EMAIL Label="Email" />
			<_event_PERSON_ID Label="Ansprechpartner">2103</_event_PERSON_ID>
			<_event_PLACE_ID Label="Ort">2434</_event_PLACE_ID>
			<_event_REGION_ID />
			<_event_SUBREGION_ID Label="Kirchenkreis">überregional
			</_event_SUBREGION_ID>
			<_event_REGION_2_ID />
			<_event_REGION_3_ID />
			<_event_PROFESSION_ID />
			<_event_MUSIC_KAT_ID>keine Angabe</_event_MUSIC_KAT_ID>
			<_event_FLAG1 Label="Ausgabe auf www.solideo.de [1|0]">0</_event_FLAG1>
			<_event_TEXTLINE_1 />
			<_event_TEXTLINE_2 />
			<_event_TEXTLINE_3 />
			<_event_TEXTLINE_4 />
			<_event_TEXTLINE_5 />
			<_event_TEXTBOX_1 Label="Weitere Informationen"> „Ein freies Wochenende für
				die Mama,
				ein tolles Erlebnis für Väter und Kinder“

				Liebe Väter, liebe Kinder,
				wann hat man schon mal ein ganzes Wochenende Zeit für einander? Na klar,
				vom 12.-14.06.2015 denn an diesem Wochenende veranstalten wir in
				Zusammenarbeit mit dem Ev. Kindergarten Lindenbergstraße unser
				nächstes Erlebniswochenende für Väter und Kinder. Mitfahren können
				alle Kinder ab 3 Jahren. An unserem Wochenende steht die Suche nach
				der berühmten Schatzinsel im Mittelpunkt. Auf der Suche nach dieser
				Insel werden Väter und&amp;nbsp;Kinder garantiert viele Abenteuer
				erleben. Wie wir die Schatzinsel finden und welche Aufgaben dafür
				gemeistert werden müssen wird unsere Reise zeigen. Lasst euch
				überraschen. In gemeinsamen Aktionen, Spielen und im Austausch
				miteinander werden wir auf jeden Fall erleben, wie spannend, aber
				auch witzig eine Suche nach dem Schatz werden kann, wenn wir uns
				alle gemeinsam auf den Weg machen.

				Auf ein wunderschönes Wochenende freuen sich
				Jörg Wetjen und Team

				Veranstaltungsort: Ferien-, Schulungs- und Tagungsstätte Nachrodt

				Seminarnummer: 152030
			</_event_TEXTBOX_1>
			<_event_TEXTBOX_2 />
			<_event_TEXTBOX_3 />
			<_event_MENUE_1 Label="Empfohlen für:" />
			<_event_MENUE_2 />
			<_event_YESNO_1>Ja</_event_YESNO_1>
			<_event_YESNO_2>Ja</_event_YESNO_2>
			<_event_YESNO_3>keine Angabe</_event_YESNO_3>
			<_event_DESTINATION Label="Öffentlich / Intern">öffentlich
			</_event_DESTINATION>
			<_event_STATUS Label="Freigabe">ok</_event_STATUS>
			<_event_FEEDBACK_ID />
			<_event_HIGHLIGHT Label="Highlight">high</_event_HIGHLIGHT>
			<_event_USER_ID Label="Veranstalter-ID">45</_event_USER_ID>
			<_event_IMAGE Label="Bild" />
			<_event_THUMBNAIL />
			<_event_MODIFIED Label="Zuletzt geändert">2015-04-30 11:39:26
			</_event_MODIFIED>
			<_inputmask_NAME Label="Eingabformular-Name">Standard</_inputmask_NAME>
			<_place_ID>2434</_place_ID>
			<_place_NAME Label="Name des Veranstaltungsortes">
			</_place_NAME>
			<_place_STREET_NR Label="Strasse, Nr." />
			<_place_ZIP Label="Postleitzahl" />
			<_place_CITY Label="postalischer Ort">siehe Beschreibungstext</_place_CITY>
			<_place_INFO Label="Weitere Informationen zum Ort" />
			<_place_HIDDEN Label="Verwaltungsinformationen" />
			<_place_IMAGE Label="Bild des Veranstaltungsortes" />
			<_place_THUMBNAIL Label="Vorschaubild" />
			<_place_POSITION Label="Position">1</_place_POSITION>
			<_place_KAT Label="Kategorie" />
			<_place_OPEN Label="Öffnungszeiten" />
			<_place_GLAT>0</_place_GLAT>
			<_place_GLONG>0</_place_GLONG>
			<_person_NAME Label="Name des Ansprechpartners">Andrea Winsel</_person_NAME>
			<_person_EMAIL Label="Email des Ansprechpartners">andrea.winsel@kircheundgesellschaft.de
			</_person_EMAIL>
			<_person_CONTACT Label="Kontaktinformationen des Ansprechpartners">Tel. 0 23 04 / 755-373
			</_person_CONTACT>
			<_person_POSITION>0</_person_POSITION>
			<_person_SURNAME Label="Nachname">Winsel</_person_SURNAME>
			<_user_REALNAME Label="Veranstalter">Institut für Kirche und
				Gesellschaft</_user_REALNAME>
			<_user_DESCRIPTION Label="Veranstalter Beschreibung">Das Institut für Kirche
				und Gesellschaft (IKG) ist eine Einrichtung der Evangelischen Kirche
				von Westfalen (EKvW) und Mitglied im Ev. Erwachsenenbildungswerk
				Westfalen und Lippe e.V. Auf der Grundlage des
				Weiterbildungsgesetzes NRW bietet das IKG öff</_user_DESCRIPTION>
			<_user_STREET_NR Label="Veranstalter Strasse, Nr">Iserlohner Str. 25
			</_user_STREET_NR>
			<_user_ZIP Label="Veranstalter Postleitzahl">58239</_user_ZIP>
			<_user_CITY Label="Veranstalter postalischer Ort">Schwerte</_user_CITY>
			<_user_EMAIL Label="Veranstalter Email">info@kircheundgesellschaft.de
			</_user_EMAIL>
			<_user_CONTACT Label="Veranstalter Kontaktdaten" />
			<LITURG_BEZ Label="Liturgische Bezeichnung" />
			<CHANNELS Label="Kanäle" />
			<_inputmask_FIELDS Label="Elemente des Eingabeformulars">
				<_event_TITLE />
				<_event_PLACE_ID />
				<_event_SHORT_DESCRIPTION />
				<_event_EVENTTYPE />
				<_event_LINK />
				<_event_EMAIL />
				<_event_PERSON_ID />
				<_event_SUBREGION_ID />
				<_event_TEXTBOX_1 />
				<_event_DESTINATION />
				<_event_PEOPLE />
				<_event_IMAGE />
				<_event_MENUE_1 />
			</_inputmask_FIELDS>
		</Veranstaltung>
		<Veranstaltung>
			<ID Label="Datum-ID">171305</ID>
			<START Label="am/von">2015-06-12 16:30:00</START>
			<END Label="bis">2015-06-14 14:00:00</END>
			<MODE Label="Start-End-Modus">vonbis</MODE>
			<DATUM>Freitag, 12.6. 16:30 Uhr - Sonntag, 14.6. 14 Uhr</DATUM>
			<DATUM2>Fr, 12.6. 16:30 Uhr - So, 14.6. 14 Uhr</DATUM2>
			<WOCHENTAG_START_LANG>Freitag</WOCHENTAG_START_LANG>
			<WOCHENTAG_START_KURZ>Fr</WOCHENTAG_START_KURZ>
			<START_DATUM>12.06.</START_DATUM>
			<START_UHRZEIT>16.30</START_UHRZEIT>
			<START_MONAT>Juni</START_MONAT>
			<START_JAHR>2015</START_JAHR>
			<WOCHENTAG_END_LANG>Sonntag</WOCHENTAG_END_LANG>
			<WOCHENTAG_END_KURZ>So</WOCHENTAG_END_KURZ>
			<END_DATUM>14.06.</END_DATUM>
			<END_UHRZEIT>14.00</END_UHRZEIT>
			<END_MONAT>Juni</END_MONAT>
			<END_JAHR>2015</END_JAHR>
			<monthbar>0</monthbar>
			<_event_ID Label="Veranstaltungs-ID">68865</_event_ID>
			<_event_INPUTMASK_ID Label="Eingabformular-ID">11
			</_event_INPUTMASK_ID>
			<_event_TITLE Label="Titel">Damme: Komm, spiel mit mir
			</_event_TITLE>
			<_event_EVENTTYPE Label="Art der Veranstaltung / Kategorie">Fortbildungen / Seminare /
				Vorträge</_event_EVENTTYPE>
			<_event_PEOPLE Label="Zielgruppe">Erwachsene</_event_PEOPLE>
			<_event_SHORT_DESCRIPTION Label="Beschreibung" />
			<_event_LONG_DESCRIPTION />
			<_event_LINK Label="Internetadresse (eigene Infos im Internet)">http://www.kircheundgesellschaft.de/veranstaltungen/einzelansicht/?tx_events_pi1%5Bevent%5D=1120
			</_event_LINK>
			<_event_KAT />
			<_event_KAT_2 />
			<_event_EMAIL Label="Email" />
			<_event_PERSON_ID Label="Ansprechpartner">2103</_event_PERSON_ID>
			<_event_PLACE_ID Label="Ort">2434</_event_PLACE_ID>
			<_event_REGION_ID />
			<_event_SUBREGION_ID Label="Kirchenkreis">überregional
			</_event_SUBREGION_ID>
			<_event_REGION_2_ID />
			<_event_REGION_3_ID />
			<_event_PROFESSION_ID />
			<_event_MUSIC_KAT_ID>keine Angabe</_event_MUSIC_KAT_ID>
			<_event_FLAG1 Label="Ausgabe auf www.solideo.de [1|0]">0</_event_FLAG1>
			<_event_TEXTLINE_1 />
			<_event_TEXTLINE_2 />
			<_event_TEXTLINE_3 />
			<_event_TEXTLINE_4 />
			<_event_TEXTLINE_5 />
			<_event_TEXTBOX_1 Label="Weitere Informationen">Seminarbeschreibung folgt

				Veranstaltungsort: Jugend und Freizeitzentrum am Dümmer See

				Seminarnummer: 152031
			</_event_TEXTBOX_1>
			<_event_TEXTBOX_2 />
			<_event_TEXTBOX_3 />
			<_event_MENUE_1 Label="Empfohlen für:" />
			<_event_MENUE_2 />
			<_event_YESNO_1>Ja</_event_YESNO_1>
			<_event_YESNO_2>Ja</_event_YESNO_2>
			<_event_YESNO_3>keine Angabe</_event_YESNO_3>
			<_event_DESTINATION Label="Öffentlich / Intern">öffentlich
			</_event_DESTINATION>
			<_event_STATUS Label="Freigabe">ok</_event_STATUS>
			<_event_FEEDBACK_ID />
			<_event_HIGHLIGHT Label="Highlight">high</_event_HIGHLIGHT>
			<_event_USER_ID Label="Veranstalter-ID">45</_event_USER_ID>
			<_event_IMAGE Label="Bild" />
			<_event_THUMBNAIL />
			<_event_MODIFIED Label="Zuletzt geändert">2015-04-30 11:39:26
			</_event_MODIFIED>
			<_inputmask_NAME Label="Eingabformular-Name">Standard</_inputmask_NAME>
			<_place_ID>2434</_place_ID>
			<_place_NAME Label="Name des Veranstaltungsortes">
			</_place_NAME>
			<_place_STREET_NR Label="Strasse, Nr." />
			<_place_ZIP Label="Postleitzahl" />
			<_place_CITY Label="postalischer Ort">siehe Beschreibungstext</_place_CITY>
			<_place_INFO Label="Weitere Informationen zum Ort" />
			<_place_HIDDEN Label="Verwaltungsinformationen" />
			<_place_IMAGE Label="Bild des Veranstaltungsortes" />
			<_place_THUMBNAIL Label="Vorschaubild" />
			<_place_POSITION Label="Position">1</_place_POSITION>
			<_place_KAT Label="Kategorie" />
			<_place_OPEN Label="Öffnungszeiten" />
			<_place_GLAT>0</_place_GLAT>
			<_place_GLONG>0</_place_GLONG>
			<_person_NAME Label="Name des Ansprechpartners">Andrea Winsel</_person_NAME>
			<_person_EMAIL Label="Email des Ansprechpartners">andrea.winsel@kircheundgesellschaft.de
			</_person_EMAIL>
			<_person_CONTACT Label="Kontaktinformationen des Ansprechpartners">Tel. 0 23 04 / 755-373
			</_person_CONTACT>
			<_person_POSITION>0</_person_POSITION>
			<_person_SURNAME Label="Nachname">Winsel</_person_SURNAME>
			<_user_REALNAME Label="Veranstalter">Institut für Kirche und
				Gesellschaft</_user_REALNAME>
			<_user_DESCRIPTION Label="Veranstalter Beschreibung">Das Institut für Kirche
				und Gesellschaft (IKG) ist eine Einrichtung der Evangelischen Kirche
				von Westfalen (EKvW) und Mitglied im Ev. Erwachsenenbildungswerk
				Westfalen und Lippe e.V. Auf der Grundlage des
				Weiterbildungsgesetzes NRW bietet das IKG öff</_user_DESCRIPTION>
			<_user_STREET_NR Label="Veranstalter Strasse, Nr">Iserlohner Str. 25
			</_user_STREET_NR>
			<_user_ZIP Label="Veranstalter Postleitzahl">58239</_user_ZIP>
			<_user_CITY Label="Veranstalter postalischer Ort">Schwerte</_user_CITY>
			<_user_EMAIL Label="Veranstalter Email">info@kircheundgesellschaft.de
			</_user_EMAIL>
			<_user_CONTACT Label="Veranstalter Kontaktdaten" />
			<LITURG_BEZ Label="Liturgische Bezeichnung" />
			<CHANNELS Label="Kanäle" />
			<_inputmask_FIELDS Label="Elemente des Eingabeformulars">
				<_event_TITLE />
				<_event_PLACE_ID />
				<_event_SHORT_DESCRIPTION />
				<_event_EVENTTYPE />
				<_event_LINK />
				<_event_EMAIL />
				<_event_PERSON_ID />
				<_event_SUBREGION_ID />
				<_event_TEXTBOX_1 />
				<_event_DESTINATION />
				<_event_PEOPLE />
				<_event_IMAGE />
				<_event_MENUE_1 />
			</_inputmask_FIELDS>
		</Veranstaltung>
		<Veranstaltung>
			<ID Label="Datum-ID">171306</ID>
			<START Label="am/von">2015-06-12 16:30:00</START>
			<END Label="bis">2015-06-14 14:00:00</END>
			<MODE Label="Start-End-Modus">vonbis</MODE>
			<DATUM>Freitag, 12.6. 16:30 Uhr - Sonntag, 14.6. 14 Uhr</DATUM>
			<DATUM2>Fr, 12.6. 16:30 Uhr - So, 14.6. 14 Uhr</DATUM2>
			<WOCHENTAG_START_LANG>Freitag</WOCHENTAG_START_LANG>
			<WOCHENTAG_START_KURZ>Fr</WOCHENTAG_START_KURZ>
			<START_DATUM>12.06.</START_DATUM>
			<START_UHRZEIT>16.30</START_UHRZEIT>
			<START_MONAT>Juni</START_MONAT>
			<START_JAHR>2015</START_JAHR>
			<WOCHENTAG_END_LANG>Sonntag</WOCHENTAG_END_LANG>
			<WOCHENTAG_END_KURZ>So</WOCHENTAG_END_KURZ>
			<END_DATUM>14.06.</END_DATUM>
			<END_UHRZEIT>14.00</END_UHRZEIT>
			<END_MONAT>Juni</END_MONAT>
			<END_JAHR>2015</END_JAHR>
			<monthbar>0</monthbar>
			<_event_ID Label="Veranstaltungs-ID">68866</_event_ID>
			<_event_INPUTMASK_ID Label="Eingabformular-ID">11
			</_event_INPUTMASK_ID>
			<_event_TITLE Label="Titel">Wetter: Auf der Suche nach der
				Schatzinsel</_event_TITLE>
			<_event_EVENTTYPE Label="Art der Veranstaltung / Kategorie">Fortbildungen / Seminare /
				Vorträge</_event_EVENTTYPE>
			<_event_PEOPLE Label="Zielgruppe">Erwachsene</_event_PEOPLE>
			<_event_SHORT_DESCRIPTION Label="Beschreibung" />
			<_event_LONG_DESCRIPTION />
			<_event_LINK Label="Internetadresse (eigene Infos im Internet)">http://www.kircheundgesellschaft.de/veranstaltungen/einzelansicht/?tx_events_pi1%5Bevent%5D=1067
			</_event_LINK>
			<_event_KAT />
			<_event_KAT_2 />
			<_event_EMAIL Label="Email" />
			<_event_PERSON_ID Label="Ansprechpartner">2103</_event_PERSON_ID>
			<_event_PLACE_ID Label="Ort">2531</_event_PLACE_ID>
			<_event_REGION_ID />
			<_event_SUBREGION_ID Label="Kirchenkreis">überregional
			</_event_SUBREGION_ID>
			<_event_REGION_2_ID />
			<_event_REGION_3_ID />
			<_event_PROFESSION_ID />
			<_event_MUSIC_KAT_ID>keine Angabe</_event_MUSIC_KAT_ID>
			<_event_FLAG1 Label="Ausgabe auf www.solideo.de [1|0]">0</_event_FLAG1>
			<_event_TEXTLINE_1 />
			<_event_TEXTLINE_2 />
			<_event_TEXTLINE_3 />
			<_event_TEXTLINE_4 />
			<_event_TEXTLINE_5 />
			<_event_TEXTBOX_1 Label="Weitere Informationen">Seminarbeschreibung folgt

				Veranstaltungsort: Jugendferienheim Eggeklause Wetter

				Seminarnummer: 152032
			</_event_TEXTBOX_1>
			<_event_TEXTBOX_2 />
			<_event_TEXTBOX_3 />
			<_event_MENUE_1 Label="Empfohlen für:" />
			<_event_MENUE_2 />
			<_event_YESNO_1>Ja</_event_YESNO_1>
			<_event_YESNO_2>Ja</_event_YESNO_2>
			<_event_YESNO_3>keine Angabe</_event_YESNO_3>
			<_event_DESTINATION Label="Öffentlich / Intern">öffentlich
			</_event_DESTINATION>
			<_event_STATUS Label="Freigabe">ok</_event_STATUS>
			<_event_FEEDBACK_ID />
			<_event_HIGHLIGHT Label="Highlight">high</_event_HIGHLIGHT>
			<_event_USER_ID Label="Veranstalter-ID">45</_event_USER_ID>
			<_event_IMAGE Label="Bild" />
			<_event_THUMBNAIL />
			<_event_MODIFIED Label="Zuletzt geändert">2015-04-30 11:39:26
			</_event_MODIFIED>
			<_inputmask_NAME Label="Eingabformular-Name">Standard</_inputmask_NAME>
			<_place_ID>2531</_place_ID>
			<_place_NAME Label="Name des Veranstaltungsortes">Jugendferienheim Eggeklause Wetter
			</_place_NAME>
			<_place_STREET_NR Label="Strasse, Nr.">Auf der Egge 63
			</_place_STREET_NR>
			<_place_ZIP Label="Postleitzahl">58300</_place_ZIP>
			<_place_CITY Label="postalischer Ort">Wetter</_place_CITY>
			<_place_INFO Label="Weitere Informationen zum Ort">Tel.: 02335/71924
				E-Mail: info@nfh-eggeklause.de
			</_place_INFO>
			<_place_HIDDEN Label="Verwaltungsinformationen" />
			<_place_IMAGE Label="Bild des Veranstaltungsortes" />
			<_place_THUMBNAIL Label="Vorschaubild" />
			<_place_POSITION Label="Position">14</_place_POSITION>
			<_place_KAT Label="Kategorie" />
			<_place_OPEN Label="Öffnungszeiten" />
			<_place_GLAT>51,38937</_place_GLAT>
			<_place_GLONG>7,32253</_place_GLONG>
			<_person_NAME Label="Name des Ansprechpartners">Andrea Winsel</_person_NAME>
			<_person_EMAIL Label="Email des Ansprechpartners">andrea.winsel@kircheundgesellschaft.de
			</_person_EMAIL>
			<_person_CONTACT Label="Kontaktinformationen des Ansprechpartners">Tel. 0 23 04 / 755-373
			</_person_CONTACT>
			<_person_POSITION>0</_person_POSITION>
			<_person_SURNAME Label="Nachname">Winsel</_person_SURNAME>
			<_user_REALNAME Label="Veranstalter">Institut für Kirche und
				Gesellschaft</_user_REALNAME>
			<_user_DESCRIPTION Label="Veranstalter Beschreibung">Das Institut für Kirche
				und Gesellschaft (IKG) ist eine Einrichtung der Evangelischen Kirche
				von Westfalen (EKvW) und Mitglied im Ev. Erwachsenenbildungswerk
				Westfalen und Lippe e.V. Auf der Grundlage des
				Weiterbildungsgesetzes NRW bietet das IKG öff</_user_DESCRIPTION>
			<_user_STREET_NR Label="Veranstalter Strasse, Nr">Iserlohner Str. 25
			</_user_STREET_NR>
			<_user_ZIP Label="Veranstalter Postleitzahl">58239</_user_ZIP>
			<_user_CITY Label="Veranstalter postalischer Ort">Schwerte</_user_CITY>
			<_user_EMAIL Label="Veranstalter Email">info@kircheundgesellschaft.de
			</_user_EMAIL>
			<_user_CONTACT Label="Veranstalter Kontaktdaten" />
			<LITURG_BEZ Label="Liturgische Bezeichnung" />
			<CHANNELS Label="Kanäle" />
			<_inputmask_FIELDS Label="Elemente des Eingabeformulars">
				<_event_TITLE />
				<_event_PLACE_ID />
				<_event_SHORT_DESCRIPTION />
				<_event_EVENTTYPE />
				<_event_LINK />
				<_event_EMAIL />
				<_event_PERSON_ID />
				<_event_SUBREGION_ID />
				<_event_TEXTBOX_1 />
				<_event_DESTINATION />
				<_event_PEOPLE />
				<_event_IMAGE />
				<_event_MENUE_1 />
			</_inputmask_FIELDS>
		</Veranstaltung>
	</Export>
</root>
EOTXML;
		
		return $xmlTestBlob;
	} // end of function getTestXmlFive()
}