TypoScript-Referenz
-------------------

settings
^^^^^^^^

Unterhalb von *settings* finden sich Eigenschaften zum Setzen von CSS- und JavaScript- Dateien.

**Tipp:** Die mit der Extension gelieferten Werte haben nur den Zweck, das Layout und die Funktionen der
ebenfalls mitgelieferten Fluid-Templates sicher zu stellen.
Es wird unbedingt empfohlen, in eigenen Projekten diese Werte zu überschreiben, oder - besser noch - ganz 
zu löschen und entsprechende JS- und CSS-Ressourcen direkt über das Haupt-TypoSkript-Template der
Website einzubinden. Hier existieren weit bessere Möglichkeiten zum Umgang mit solchen Dateien 
(Concatenation usw.)

.. container:: table-row

	Property
		jQueryUICSS

	Data type
		String

   	Description
		Pfad zur CSS-Datei der jQueryUI-Bibliothek, die von den mitgelieferten Fluid-Templates benötigt wird.
		
	Beispiel::
		plugin.tx_evangtermine.settings.jQueryUICSS = Resources/Public/jquery-ui-1.11.4.custom/jquery-ui.min.css
		
		
.. container:: table-row

	Property
		CSSFile

	Data type
		String

   	Description
		Möglichkeit, eine weitere CSS-Datei mit eigenen Angaben einzubinden.
		
	Beispiel::
		CSSFile = Resources/Public/CSS/default.css		
		
.. container:: table-row

	Property
		jQuery

	Data type
		String

   	Description
		Pfad zur jQuery-Bibliothek, die von den mitgelieferten Fluid-Templates benötigt wird.
		
	Beispiel::
		jQuery = Resources/Public/jquery-1.11.1.min.js

		
.. container:: table-row

	Property
		jQueryUI

	Data type
		String

   	Description
		Pfad zur jQueryUI-Bibliothek, die von den mitgelieferten Fluid-Templates benötigt wird.
		
	Beispiel::
		jQueryUI = Resources/Public/jquery-ui-1.11.4.custom/jquery-ui.min.js

		
.. container:: table-row

	Property
		customJS

	Data type
		String

   	Description
		Möglichkeit, eine weitere JavaScript-Datei mit eingenen Skripten einzubinden.
		
	Beispiel::
		customJS = Resources/Public/evangtermine.js
	
		
view
^^^^

Wenn Sie eigene Fluid-Templates verwenden oder die mitgelieferten modifizieren wollen,
können unterhalb von **view** Pfade zu eigenen Fluid-Templates überschrieben werden.

.. container:: table-row

	Property
		templateRootPath

	Data type
		String

   	Description
		Pfad zu eigenen Fluid-Templates
		
	Beispiel::
		plugin.tx_evangtermine.view.templateRootPath = fileadmin/dev/fluidtemplates/


.. container:: table-row

	Property
		partialRootPath

	Data type
		String

   	Description
		Pfad zu eigenen Fluid-Partials
		

.. container:: table-row

	Property
		layoutRootPath

	Data type
		String

   	Description
		Pfad zu eigenen Fluid-Layouts
