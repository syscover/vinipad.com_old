@extends('www.layouts.default')

@section('title', 'BLOQUES')

@section('head')

@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="sys_page-header sys_inner-container clearfix">
                <div class="sys_bg-img-wrapper">
                    <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                    <img src="http://xenlife.com.au/wp-content/uploads/lego.jpg" class="sys_bg-img-wrapper__bg-img">
                </div>
                <h3 class="sys_page-header__breadcrumbs">
                    <a href="{{ route('web.home') }}" class="sys_white-text sys_lightgrey-text-hover">Home</a>
                    <span class="sys_page-header__breadcrumbs__separator sys_white-text">/</span>
                    <span class="sys_white-text">Blocks</span>
                </h3>
                <h1 class="sys_page-header__title sys_white-text">Blocks</h1>
                <h2 class="sys_page-header__subtitle">
                    <span class="sys_page-header__subtitle__icon">
                        <i class="material-icons sys_icon sys_icon--large sys_white-text">dashboard</i>
                    </span>
                    <span class="sys_page-header__subtitle__main sys_white-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br class="hidden-xs">Praesent vel quam purus venenatis at ultricies.
                    </span>
                    <span class="sys_page-header__subtitle__sub sys_lightgrey-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br class="hidden-xs">Praesent vel quam purus venenatis at ultricies.
                    </span>
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row margin-vertical-50">
            <div class="col-md-12 margin-top-30">
                <h2>Buttons</h2>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Normal</h4>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--small">Lorem ipsum</a> (Small)
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button">Lorem ipsum</a> (Medium)
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--large">Lorem ipsum</a> (Large)
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Ghost button</h4>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--small sys_button--ghost">Lorem ipsum</a>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--ghost">Lorem ipsum</a>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--large sys_button--ghost">Lorem ipsum</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Solid button</h4>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--small sys_button--solid">Lorem ipsum</a>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--solid">Lorem ipsum</a>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--large sys_button--solid">Lorem ipsum</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Coloured buttons</h4>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--small sys_button--blue">Lorem ipsum</a>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--ghost sys_button--red">Lorem ipsum</a>
                    </div>
                    <div class="col-md-12 margin-vertical-5">
                        <a class="sys_button sys_button--large sys_button--solid sys_button--mauve">Lorem ipsum</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <h2>'&lt;hr&gt;' divider</h2>
                    </div>
                    <div class="col-md-6">
                        <h4>Thickness</h4>
                        <hr class="sys_hr sys_hr--five">
                        <hr class="sys_hr sys_hr--four">
                        <hr class="sys_hr sys_hr--three">
                        <hr class="sys_hr sys_hr--two">
                        <hr class="sys_hr">
                    </div>
                    <div class="col-md-6">
                        <h4>Styles</h4>
                        <hr class="sys_hr sys_hr--four sys_hr--dashed">
                        <hr class="sys_hr sys_hr--four sys_hr--dotted">
                        <hr class="sys_hr sys_hr--four sys_hr--double">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <h2>Forms</h2>
                    </div>
                    <div class="col-md-6">
                        <h4>Inputs</h4>
                        <input class="sys_form__input sys_form__input--small margin-vertical-5" placeholder="Input small"><br>
                        <input class="sys_form__input margin-vertical-5" placeholder="Input medium"><br>
                        <input class="sys_form__input sys_form__input--large margin-vertical-5" placeholder="Input large">
                    </div>
                    <div class="col-md-6">
                        <h4>Selects</h4>
                        <div class="sys_form__styled-select margin-top-5 margin-bottom-10">
                            <select class="sys_form__styled-select__select sys_form__styled-select__select--small">
                                <option>Select small</option>
                            </select>
                            <div class="sys_form__styled-select__icon">
                                <i class="fa fa-chevron-up"></i>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="sys_form__styled-select margin-top-5 margin-bottom-10">
                            <select class="sys_form__styled-select__select">
                                <option>Select medium</option>
                            </select>
                            <div class="sys_form__styled-select__icon">
                                <i class="fa fa-chevron-up"></i>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                        <div class="sys_form__styled-select margin-top-5 margin-bottom-10">
                            <select class="sys_form__styled-select__select sys_form__styled-select__select--large">
                                <option>Select large</option>
                            </select>
                            <div class="sys_form__styled-select__icon">
                                <i class="fa fa-chevron-up"></i>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Checkbox</h4>
                        <div class="checkbox sys_form__checkbox">
                            <label>
                                <input type="checkbox"> Checkbox example
                            </label>
                        </div>
                        <div class="checkbox sys_form__checkbox">
                            <label>
                                <input type="checkbox"> Checkbox example
                            </label>
                        </div>
                        <div class="checkbox sys_form__checkbox">
                            <label>
                                <input type="checkbox"> Checkbox example
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Radio button</h4>
                        <div class="radio sys_form__radio">
                            <label>
                                <input type="radio" name="exampleRadio"> Radio button example
                            </label>
                        </div>
                        <div class="radio sys_form__radio">
                            <label>
                                <input type="radio" name="exampleRadio"> Radio button example
                            </label>
                        </div>
                        <div class="radio sys_form__radio">
                            <label>
                                <input type="radio" name="exampleRadio"> Radio button example
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <h2>Icons</h2>
                    </div>
                    <div class="col-md-4">
                        <h4>Icon small</h4>
                        <i class="material-icons sys_icon sys_nopadding">favorite</i>
                        <h4>Icon medium</h4>
                        <i class="material-icons sys_icon sys_icon--medium sys_nopadding">favorite</i>
                        <h4>Icon large</h4>
                        <i class="material-icons sys_icon sys_icon--large sys_nopadding">favorite</i>
                    </div>
                    <div class="col-md-4">
                        <h4>Icon red</h4>
                        <i class="material-icons sys_icon sys_icon--medium sys_red-text">favorite</i>
                        <h4>Icon blue</h4>
                        <i class="material-icons sys_icon sys_icon--medium sys_blue-text">favorite</i>
                        <h4>Icon mauve</h4>
                        <i class="material-icons sys_icon sys_icon--medium sys_mauve-text">favorite</i>
                    </div>
                    <div class="col-md-4">
                        <h4>Border styles</h4>
                        <i class="material-icons sys_icon sys_icon--medium sys_bordered sys_bordered--four sys_bordered--rounded margin-15">favorite</i>
                        <i class="material-icons sys_icon sys_icon--medium sys_bordered sys_bordered--four sys_bordered--dashed sys_bordered--rounded margin-15">favorite</i><br>
                        <i class="material-icons sys_icon sys_icon--medium sys_bordered sys_bordered--four sys_bordered--dotted sys_bordered--rounded margin-15">favorite</i>
                        <i class="material-icons sys_icon sys_icon--medium sys_bordered sys_bordered--four sys_bordered--double sys_bordered--rounded margin-15">favorite</i>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <h2>Lists</h2>
                    </div>
                    <div class="col-md-6">
                        <h4>Unordered list</h4>
                        <ul class="sys_list">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>Ordered list</h4>
                        <ol class="sys_list">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <h4>Unordered half-list</h4>
                        <ul class="sys_list sys_list--half-list clearfix">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>Ordered half-list</h4>
                        <ol class="sys_list sys_list--half-list clearfix">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <h4>No-style list</h4>
                        <ul class="sys_list sys_list--no-style">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>No-style half-list</h4>
                        <ul class="sys_list sys_list--no-style sys_list--half-list">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <h2>Modal</h2>
                    </div>
                    <div class="col-md-12">
                        <a class="sys_button" data-toggle="modal" data-target="#sampleModal">Open Modal</a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade sys_modal" id="sampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <h4>Modal body</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <a class="sys_button sys_button--small" data-dismiss="modal">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <h2>Tabs</h2>
                    </div>
                    <div class="col-md-6">
                        <h4 class="margin-vertical-15">Left Tabs</h4>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs sys_nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab1" aria-controls="personal" role="tab" data-toggle="tab">Tab 1</a></li>
                            <li role="presentation"><a href="#tab2" aria-controls="history" role="tab" data-toggle="tab">Tab 2</a></li>
                            <li role="presentation"><a href="#tab3" aria-controls="history" role="tab" data-toggle="tab">Tab 3</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active padding-15" id="tab1">Tab 1 content</div>
                            <div role="tabpanel" class="tab-pane fade in padding-15" id="tab2">Tab 2 content</div>
                            <div role="tabpanel" class="tab-pane fade in padding-15" id="tab3">Tab 3 content</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="margin-vertical-15">Right Tabs</h4>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs sys_nav-tabs sys_nav-tabs--right" role="tablist">
                            <li role="presentation" class="active"><a href="#tab1l" aria-controls="personal" role="tab" data-toggle="tab">Tab 1</a></li>
                            <li role="presentation"><a href="#tab2l" aria-controls="history" role="tab" data-toggle="tab">Tab 2</a></li>
                            <li role="presentation"><a href="#tab3l" aria-controls="history" role="tab" data-toggle="tab">Tab 3</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active padding-15" id="tab1l">Tab 1 content</div>
                            <div role="tabpanel" class="tab-pane fade in padding-15" id="tab2l">Tab 2 content</div>
                            <div role="tabpanel" class="tab-pane fade in padding-15" id="tab3l">Tab 3 content</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="margin-vertical-15">Center Tabs</h4>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs sys_nav-tabs sys_nav-tabs--center" role="tablist">
                            <li role="presentation" class="active"><a href="#tab1c" aria-controls="personal" role="tab" data-toggle="tab">Tab 1</a></li>
                            <li role="presentation"><a href="#tab2c" aria-controls="history" role="tab" data-toggle="tab">Tab 2</a></li>
                            <li role="presentation"><a href="#tab3c" aria-controls="history" role="tab" data-toggle="tab">Tab 3</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active padding-15" id="tab1c">Tab 1 content</div>
                            <div role="tabpanel" class="tab-pane fade in padding-15" id="tab2c">Tab 2 content</div>
                            <div role="tabpanel" class="tab-pane fade in padding-15" id="tab3c">Tab 3 content</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <h2>Tooltips</h2>
                    </div>
                    <div class="col-md-6 margin-vertical-20">
                        <span class="sys_tooltip" data-sys-tooltip="Top tooltip message!">
                            Top tooltip trigger!
                        </span>
                    </div>
                    <div class="col-md-6 margin-vertical-20">
                        <span class="sys_tooltip sys_tooltip--bottom" data-sys-tooltip="Bottom tooltip message!">
                            Bottom tooltip trigger!
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 margin-top-30">
                        <h2>Panels</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="sys_panel clearfix">
                            <div class="sys_panel__header clearfix">
                                <h3 class="sys_nomargin">Header title</h3>
                            </div>
                            <div class="sys_panel__body">
                                <div class="sys_panel__body__image clearfix">
                                    <img src="http://all4desktop.com/data_images/original/4241904-paradise.jpg" class="img-responsive">
                                </div>
                                <div class="sys_panel__body__content clearfix">
                                    <h3>Content title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.</p>
                                </div>
                            </div>
                            <div class="sys_panel__footer clearfix">
                                <a class="sys_button sys_button--small sys_floatright">Footer action</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sys_panel clearfix">
                            <div class="sys_panel__body">
                                <div class="sys_panel__body__image clearfix">
                                    <img src="http://all4desktop.com/data_images/original/4241904-paradise.jpg" class="img-responsive">
                                </div>
                                <div class="sys_panel__body__content clearfix">
                                    <h3>Content title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.</p>
                                </div>
                            </div>
                            <div class="sys_panel__footer clearfix">
                                <a class="sys_button sys_button--small sys_floatright">Footer action</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sys_panel clearfix">
                            <div class="sys_panel__header clearfix">
                                <h3 class="sys_nomargin">Header title</h3>
                            </div>
                            <div class="sys_panel__body">
                                <div class="sys_panel__body__image clearfix">
                                    <img src="http://all4desktop.com/data_images/original/4241904-paradise.jpg" class="img-responsive">
                                </div>
                                <div class="sys_panel__body__content clearfix">
                                    <h3>Content title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-4">
                        <div class="sys_panel clearfix">
                            <div class="sys_panel__body">
                                <div class="sys_panel__body__image clearfix">
                                    <img src="http://all4desktop.com/data_images/original/4241904-paradise.jpg" class="img-responsive">
                                </div>
                                <div class="sys_panel__body__content clearfix">
                                    <h3>Content title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sys_panel clearfix">
                            <div class="sys_panel__header clearfix">
                                <h3 class="sys_nomargin">Header title</h3>
                            </div>
                            <div class="sys_panel__body">
                                <div class="sys_panel__body__content clearfix">
                                    <h3>Content title</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel quam purus. Donec venenatis congue tortor at ultricies. Ut convallis, ex vel rutrum rhoncus, sapien est posuere nisi, et mollis dolor mauris tristique libero. Ut nec urna non justo condimentum imperdiet. Nulla rutrum commodo arcu sit amet euismod. Proin vel ex mauris. Fusce suscipit facilisis dictum. Nam vitae nibh diam. Nullam et varius odio. Nunc non ante eros. Mauris quis rhoncus ante. Etiam egestas quam eget hendrerit luctus. Curabitur nec nulla id tortor facilisis lobortis.</p>
                                </div>
                            </div>
                            <div class="sys_panel__footer clearfix">
                                <a class="sys_button sys_button--small sys_floatright">Footer action</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sys_panel clearfix">
                            <div class="sys_panel__header clearfix">
                                <h3 class="sys_nomargin">Header title</h3>
                            </div>
                            <div class="sys_panel__body">
                                <div class="sys_panel__body__image clearfix">
                                    <img src="http://all4desktop.com/data_images/original/4241904-paradise.jpg" class="img-responsive">
                                </div>
                            </div>
                            <div class="sys_panel__footer clearfix">
                                <a class="sys_button sys_button--small sys_floatright">Footer action</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

