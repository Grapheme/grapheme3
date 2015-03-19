<?
/**
 * TEMPLATE_IS_NOT_SETTABLE
 */

$contacts = Dictionary::valuesBySlug('contacts');
$contacts = DicLib::extracts($contacts, null, true, true);
?>
<div class="block-contacts">
    <div class="contacts-wrapper clearfix">
        {{ isset($contacts[53]['description']) ? $contacts[53]['description'] : 'Контакты не установлены' }}
        <div class="contacts-cross">
            <div class="contacts-cross-inner">✕</div>
        </div>
    </div>
</div>