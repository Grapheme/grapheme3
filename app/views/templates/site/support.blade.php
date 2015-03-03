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
            <div class="block grey col-2 bordered">
                <div class="wrapper">
                    {{ $page->block('medium_title_block') }}
                    <div class="row">
                        <div class="unit">
                            {{ $page->block('medium_first_block') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('medium_second_block') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('medium_third_block') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('medium_four_block') }}
                        </div>
                        <div class="clrfx"></div>
                    </div>
                </div>
            </div>
            <div class="block colorize">
                {{ $page->block('self-confidence') }}
            </div>
            <div class="block white col-3">
                <div class="wrapper">
                    <h2>{{ $page->block('bottom_title_block') }}</h2>
                    <div class="row">
                        <div class="unit">
                            {{ $page->block('bottom_first_block') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('bottom_second_block') }}
                        </div>
                        <div class="unit">
                            {{ $page->block('bottom_third_block') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include(Helper::layout('footer'),array('footer_class'=>''))
@stop
@section('scripts')
@stop