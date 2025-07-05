# Code Snippets zum Thema Barrierefreiheitsstärkungsgesetz

Um die Anforderungen des Barrierefreiheitsstärkungsgesetzes (BFSG) zu erfüllen[^1] werden Anpassungen an Contao nötig.
Diese betreffen 

* [Anpassungen von Templates](https://docs.contao.org/manual/de/layout/templates/twig/wiederverwendung/) 

und ggf. 

* Daten Anpassungen ([DCA-Anpassungen](https://docs.contao.org/manual/de/anleitungen/dca/#dca-anpassungen))

falls hierzu im Backend weitere Daten erfasst werden müssen.

## Installation

Kopiere die entsprechenden Dateien an die jeweilige Stelle Deiner Contao Installation (ggf. selbst anzulegendes 
Verzeichnisse `contao/dca`, `contao/languages/de` und `templates/`) und erneuere den Anwendungs-Cache und führe
bei DCA-Anpassungen eine 
[Datenbank-Migration](https://docs.contao.org/manual/de/migration/#migrationen-und-datenbank-updates-starten) aus.

Siehe dazu z.B. auch https://docs.contao.org/manual/de/anleitungen/dca/#dca-anpassungen.


## Anpassungen

### Hyperlinks

Siehe https://github.com/ContaoBayern/barrierefreiheit-info/blob/main/link-bfsg.md ("Inhaltselement hyperlink")

* Template
  * `templates/content_element/hyperlink/add_aria_labeledby_text.html.twig` 
 
* DCA
  * Datenstruktur `contao/dca/tl_content.php`
  * Labels `contao/languages/de/tl_content.php`
 


## Anmerkungen

[^1]: Inwieweit die jeweilige Anpassung die gesetzlichen Anforderungen erfüllt musst Du selbst prüfen! 
  Die hier gezeigten Anpassungen sind lediglich Vorschläge. 
