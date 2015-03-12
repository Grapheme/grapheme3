<?
/**
 * TITLE: Агенство
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')
animsition about-page
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
        </div>
        <div class="block white col-2">
            <div class="wrapper">
                <div class="row">
                    <div data-wow-delay="0.25s" class="unit wow fadeInUp">
                        <div class="p">
                            {{ $page->block('top_left_block') }}
                        </div>
                    </div>
                    <div data-wow-delay="0.5s" class="unit wow fadeInUp">
                        <div class="p">
                            {{ $page->block('top_right_block') }}
                        </div>
                    </div>
                    <div class="clrfx"></div>
                </div>
            </div>
        </div>
        <div class="block grey col-3 bordered about">
            <div class="wrapper">
                <h2 class="wow fadeInUp">{{ $page->block('medium_title_block') }}</h2>
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
                </div>
            </div>
        </div>
        <div class="block prods-wrapper">
            <div class="wrapper prod">
            <?php
                $capabilities = Dictionary::valuesBySlug('capabilities');
                $capabilities = DicLib::extracts($capabilities, null, true, true);
                $capabilities = DicLib::loadImages($capabilities, 'background');
            ?>
                @if($capabilities->count())
                <ul class="row prods-ul clearfix">
                    @foreach($capabilities as $capability)
                    <li class="prods-li unit wow fadeInUp">
                        <div class="prod-li-pict wow zoomIn" style="background-image: url({{ asset('uploads/galleries/'.$capability->background->name) }});"></div>
                        <div class="prod-li-cont">
                            <h4 data-wow-delay=".2s" class="prod-li-name wow fadeInDown">{{ $capability->title }}</h4>
                            <div class="prod-li-desc">{{ $capability->description }}</div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
        <div class="block white col-2">
            <div class="wrapper partners">
                <h2 class="wow fadeInUp">{{ $page->block('partners_title_block') }}</h2>
                <div class="row">
                    <div data-wow-delay="0.25s" class="unit wow fadeInUp">
                        {{ $page->block('partners_description_block') }}
                    </div>
                    <?php
                    $partners = Dictionary::valuesBySlug('partners');
                    $partners = DicLib::extracts($partners, null, true, true);
                    $partners = DicLib::loadImages($partners, 'background');
                    ?>
                    <div data-wow-delay="0.5s" class="unit wow fadeInUp">
                    @if($partners->count())
                        <ul class="partners-ul">
                        @foreach($partners as $partner)
                            <li data-wow-delay=".5s" class="partners-li wow fadeInUp"><a href="{{ $partner->site_url }}"><img src="{{ asset('uploads/galleries/'.$partner->background->name) }}"></a></li>
                        @endforeach
                        </ul>
                    @endif
                    </div>
                    <div class="clrfx"></div>
                </div>
            </div>
        </div>
        <div class="block grey col-3 bordered clients">
            <div class="wrapper wow fadeInUp">
                <h2>{{ $page->block('clients_title_block') }}</h2>
                <?php
                $clients = Dictionary::valuesBySlug('clients');
                $clients = DicLib::extracts($clients, null, true, true);
                $clients = DicLib::loadImages($clients, 'background');
                ?>
                @if($clients->count())
                <ul class="row clients-ul clearfix">
                    @foreach($clients as $client)
                    <li data-wow-delay=".2s" title="{{ $client->title }}" class="clients-li wow fadeIn" style="background-image: url({{ asset('uploads/galleries/'.$client->background->name) }});"></li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
    @include(Helper::layout('footer'),array('footer_class'=>''))
@stop
@section('scripts')
@stop