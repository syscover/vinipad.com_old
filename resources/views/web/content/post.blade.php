@extends('web.layouts.default')

@section('title', trans('web.home_meta_title'))
@section('keywords', trans('web.home_meta_keywords'))
@section('description', trans('web.home_meta_description'))

@section('head')



@endsection

@section('scripts')



@endsection

@section('content')

<div id="blog" class="vin_blog vin_blog-post container-fluid">
  <div class="vin_blog-post__header sys_solid-menu--trigger"></div>
  <div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 vin_blog__main">
                <div class="vin_posts">

                    <div class="vin_posts__item">
                        <div class="vin_posts__item__category">
                            <ul>
                                <li>
                                    <a href="">Blog</a>
                                </li>
                                <li>
                                    <a href="">Categoría</a>
                                </li>
                                <li>
                                    <span>Titulo del post</span>
                                </li>
                            </ul>
                        </div>
                        <div class="vin_posts__item__img">
                          <img class="post-img img-responsive" src="http://placehold.it/1600x900">
                        </div>
                        <div class="vin_posts__item__info">
                            <p class="vin_posts__item__info__date">Sabado 04 de Noviembre 2017</p>
                            <a class="vin_posts__item__info__title">Titulo del post</a>
                            <div class="vin_posts__item__info__text">
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="vin_posts__item__info__share">
                                <a href="" class="share-link" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="" class="share-link" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-4 vin_blog__side">
                <div class="first-post-separator hidden-xs"></div>
                <div class="vin_blog__side__lower">
                    <div class="vin_blog__side__search">
                        <form>
                          <div class="form-group">
                            <label for="blogSearch" class="control-label">Buscar en el Blog</label>
                            <input type="text" class="form-control" name="blogSearch" placeholder="Categoría, título, fecha ...">
                          </div>
                        </form>
                    </div>
                    <div class="vin_blog__side__link">
                        <p class="vin_blog__side__title">Lorem ipsum</p>
                        <p class="vin_blog__side__sub">dolor sit amet</p>
                        <a href="" target="_blank" class="btn">Lorem ipsum dolor sit amet</a>
                    </div>
                    <div class="vin_blog__side__img">
                        <a href="">
                            <img src="http://placehold.it/360x250" alt="">
                        </a>
                    </div>
                    <div class="vin_blog__side__categories">
                      <p class="vin_blog__side__title">Lorem ipsum</p>
                      <p class="vin_blog__side__sub">dolor sit amet</p>
                        <ul class="vin_blog__side__categories__list">
                          <li>
                              <a href="">
                                  <div class="category-icon">
                                      <img src="{{ asset('images/blog/data.svg') }}" alt="">
                                  </div>
                                  <p>Category 1</p>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <div class="category-icon">
                                      <img src="{{ asset('images/blog/config.svg') }}" alt="">
                                  </div>
                                  <p>Category 2</p>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <div class="category-icon">
                                      <img src="{{ asset('images/blog/stock.svg') }}" alt="">
                                  </div>
                                  <p>Category 3</p>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <div class="category-icon">
                                      <img src="{{ asset('images/blog/other.svg') }}" alt="">
                                  </div>
                                  <p>Category 4</p>
                              </a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


@endsection
