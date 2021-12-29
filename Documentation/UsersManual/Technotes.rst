Feldwerte auslesen
------------------

evangtermine ruft die XML-Ausgabe von evangelische-termine.de ab, also z.B.::

	https://www.evangelische-termine.de/xml?highlight=high&itemsPerPage=20
	
Was zu einer XML-Datei mit einer Liste von <Veranstaltung>-Elementen führt (Ausschnitt):

.. figure:: xml_raw_list.png
	:width: 600px
	:alt: Ausschnitt XML-Ergebnis
	
	Ausschnitt XML-Ergebnis
	
Die Liste der <Veranstaltung>-Elemente wird in ein Array von SimpleXMLElement-Objekten übertragen und an das Fluid-Template
übergeben, es steht dort unter dem Namen **events.items** zur Verfügung. Im Template wird daraus eine Schleife gebildet::

	<f:for each="{events.items}" as="event">
	...
	...
	</f:for each>

Das heißt: Jedes **event** innerhalb der Schleife ist ein SimpleXMLElement-Objekt, auf dessen Feldwerte über deren Namen zugegriffen
werden kann, z.B.::

	event._user_REALNAME

So lassen sich alle Feldwerte auslesen.

Labels
^^^^^^

Wenn auf die Labels einzelner Felder zugegriffen werden soll, steht dafür ein eigener ViewHelper zur Verfügung, z.B.::

	<et:attr on="{event._event_TITLE}" name="Label" />
	
Liest aus dem Objekt unter event._event_TITLE das Attribut "Label", also in diesem Fall der Wert "Titel".
	

Verwendbare ViewHelper
----------------------

**et:attr**
	
Liest Attributwerte aus einem SimpleXMLElement-Objekt aus::
	
	<et:attr on="{event._event_TITLE}" name="Label" />
	
ergibt "Titel".	
	
============ =============================== =======
Eigenschaft  Bedeutung                       Pflicht
============ =============================== =======
on           SimpleXMLElement-Objekt         ja
name         Name des zu lesenden Attributs  ja
============ =============================== =======


**et:str**

Liefert den Inhalt eines SimpleXMLElement-Objekts als String. Verwendet nur innerhalb von condition-Eigenschaften
des f:if-View Helpers::

	<f:if condition="<et:str on='{event._event_TEXTLINE_2}'/>">

============ ============================== =======
Eigenschaft  Bedeutung                      Pflicht
============ ============================== =======
on           SimpleXMLElement-Objekt        ja
============ ============================== =======
	
	
**et:tag**

Hüllt den Wert von *node* in einen Tag *name* mit einem class-Attribut *class*::

	<et:tag node="{event._event_TITLE}" name="p" class="important" />
	
	erzeugt
	
	<p class="important">Gottesdienst zum Erntedank</p>
	
Werden *name* und *class* nicht angegeben, entspricht *name* = "span" und *class* dem Namen des
XML-Knotens mit vorangestelltem "et", also z.B. *et_event_TITLE* 

=========== ============================== =======
Eigenschaft Bedeutung                      Pflicht
=========== ============================== =======
node        SimpleXMLElement-Objekt        ja
name        Tag-Name, z.B.: div, p         nein
class       Class-Name                     nein
=========== ============================== =======


Fluid-Templates: Verwendbare Daten
----------------------------------

Template: **List.html** (EventcontainerController, Action: **list**)
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

**events**
	Objekt vom Typ Eventcontainer, enthält unter {events.items} die Liste der <Veranstaltung>-Elemente
	(SimpleXMLElements) und unter {events.metaData} das Element <meta>.
	
**etkeys**
	Objekt vom Typ EtKeys. Attribute des Objekts sind alle aktiven Request-Parameter aus dem Abruf
	der XML-Daten. {etkeys.highlight} liefert z.B. den Parameter *highlight* mit dem Wert *high* oder *all*, 
	{etkeys.vid} die aktive Veranstalter-Id usw.   

**categoryList**
	Liste der gültigen Veranstaltungskategorien (variiert je nach Landeskirche)

**groupList**
	Liste der gültigen Zielgruppen (variiert je nach Landeskirche)


Template: **Teaser.html** (EventcontainerController, Action: **teaser**)
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

**events**
	Objekt vom Typ Eventcontainer, wie oben beim Template List.hmtl.


Template: **Show.html** (EventcontainerController, Action: **show**)
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

**event**
	Alle Felder der Einzelveranstaltung, die angezeigt werden soll, z.B. {event._place_NAME} für den Veranstaltungsort.

**detailitems**
	Die Felder des Elements <detail>, das ist eine Liste von <item>-Elementen mit fertig zusammengesetzter
	Veranstaltungsadresse und anderen Informationen.
	

**eventhost**
	Der Hostname, der im Extension Manager eingestellt wurde, z.B. www.evangelische-termine.de oder www.veranstaltungen-ekvw.de

