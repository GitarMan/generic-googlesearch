=== Generic Google Search ===
Contributors: gitarman
Donate link: http://ronholt.info/
Tags: google, search
Requires at least: 2.5
Tested up to: 4.7
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds customizable shortcode widget [generic_google_search] to insert a generic Google search form - (Not a Google Custom Search)

== Description ==

This plugin creates a form that inserts a Generic Google Search form using a shortcode.

To add a generic Google search form to your website, just include the following shortcode anywhere you can insert text or HTML:

[generic_google_search]

By default, without any of the optional attributes defined, this will insert the following HTML form into your site:
```
<form id="generic-google-search" class="generic-google-search" method="get" action="http://www.google.com/search" target="_blank">
    <input type="text" size="30" maxlength="255" value="" placeholder="Search Terms...">
    <input type="submit" value="Google Search">
</form>
```

There are several optional attributes you can use with this shortcode!

The following are the attribute keys paired with their default values...
Form ID:
* 'id' => 'generic-google-search'

Form Class:
* 'class' => 'generic-google-search'

Form Target:
* 'target' => '_blank'

Text Input Size (in number of characters):
* 'size' => '30'

Max Length of Text Input:
* 'maxlength' => '255'

Default Text Input Value:
* 'text-input-value' => ''

Text Input Placeholder:
* 'placeholder' => 'Search Terms...'

Submit Button Value:
* 'button-value' => 'Google Search'


Example usage:
* [generic_google_search id="my-id" class="my-class"]
* [generic_google_search target="_self"]
* [generic_google_search text-value="my search query" button-value="Search Google for my search query"]
* [generic_google_search size="50"]

== Changelog ==

= 0.1.0 =
* 10/21/2019 - Initial Release
