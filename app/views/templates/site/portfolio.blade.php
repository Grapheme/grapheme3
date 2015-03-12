<?
/**
 * TITLE: Портфолио
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */

$projects = Dictionary::valuesBySlug('jobs');
$projects = DicLib::extracts($projects, null, true, true);
$projects = DicLib::loadImages($projects, 'background');
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')
animsition
@stop
@section('content')
    @include(Helper::layout('header'),array('header_class'=>''))
    @include(Helper::layout('block-contacts'))
    <div class="main-wrapper">
        <main>
        @if($projects->count())
            <ul class="portfolio-list clearfix">
            @foreach($projects as $project)
                <li class="portfolio-item">
                    <div class="portfolio-item-cont">
                        @if(!empty($project->background))
                        <div style="background-image: url({{ asset('uploads/galleries/'.$project->background->name) }});"
                             class="portfolio-pict"></div>
                        @endif
                        <div class="portfolio-desc">
                            <h2>{{ $project->name }}</h2>

                            <div class="desc">{{ $project->slogan }}</div>
                            <a href="{{ $project->site_url }}" data-text="{{ trans("interface.job.view") }}" target="_blank" class="proj-link">{{ trans("interface.job.view") }}</a>
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
        @endif
        </main>
    </div>
    @include(Helper::layout('footer'),array('footer_class'=>''))
@stop
@section('scripts')
@stop