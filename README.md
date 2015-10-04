# acf-split-terms

Rename ACF fields when terms are split by WP

Please note that I have spoken with the developer of ACF and looked into the ACF code. There is something in 
ACF that is supposed to deal with split terms. It seems that there are instances where for some reason it does 
not work and I don't know why, nor do I really care to investigate it further. It will not hurt anything to have 
this plugin installed when transitioning from WP 4.0 thru 4.3 or to keep it in place until you're sure you've gone
through all the term splitting, just in case. It's better to be safe than need to fix things later.

This plugin needs to be active prior to updating to WP 4.2 or 4.3 and editing split terms

History of splitting terms in WP

In WP v4.0 if a term was created in a taxonomy with the same name/slug as a term that already existed in another taxonomy then WP would use the same term ID for both terms.

In WP v4.1 WP stopped creating shared terms.

In WP v4.2 when a shared term is edited it will be split

In WP v4.3 when editing any term in a taxonomy all of the shared terms in that taxonomy will be split
