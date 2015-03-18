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
                <div class="teaser">
                    {{ $page->block('main_title') }}
                </div>
            </div>
            <div class="block white col-2">
                <div class="wrapper">
                    <div class="row">
                        <div class="unit">
                            {{ $page->block('top_left_block') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('top_right_block') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block grey col-2">
                <div class="wrapper">
                    <h2>{{ $page->block('rezultaty-smm') }}</h2>
                    <div class="row">
                        <div class="unit">
                            {{ $page->block('rezultaty-smm-desc-left') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('rezultaty-smm-desc-right') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block colorize">
                {{ $page->block('medium_title_block') }}
                <p class="btn-cont"><a data-scrollTo="applyform" href="#" class="js-scrollTo hover-btn"><span>Оставить заявку</span></a></p>
            </div>
            <div class="block white col-5">
                <div class="wrapper">
                    <h2>{{ $page->block('etapy-raboty') }}</h2>
                    <div class="row">
                        <div class="unit">
                            <div class="num">1</div>
                            {{ $page->block('analitika') }}
                        </div>
                        <div class="unit">
                            <div class="num">2</div>
                            {{ $page->block('planirovanie') }}
                        </div>
                        <div class="unit">
                            <div class="num">3</div>
                            {{ $page->block('proizvodstvo') }}
                        </div>
                        <div class="unit">
                            <div class="num">4</div>
                            {{ $page->block('publikaciya') }}
                        </div>
                        <div class="unit">
                            <div class="num">5</div>
                            {{ $page->block('podderjka-brenda-v-socsetyah') }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="block grey col-3">
                <div class="wrapper">
                    <h2>{{ $page->block('doverit-smm-nam') }}</h2>
                    <div class="row">
                        <div class="unit">
                            {{ $page->block('strategiya') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('opyt') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('vnimanie') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="block plain-text">
                <div class="wrapper">
                    {{ $page->block('rabota-v-socsetyah') }}
                    <div class="teaser">
                        <div class="ico"><img src="/{{ Config::get('site.theme_path') }}/images/icons/wallet-purple.png"></div>
                        <div class="info">
                            {{ $page->block('tipichnyy-proekt-po-smm') }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    {{ $page->block('rabota-v-socsetyah-ext') }}
                </div>
            </div>
            @include(Helper::layout('apply-form'))
        </div>
    </div>
    @include(Helper::layout('footer'),array('footer_class'=>''))
@stop
@section('scripts')
@stop