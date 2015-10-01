# acf-split-terms

Rename ACF fields when terms are split by WP

This plugin needs to be active prior to updating to WP v4.2

History of splitting terms in WP

In WP v4.0 if a term was created in a taxonomy with the same name/slug as a term that already existed in another taxonomy then WP would use the same term ID for both terms.

In WP v4.1 WP stopped creating shared terms.

In WP v4.2 when a shared term is edited it will be split

In WP v4.3 when editing any term in a taxonomy all of the shared terms in that taxonomy will be split