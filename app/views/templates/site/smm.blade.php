<?
/**
 * TITLE: SMM
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
        <div class="smm">
            <div class="top-caption">
                <div class="bar"></div>
                <div class="teaser wow fadeInUp">
                    {{ $page->block('main_title') }}
                </div>
            </div>
            <div class="block white col-2">
                <div class="wrapper">
                    <div class="row">
                        <div class="unit wow fadeInUp">
                            {{ $page->block('top_left_block') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit wow fadeInUp">
                            {{ $page->block('top_right_block') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block grey col-2">
                <div class="wrapper">
                    <h2 class="wow fadeIn">{{ $page->block('rezultaty-smm') }}</h2>
                    <div class="row">
                        <div class="unit wow fadeInUp">
                            {{ $page->block('rezultaty-smm-desc-left') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit wow fadeInUp">
                            {{ $page->block('rezultaty-smm-desc-right') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block colorize">
                <div class="wow fadeIn">{{ $page->block('medium_title_block') }}</div>
                <p class="btn-cont wow fadeInUp"><a data-scrollTo="applyform" href="#" class="js-scrollTo hover-btn"><span>Оставить заявку</span></a></p>
            </div>
            <div class="block white col-5">
                <div class="wrapper">
                    <h2 class="wow fadeIn">{{ $page->block('etapy-raboty') }}</h2>
                    <div class="row">
                        <div class="unit wow fadeInUp">
                            <div class="num">1</div>
                            {{ $page->block('analitika') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit wow fadeInUp">
                            <div class="num">2</div>
                            {{ $page->block('planirovanie') }}
                        </div>
                        <div data-wow-delay="0.3s" class="unit wow fadeInUp">
                            <div class="num">3</div>
                            {{ $page->block('proizvodstvo') }}
                        </div>
                        <div data-wow-delay="0.45s" class="unit wow fadeInUp">
                            <div class="num">4</div>
                            {{ $page->block('publikaciya') }}
                        </div>
                        <div data-wow-delay="0.6s" class="unit wow fadeInUp">
                            <div class="num">5</div>
                            {{ $page->block('podderjka-brenda-v-socsetyah') }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="block grey col-3">
                <div class="wrapper">
                    <h2 class="wow fadeInUp">{{ $page->block('doverit-smm-nam') }}</h2>
                    <div class="row">
                        <div class="unit wow fadeInUp">
                            {{ $page->block('strategiya') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit wow fadeInUp">
                            {{ $page->block('opyt') }}
                        </div>
                        <div data-wow-delay="0.3s" class="unit wow fadeInUp">
                            {{ $page->block('vnimanie') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="block plain-text">
                <div class="wrapper">
                    <div class="wow fadeInUp">{{ $page->block('rabota-v-socsetyah') }}</div>
                    <div class="teaser wow fadeInUp">
                        <div class="ico"><img src="/{{ Config::get('site.theme_path') }}/images/icons/wallet-purple.png"></div>
                        <div class="info">
                            {{ $page->block('tipichnyy-proekt-po-smm') }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="wow fadeInUp">{{ $page->block('rabota-v-socsetyah-ext') }}</div>
                </div>
            </div>
            @include(Helper::layout('forms.apply-form'))
        </div>
    </div>
    @include(Helper::layout('footer'),array('footer_class'=>''))
@stop
@section('scripts')
@stop