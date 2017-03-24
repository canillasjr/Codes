<?php
/*
  Template Name:  Add Score Board
*/

  include(dirname(__FILE__).'/php/functions/postFunction.php');
?>

<?php get_header(); ?>


<style>

.table > thead > tr > th {
    text-align: center;
    vertical-align: middle;
}
td {
    text-align: center;
    padding:1em 0;
    font-weight:bold;
}
thead {
  background: #cccccc;
  color: black;
}
th {
  padding:1em 0;
  font-weight:bold;
}
tr {
  border-bottom: 1px solid #D1D3D4
}
#coursedate tr:hover {
    background: #f1f1f1;
    cursor: pointer;
}

.dataTables_filter, .dataTables_info { display: none; }
table.dataTable tr.odd td.sorting_1 {
    background-color: transparent !important;
}
table.dataTable tr.even td.sorting_1 {
    background-color: transparent !important;
}
table.dataTable thead th {
    padding: 15px 0px 15px 10px !important;
    cursor: pointer;
}
table.dataTable tr.odd {
    background-color: #ffffff !important;
}

div#DataTables_Table_0_length {
    padding:0 0 1em 0;
}
div#DataTables_Table_0_paginate {
    padding-top: 1em;
}

/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.8) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.7) 0 1.5em 0 0, rgba(0, 0, 0, 0.6) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.4) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.3) 0 -1.5em 0 0, rgba(0, 0, 0, 0.25) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.8) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.7) 0 1.5em 0 0, rgba(0, 0, 0, 0.6) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.4) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.3) 0 -1.5em 0 0, rgba(0, 0, 0, 0.25) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>

<div class="col-md-12  text-center" style="padding:5em 0">
  <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_score.png" style="margin: 0 auto;">
  <h1 style="font-size: 50px;">Score Cards</h1>
</div>

<div class="padding2 container" style="padding:5em 0">
  <div class="col-sm-12 clearfix">
    <div class="" id="coursedate">
      <div class="pull-right search_in">
      <label> Filter by: </label>
        <input id="search" type="text" name="search_type" value="" class="search_init" placeholder="Course"/>
      <label> and </label>
        <input id="search" type="text" name="search_date" value="" class="search_init" placeholder="Date"/>
      </div>
      <br><br>
      <table style="border-collapse: collapse;" class="liveFilterList">
      <thead>
        <tr style="background: #cccccc;">
          <th class="text-center" >Course</th>
          <th class="text-center" >Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $user = wp_get_current_user();
        $all_meta_for_user = get_user_meta( $user->ID );
        $all_meta_for_user['firt_name'][0];
        $all_meta_for_user['last_name'][0];
        $score = dbquery(
          ' score_card',
          ' course,date',
           'group by course,date'
          );
           $score_data = json_decode($score);

          foreach ($score_data as $key => $value) {
        ?>
            <tr class="table">
                <td><?php echo $value->course ?></td>
                <td style="padding:1em 0;font-weight:bold;"><?php echo $value->date ?></td>
            </tr>
        <?php
          }
        ?>
      </tbody>
      </table>
    </div>
    <div class="table-responsive" id="responsecontainer">
    <div class="loading" style="display:none;">Loading&#8230;</div>
      <button id="back" style="display:none;width: 100px;" class="leave-reply"> Back </button>
      <a href="#" id="bt" style="display:none;float: right;text-decoration:none" class="leave-reply"><button class="leave-reply"> Export CSV </button></a>
      <br><br>

    </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">

<script>
  var $_course = "";
  var $_date = "";

  $("tr.table").click(function() {
      $("#coursedate").hide();
      $("#bt, #back , .loading").show();

      var tableData = $(this).children("td").map(function() {
          return $(this).text();
      }).get();

      // console.log("Your data is: " + $.trim(tableData[0]) + " , " + $.trim(tableData[1]));
      $_course =  $.trim(tableData[0]);
      $_date =  $.trim(tableData[1]);

    $.ajax({
        type: 'POST',
        url:'http://www.timberpointmensclub.com/timberpoint/wp-content/themes/undiscovered/php/functions/preFunction.php?function=view',
        data: {
            'course': $.trim(tableData[0]),
            'date': $.trim(tableData[1]),
        },
        success: function(data) {
            $(".loading").hide();
            $("#responsecontainer").append(data);
        }
    });
  });
  $("button#back").click(function() {
    $("#bt, #back").hide();
    $("#coursedate").show();
    $(".responseview").remove();
  
  });

  $(document).ready(function () {


      oTable = $('.liveFilterList').dataTable( {

      });

        $("input#search").keyup( function () {
          /* Filter on the column (the index) of this element */
          oTable.fnFilter( this.value, $("input#search").index(this) );
      } );

       /*
       * Support functions to provide a little bit of 'user friendlyness' to the textboxes in
       * the footer
       */
      $("input#search").each( function (i) {
          asInitVals[i] = this.value;
      } );

      $("input#search").focus( function () {
          if ( this.className == "search_init" )
          {
              this.className = "";
              this.value = "";
          }
      } );

      $("input#search").blur( function (i) {
          if ( this.value == "" )
          {
              this.className = "search_init";
              this.value = asInitVals[$("input#search").index(this)];
          }
      } );
  });
  
  $arr = new Array();
  $c = 0;

  $("#bt").on('click', function (event) {
    $('#responsecontainer table').each(function(){
      $c++;

      if( $c === 1 ){
        $arr = '#'+this.id;
      }else{
        $arr += ', #'+this.id;
      }
    });
       exportTableToCSV.apply(this, [$($arr), $_course+'-'+$_date+'.csv']);
  });

  function exportTableToCSV($table, filename) {

      var $rows = $table.find('tr:has(td),tr:has(th)'),

      // Temporary delimiter characters unlikely to be typed by keyboard
      // This is to avoid accidentally splitting the actual contents
      tmpColDelim = String.fromCharCode(11), // vertical tab character
      tmpRowDelim = String.fromCharCode(0), // null character

      // actual delimiter characters for CSV format
      colDelim = '","',
      rowDelim = '"\r\n"',

      // Grab text from table into CSV formatted string
      csv = '"' + $rows.map(function (i, row) {
          var $row = $(row), $cols = $row.find('td,th');

          return $cols.map(function (j, col) {
              var $col = $(col), text = $col.text();

              return text.replace(/"/g, '""'); // escape double quotes

          }).get().join(tmpColDelim);

      }).get().join(tmpRowDelim)
          .split(tmpRowDelim).join(rowDelim)
          .split(tmpColDelim).join(colDelim) + '"',

      // Data URI
      csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

    if (window.navigator.msSaveBlob) { // IE 10+
      //alert('IE' + csv);
      window.navigator.msSaveOrOpenBlob(new Blob([csv], {type: "text/plain;charset=utf-8;"}), $_course+'-'+$_date+'.csv')
    }
    else {
      $(this).attr({ 'download': filename, 'href': csvData, 'target': '_blank' });
    }
  }

</script>
<?php get_footer(); ?>
