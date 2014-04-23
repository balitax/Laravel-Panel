@extends('panel/layout')
  @section('content')
<section id="container" >
      
      @include('panel/menu')
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-4">
                      <!--widget start-->
                      <aside class="profile-nav alt green-border">
                          <section class="panel">
                              <div class="user-heading alt green-bg">
                                  <a href="#">
                                     <img src="<?= Gravatar::src('cahyo.mamen@gmail.com', 1024) ?>" width='1024'>
                                  </a>
                                  <h1>Agus Cahyono</h1>
                                  <p>cahyo.mamen@gmail.com</p>
                              </div>

                              <ul class="nav nav-pills nav-stacked">
                                  <li><a href="javascript:;"> <i class="icon-calendar"></i> Blogs <span class="label label-info pull-right r-activity">{{$j_blog}}</span></a></li>
                                  <li><a href="javascript:;"> <i class="icon-bell-alt"></i> Pages <span class="label label-warning pull-right r-activity">{{$j_pages}}</span></a></li>
                                  <li><a href="javascript:;"> <i class="icon-bell-alt"></i> Portofolio <span class="label label-success pull-right r-activity">{{$j_porto}}</span></a></li>
                              </ul>

                          </section>
                      </aside>
                      <!--widget end-->
                  </div>
                  
                  </div>

              <!-- page end-->
          </section>

      </section>
      <!--main content end-->
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
{{HTML::script('admin/js/jquery.js')}}
{{HTML::script('admin/js/jquery-1.8.3.min.js')}}
{{HTML::script('admin/js/bootstrap.min.js')}}
{{HTML::script('admin/js/jquery.dcjqaccordion.2.7.js')}}
{{HTML::script('admin/js/jquery.scrollTo.min.js')}}
{{HTML::script('admin/js/jquery.sparkline.js')}}
{{HTML::script('admin/js/owl.carousel.js')}}
{{HTML::script('admin/js/jquery.customSelect.min.js')}}
{{HTML::script('admin/js/respond.min.js')}}
{{HTML::script('admin/js/jquery.dcjqaccordion.2.7.js')}}
{{HTML::script('admin/js/common-scripts.js')}}
{{HTML::script('admin/js/sparkline-chart.js')}}
{{HTML::script('admin/js/easy-pie-chart.js')}}
{{HTML::script('admin/js/count.js')}}

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

@stop