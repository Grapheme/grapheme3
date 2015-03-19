<?
/**
 * TEMPLATE_IS_NOT_SETTABLE
 */

$contacts = Dictionary::valuesBySlug('contacts');
$contacts = DicLib::extracts($contacts, null, true, true);
Helper::ta($contacts);
?>
<div class="block-contacts">
    <div class="contacts-wrapper clearfix">

        <div class="address">
            <address>344006, Ростов-на-Дону, ул. Суворова 52а, офис 304</address>
            <a class="map-link">Как добраться?</a>
        </div>
        <div class="phone"><a href="tel:+78632041941" class="tel-link">(863) 204-19-41</a><a href="tel:+79094281234" class="tel-link">+7 (909) 428-12-34</a></div>
        <div class="mail"><a href="mailto:be.digital@grapheme.ru" class="mail-link">be.digital@grapheme.ru</a></div>
        <div class="contacts-cross">
            <div class="contacts-cross-inner">✕</div>
        </div>
    </div>
</div>