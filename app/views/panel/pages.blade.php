@extends('panel/layout')
  @section('content')

{{HTML::style('admin/assets/advanced-datatable/media/css/demo_page.css')}}
{{HTML::style('admin/assets/advanced-datatable/media/css/demo_table.css')}}


<section id="container" >
      
      @include('panel/menu')

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      List Pages
                  </header>
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th class="hidden-phone">View Pages</th>
                                    <th class="hidden-phone">Status</th>
                                    <th class="hidden-phone">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $p)
                                <tr class="gradeX">
                                    <td>{{$no++}}</td>
                                    <td>{{$p->title}}</td>
                                    <td class="hidden-phone"><a href="">view</a></td>
                                    <td class="center hidden-phone">{{$p->status}} </td>
                                    <td class="center hidden-phone">
                                      {{ link_to_action('PagesController@edit', 'Edit', array($p->id))}} -
                                      {{ link_to_action('PagesController@delete', 'Delete', array($p->id))}}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                  </div>
              </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      
  </section>


    <!-- js placed at the end of the document so the pages load faster -->
{{HTML::script('admin/assets/advanced-datatable/media/js/jquery.js')}}
{{HTML::script('admin/js/bootstrap.min.js')}}
{{HTML::script('admin/js/jquery.dcjqaccordion.2.7.js')}}
{{HTML::script('admin/js/jquery.scrollTo.min.js')}}
{{HTML::script('admin/js/jquery.sparkline.js')}}
{{HTML::script('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}
{{HTML::script('admin/js/respond.min.js')}}
{{HTML::script('admin/js/jquery.dcjqaccordion.2.7.js')}}
{{HTML::script('admin/js/common-scripts.js')}}

    <script type="text/javascript">
      /* Formating function for row details */
      function fnFormatDetails ( oTable, nTr )
      {
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
          sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
          sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
          sOut += '</table>';

          return sOut;
      }

      $(document).ready(function() {
          var oTable = $('#hidden-table-info').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ] }
              ],
              "aaSorting": [[1, 'asc']]
          });
      } );
  </script>
@stop