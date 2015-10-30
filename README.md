# CKEDitor CodeSnippet

A Drupal 8 module providing [CKEDitor CodeSnippet plugin](http://ckeditor.com/addon/codesnippet).

## Installation

1. Install the module
1. Drag the CodeSnippet button to Active Toolbar at the text format configuration page

## Reusability

1. Define list of required languages
1. Download build of hightlight.js at https://highlightjs.org/download/
1. Override `js/plugins/codesnippet/lib/highlight` with new build
1. Update list of languages in `js/ckeditor_config.js`
