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
                <div class="teaser wow fadeInUp">
                    {{ $page->block('main_title') }}
                </div>
            </div>
            <div class="block white col-3">
                <div class="wrapper">
                    {{ $page->block('result-seo-title') }}
                    <div class="row">
                        <div class="unit wow fadeInUp">
                            {{ $page->block('povyshenie-konversii') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit wow fadeInUp">
                            {{ $page->block('privlechenie-posetiteley') }}
                        </div>
                        <div data-wow-delay="0.3s" class="unit wow fadeInUp">
                            {{ $page->block('uluchshenie-raboty-sayta-i-otdela-prodaj') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="block grey col-2 bordered">
                <div class="wrapper wow fadeIn">
                    <h2>{{ $page->block('zakaz-seo-u-nas') }}</h2>
                    <div class="row">
                        <div class="unit wow fadeInUp">
                            {{ $page->block('dumaem') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit wow fadeInUp">
                            {{ $page->block('tochno-znaem-chto-neobhodimo') }}
                        </div>
                        <div data-wow-delay="0.3s" class="unit wow fadeInUp">
                            {{ $page->block('cenim-vremya') }}
                        </div>
                        <div data-wow-delay="0.45s" class="unit wow fadeInUp">
                            {{ $page->block('podderjivaem') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block colorize">
                <div class="wow fadeIn">{{ $page->block('prodvijenie-uje-segodnya') }}</div>
                <p class="btn-cont wow fadeInUp"><a href="#" data-scrollTo="applyform" class="hover-btn"><span>Оставить заявку</span></a></p>
            </div>
            <div class="block plain-text">
                <div class="wrapper">
                    <div class="wow fadeIn">{{ $page->block('stoit-optimizaciya') }}</div>
                    <div class="teaser wow fadeInUp">
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
                    <div class="wow fadeIn">{{ $page->block('prodvijenie-sfery-biznesa') }}</div>
                    <div class="seo-apply wow fadeInUp">
                        <div class="apply-title">Заполните заявку и получите комплексный аудит.</div>
                        @include(Helper::layout('forms.apply-seo-form'))
                        <p style="display: none;" class="js-final-response"></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="block plain-text">
                <div class="wrapper">
                    <h2 class="wow fadeIn">{{ $page->block('konkretnyy-rezult') }}</h2>
                    <div class="garanty wow fadeInUp">{{ $page->block('garantiya-grafema') }}</div>
                    <div class="info wow fadeInUp">
                        {{ $page->block('konkretnyy-rezult-desc') }}
                    </div>
                </div>
            </div>
            @include(Helper::layout('forms.apply-form'))
        </div>
    </div>
    @include(Helper::layout('footer'),array('footer_class'=>''))
@stop
@section('scripts')
@stop