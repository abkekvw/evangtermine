Zum Anpassen der Darstellung gibt es prinzipiell zwei Wege:

1. per CSS
2. über eigene Fluid-Templates

**per CSS**
	Ähnlich wie bei den Ausgabeansichten von evangelische-termine.de (/veranstaltungen, /veranstaltungen2, /teaser.html usw.)
	haben in den Standardtemplates der evangtermine-Extension fast alle sichtbaren Elemente CSS-Klassen, die sich über einen Blick in
	den Quelltext der Seite schnell herausfinden lassen. Damit können solche Elemente im Layout verändert oder ausgeblendet werden.

	Beispiel: In der Listenansicht soll der Name des Ansprechpartners ausgeblendet werden. Dazu dient folgendes CSS::

		.et_personname {
			display: none;
		}


**eigene Fluid-Templates**
	Wer sich mit Fluid auskennt, kann die mitgelieferten Templates, Layouts und Partials verändern 
	oder durch eigene ersetzen. Siehe dazu weiter unten: Zum Einstieg in Fluid z.B.: http://docs.typo3.org/typo3cms/ExtbaseFluidBook/ 