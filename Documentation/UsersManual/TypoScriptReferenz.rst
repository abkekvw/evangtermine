TypoScript-Referenz
-------------------

settings
^^^^^^^^

Unterhalb von *settings* finden sich Eigenschaften zum Setzen von CSS- und JavaScript- Dateien.

	Die mit der Extension gelieferten Werte haben nur den Zweck, das Layout und die Funktionen der
	ebenfalls mitgelieferten Fluid-Templates sicher zu stellen.
	
	**Tipp:** Es wird unbedingt empfohlen, in eigenen Projekten diese Werte zu überschreiben, oder - besser noch - ganz 
	zu löschen und entsprechende JS- und CSS-Ressourcen direkt über das Haupt-TypoScript-Template der
	Website einzubinden. Hier existieren weit bessere Möglichkeiten zum Umgang mit solchen Dateien 
	(Concatenation usw.) 

.. container:: table-row

	Property
		jQueryUICSS

	Data type
		String

   	Description
		Gollum. This allows you to pre-split the content passed to parseFunc so that
		only content outside the blocks with the given tags is parsed.
		
	Beispiel::
	
		plugin.tx_evangtermine.settings.jQueryUICSS = Resources/Public/jquery-ui-1.11.4.custom/jquery-ui.min.css
		
		
.. container:: table-row

	Property
		CSSFile

	Data type
		String

   	Description
		Gollum. This allows you to pre-split the content passed to parseFunc so that
		only content outside the blocks with the given tags is parsed.
		
		
.. container:: table-row

	Property
		jQuery

	Data type
		String

   	Description
		Gollum. This allows you to pre-split the content passed to parseFunc so that
		only content outside the blocks with the given tags is parsed.

		
.. container:: table-row

	Property
		jQueryUI

	Data type
		String

   	Description
		Gollum. This allows you to pre-split the content passed to parseFunc so that
		only content outside the blocks with the given tags is parsed.

		
.. container:: table-row

	Property
		customJS

	Data type
		String

   	Description
		Gollum. This allows you to pre-split the content passed to parseFunc so that
		only content outside the blocks with the given tags is parsed.