@extends('www.layouts.default')

@section('title', 'BLOG POST')

@section('head')

@stop

@section('content')
    <div class="container">
        <div class="row margin-vertical-50">
            <div class="col-md-3 col-md-push-9 col-sm-3 col-sm-push-9 col-xs-12">
                <div class="sys_post-recents clearfix">
                    <h3 class="sys_post-recents__title">RECENT POSTS</h3>
                    <ul class="sys_post-recents__list">
                        <li class="sys_post-recents__list__item">
                            <a class="sys_post-recents__list__item__link">
                                <p class="sys_post-recents__list__item__date">00/00/0000</p>
                                <p class="sys_post-recents__list__item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </a>
                        </li>
                        <li class="sys_post-recents__list__item">
                            <a class="sys_post-recents__list__item__link">
                                <p class="sys_post-recents__list__item__date">00/00/0000</p>
                                <p class="sys_post-recents__list__item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </a>
                        </li>
                        <li class="sys_post-recents__list__item">
                            <a class="sys_post-recents__list__item__link">
                                <p class="sys_post-recents__list__item__date">00/00/0000</p>
                                <p class="sys_post-recents__list__item__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-md-pull-3 col-sm-9 col-sm-pull-3 col-xs-12">
                <div class="sys_post clearfix">
                    <div class="sys_post__header clearfix">
                        <h4 class="sys_post__header__date">00/00/0000</h4>
                        <div class="sys_post__header__image">
                            <img class="img-responsive" src="http://www.scidev.net/objects_store/thumbnail/7904C52545E0E5D34F6E29B1FEF02E92.jpg">
                        </div>
                        <h2 class="sys_post__header__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                        <h4 class="sys_post__header__subtitle">Praesent vel quam purus venenatis at ultricies.</h4>
                    </div>
                    <div class="sys_post__body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop