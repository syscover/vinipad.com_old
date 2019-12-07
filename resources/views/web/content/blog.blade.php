@extends('web.layouts.default')

@section('title', trans('web.home_meta_title'))
@section('keywords', trans('web.home_meta_keywords'))
@section('description', trans('web.home_meta_description'))

@section('head')



@endsection

@section('scripts')



@endsection

@section('content')

<div id="blog" class="vin_blog container-fluid">
    <div class="row">
        <div class="sys_page-header sys_inner-container clearfix sys_solid-menu--trigger">
            <div class="sys_bg-img-wrapper">
                <div class="sys_bg-img-wrapper__bg-overlay sys_overlayBlack"></div>
                <img src="{{ asset('images/contact-header.jpg') }}" class="sys_bg-img-wrapper__bg-img">
            </div>
            <h1 class="sys_page-header__title sys_white-text">BLOG</h1>
            <h2 class="sys_page-header__subtitle">
                <span class="sys_page-header__subtitle__main vin_white-text">
                    Lorem ipsum dolor sit amet,
                </span>
                <span class="sys_page-header__subtitle__sub vin_white-text">
                    consectetur adipisicing elit.
                </span>
            </h2>
        </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 vin_blog__main">
                <div class="vin_posts">

                    <div class="vin_posts__item">
                        <div class="vin_posts__item__img">
                            <a href="">
                                <img class="img-responsive" src="http://placehold.it/1600x900" alt="">
                            </a>
                        </div>
                        <div class="vin_posts__item__info">
                          <p class="vin_posts__item__info__date">Sabado 04 de Noviembre</p>
                          <a class="vin_posts__item__info__title">Título del post</a>
                          <div class="vin_posts__item__info__text">Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit.</strong> Aliquam at consectetur consequatur cupiditate doloremque eaque, eum exercitationem illum in, iusto laudantium minima natus, nulla perferendis provident quasi quis quisquam sint.</div>
                          <a class="vin_posts__item__info__link">leer más</a>
                          <div class="vin_posts__item__info__share">
                              <a href="" class="share-link" target="_blank"><i class="fa fa-facebook"></i></a>
                              <a href="" class="share-link" target="_blank"><i class="fa fa-twitter"></i></a>
                          </div>
                        </div>
                    </div>
                    <div class="vin_posts__item">
                        <div class="vin_posts__item__img">
                            <a href="">
                                <img class="img-responsive" src="http://placehold.it/1600x900" alt="">
                            </a>
                        </div>
                        <div class="vin_posts__item__info">
                          <p class="vin_posts__item__info__date">Sabado 04 de Noviembre</p>
                          <a class="vin_posts__item__info__title">Título del post</a>
                          <div class="vin_posts__item__info__text">Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit.</strong> Aliquam at consectetur consequatur cupiditate doloremque eaque, eum exercitationem illum in, iusto laudantium minima natus, nulla perferendis provident quasi quis quisquam sint.</div>
                          <a class="vin_posts__item__info__link">leer más</a>
                          <div class="vin_posts__item__info__share">
                              <a href="" class="share-link" target="_blank"><i class="fa fa-facebook"></i></a>
                              <a href="" class="share-link" target="_blank"><i class="fa fa-twitter"></i></a>
                          </div>
                        </div>
                    </div>
                    <div class="vin_posts__item">
                        <div class="vin_posts__item__img">
                            <a href="">
                                <img class="img-responsive" src="http://placehold.it/1600x900" alt="">
                            </a>
                        </div>
                        <div class="vin_posts__item__info">
                          <p class="vin_posts__item__info__date">Sabado 04 de Noviembre</p>
                          <a class="vin_posts__item__info__title">Título del post</a>
                          <div class="vin_posts__item__info__text">Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit.</strong> Aliquam at consectetur consequatur cupiditate doloremque eaque, eum exercitationem illum in, iusto laudantium minima natus, nulla perferendis provident quasi quis quisquam sint.</div>
                          <a class="vin_posts__item__info__link">leer más</a>
                          <div class="vin_posts__item__info__share">
                              <a href="" class="share-link" target="_blank"><i class="fa fa-facebook"></i></a>
                              <a href="" class="share-link" target="_blank"><i class="fa fa-twitter"></i></a>
                          </div>
                        </div>
                    </div>

                </div>
                <div class="vin_blog__main__pagination">
                    <ul class="vin_blog__main__pagination__list">
                        <li>
                            <a class="vin_blog__main__pagination__list__page vin_blog__main__pagination__list__page--first"><i class="fa fa-angle-double-left"></i></a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page vin_blog__main__pagination__list__page--prev"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page vin_blog__main__pagination__list__page--active">1</a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page">2</a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page">3</a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page">4</a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page">...</a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page">12</a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page vin_blog__main__pagination__list__page--next"><i class="fa fa-angle-right"></i></a>
                        </li>
                        <li>
                            <a class="vin_blog__main__pagination__list__page vin_blog__main__pagination__list__page--last"><i class="fa fa-angle-double-right"></i></a>
                        </li>
                    </ul>
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
