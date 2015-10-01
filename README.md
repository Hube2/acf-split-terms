# acf-split-terms

Rename ACF fields when terms are split by WP

This plugin needs to be active in WP 4.2 and later
In WP 4.3 after editing any term in any taxonomy all of the shared terms in that taxonomy will be split
Once all terms have been split this plugin can be removed, but it won't hurt anything to leave it active just in case

History of splitting terms in WP

In WP v4.0 if a term was created in a taxonomy with the same name/slug as a term that already existed then WP would use the same term ID for both terms

In WP v4.1 WP stopped creating shared terms.

In WP v4.2 when a shared term was edited it will be split

In WP v4.3 when editing any term in a taxonomy all of the shared terms in the taxonomy will be split