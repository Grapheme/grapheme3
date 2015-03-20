<?
/**
* TEMPLATE_IS_NOT_SETTABLE
*/
?>
{{ Form::open(array('route'=>array('ajax.send-message','audit'),'class'=>'js-apply-form seo-form','id'=>'seo-apply')) }}
    <div class="input-cont">
        <input name="name" placeholder="Представтесь" class="us-input">
    </div>
    <div class="input-cont">
        <input name="phone" placeholder="Контактный телефон" class="us-input">
    </div>
    <div class="input-cont">
        <input name="email" placeholder="Электронная почта" class="us-input">
    </div>
    <div class="input-cont">
        <input name="site" placeholder="Адрес вашего сайта" class="us-input">
    </div>
    <div class="input-cont">
        <button type="submit" class="hover-btn"><span>Оставить заявку</span></button>
        <div class="js-response-text ajax-message"></div>
    </div>
{{ Form::close() }}