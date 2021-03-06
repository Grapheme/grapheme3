<?
/**
 * TITLE: Поддержка
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
        <div class="support">
            <div class="top-caption">
                <div class="bar"></div>
                <div class="teaser wow fadeInUp">
                    {{ $page->block('main_title') }}
                </div>
            </div>
            <div class="block white col-2 wow fadeInUp">
                <div class="wrapper">
                    <div class="row">
                        <div class="unit">
                            {{ $page->block('top_left_block') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit">
                            {{ $page->block('top_right_block') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block grey col-2 bordered">
                <div class="wrapper">
                    <div class="wow fadeIn">
                        {{ $page->block('medium_title_block') }}
                    </div>
                    <div class="row">
                        <div class="unit wow fadeInUp">
                            {{ $page->block('medium_first_block') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit wow fadeInUp">
                            {{ $page->block('medium_second_block') }}
                        </div>
                        <div data-wow-delay="0.3s" class="unit wow fadeInUp">
                            {{ $page->block('medium_third_block') }}
                        </div>
                        <div data-wow-delay="0.45s" class="unit wow fadeInUp">
                            {{ $page->block('medium_four_block') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block colorize">
                <div class="wow fadeIn">
                    {{ $page->block('self-confidence') }}
                </div>
                <p class="btn-cont wow fadeInUp"><a data-scrollTo="applyform" href="#" class="js-scrollTo hover-btn"><span>Оставить заявку</span></a></p>
            </div>
            <div class="block white col-3">
                <div class="wrapper">
                    <h2 class="wow fadeIn">{{ $page->block('bottom_title_block') }}</h2>
                    <div class="row">
                        <div class="unit wow fadeInUp">
                            {{ $page->block('bottom_first_block') }}
                        </div>
                        <div data-wow-delay="0.15s" class="unit wow fadeInUp">
                            {{ $page->block('bottom_second_block') }}
                        </div>
                        <div data-wow-delay="0.3s" class="unit wow fadeInUp">
                            {{ $page->block('bottom_third_block') }}
                        </div>
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