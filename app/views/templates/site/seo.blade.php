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
        </div>
    </div>
    @include(Helper::layout('footer'),array('footer_class'=>''))
@stop
@section('scripts')
@stop