<?
/**
 * TITLE: SEO
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')
    animsition
@stop
@section('content')
    @include(Helper::layout('header'),array('header_class'=>'header-white '))
    @include(Helper::layout('block-contacts'))
    <div class="main-wrapper">
        <div class="seo">
            <div class="top-caption">
                <div class="bar"></div>
                <div class="teaser">
                    {{ $page->block('main_title') }}
                </div>
            </div>
            <div class="block white col-3">
                <div class="wrapper">
                    {{ $page->block('result-seo-title') }}
                    <div class="row">
                        <div class="unit">
                            {{ $page->block('povyshenie-konversii') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('privlechenie-posetiteley') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('uluchshenie-raboty-sayta-i-otdela-prodaj') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="block grey col-2 bordered">
                <div class="wrapper">
                    <h2>{{ $page->block('zakaz-seo-u-nas') }}</h2>
                    <div class="row">
                        <div class="unit">
                            {{ $page->block('dumaem') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('tochno-znaem-chto-neobhodimo') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('cenim-vremya') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('podderjivaem') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block colorize">
                {{ $page->block('prodvijenie-uje-segodnya') }}
                <p class="btn-cont"><a href="#" data-scrollTo="applyform" class="hover-btn"><span>Оставить заявку</span></a></p>
            </div>
            <div class="block plain-text">
                <div class="wrapper">
                    {{ $page->block('stoit-optimizaciya') }}
                    <div class="teaser">
                        <div class="ico"><img src="/{{ Config::get('site.theme_path') }}/images/icons/wallet.png"></div>
                        <div class="info">
                            {{ $page->block('stoit-optimizaciya-desc') }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--p.
                    Узнать, будет ли SEO полезна вашему бизнесу и сколько будет стоить для вас эта услуга, можно, <a href="">отправив нам заявку</a>.

                    -->
                </div>
            </div>
            <div class="block grey plain-text">
                <div class="wrapper">
                    {{ $page->block('prodvijenie-sfery-biznesa') }}
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="block plain-text">
                <div class="wrapper">
                    <h2>{{ $page->block('konkretnyy-rezult') }}</h2>
                    <div class="garanty">{{ $page->block('garantiya-grafema') }}</div>
                    <div class="info">
                        {{ $page->block('konkretnyy-rezult-desc') }}
                    </div>
                </div>
            </div>
            <div data-scrollName="applyform" class="block grey apply-cont">
          <div class="wrapper">
            <h2>Форма заявки</h2>
            <p class="sub-header">Заполните форму заявки — мы свяжемся с вами в течение двух рабочих часов.</p>
            <form id="applyform" action="json/test.json" class="apply-form">
              <div class="apply-table">
                <div class="table-row">
                  <div class="table-col">Представтесь</div>
                  <div class="table-col">
                    <input name="name" class="us-input">
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-col">Контактный телефон</div>
                  <div class="table-col">
                    <input name="" class="us-input">
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-col">Электронная почта</div>
                  <div class="table-col">
                    <input name="email" class="us-input">
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-col">Адрес вашего сайта</div>
                  <div class="table-col">
                    <input name="" class="us-input">
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-col">Выберите набор услуг</div>
                  <div class="table-col">
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-0">
                      <label for="check-0"><span>Продвижение сайта</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-1">
                      <label for="check-1"><span>Контекстная реклама</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-2">
                      <label for="check-2"><span>Рекалама в социальных сетях (SMM)</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-3">
                      <label for="check-3"><span>Медийная реклама</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-4">
                      <label for="check-4"><span>Управление репутацией, SERM</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-5">
                      <label for="check-5"><span>Продвижение мобильных приложений</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-6">
                      <label for="check-6"><span>Юзабилити</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-7">
                      <label for="check-7"><span>Копирайтинг</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-8">
                      <label for="check-8"><span>Аудит сайта</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-9">
                      <label for="check-9"><span>SEO-консалтинг</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-10">
                      <label for="check-10"><span>Не знаю, посоветуйте</span></label>
                    </div>
                    <div class="check-cont">
                      <input type="checkbox" name="service" id="check-11">
                      <label for="check-11"><span>Другое</span></label>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-col">Ваши пожелания</div>
                  <div class="table-col">
                    <textarea name="message" placeholder="Ключевые слова, сроки, способ связи с вами, регион оказания усуг и т.д." class="us-input js-auto"></textarea>
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-col">Как вы узнали о нас</div>
                  <div class="table-col">
                    <select name="howyouknow">
                      <option>Не указано</option>
                      <option>2</option>
                    </select>
                  </div>
                </div>
                <div class="table-row">
                  <div class="table-col"> </div>
                  <div class="table-col">
                    <button type="submit" class="hover-btn"><span>Оставить заявку</span></button>
                    <div class="js-response-text ajax-message"></div>
                  </div>
                </div>
              </div>
            </form>
            <p style="display: none;" class="sub-header js-final-response"></p>
          </div>
        </div>
        </div>
    </div>
    @include(Helper::layout('footer'),array('footer_class'=>''))
@stop
@section('scripts')
@stop