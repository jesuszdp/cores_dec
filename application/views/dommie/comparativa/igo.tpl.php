<script src="<?php echo base_url(); ?>assets/third-party/highcharts/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/third-party/highcharts/modules/exporting.js"></script>
<script src="<?php echo base_url(); ?>assets/third-party/fancytree/lib/jquery-ui.custom.js"></script>
<link href="<?php echo base_url(); ?>assets/third-party/fancytree/src/skin-win8/ui.fancytree.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/third-party/fancytree/src/jquery.fancytree.js"></script>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="purple">
        <h4 class="title">
          Información general por tipo de unidad, UMF 31 Iztapalapa (Nivel Operativo)
        </h4>
      </div>
      <div class="card-content">
        <div class="row">
          <div class="col-md-12">
            <div id="comparativa_chrt" style="min-width: 310px; height: 400px; margin: 0 auto">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"><br><br><br><br>
            <div id="comparativa_chrt2" style="min-width: 310px; height: 400px; margin: 0 auto">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--script src="<?php echo base_url(); ?>assets/hightcharts/highcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/hightcharts/exporting.js" type="text/javascript"></script-->
<script type="text/javascript">
 $(document).ready(function(){
   Highcharts.chart('comparativa_chrt', {
       chart: {
           type: 'column'
       },
       title: {
           text: 'Tipos de curso por Perfil '
       },
       subtitle: {
           text: ''
       },
       legend: {
          enabled: false
      },
       xAxis: {
           categories: [
               'Aprobados',
               'No accesos',
               'Inscritos',
               'ETM'
           ],
       },
       yAxis: {
           min: 0,
           title: {
               text: 'Alumnos'
           }
       },
       tooltip: {
         formatter: function () {
           //console.log(this.point);
           var columna = this.series.stackKey.replace('column','');
          return '<b>Perfil: </b>' + columna + '<br/><b>' +
              this.series.name + '</b>: ' + this.y + '<br/>' +
              '<b>Total: </b>' + this.point.stackTotal;

              //
            }
       },
       plotOptions: {
           column: {
               pointPadding: 0.2,
               borderWidth: 0,
               stacking: 'normal',
           }
       },
       series: [
       {
           name: 'Formación',
           data: [49, 71, 106,20],
           visible: true,
           stack: 'MF'
       }, {
           name: 'Actualización',
           data: [83, 78, 98,20],
           visible: true,
           stack:'MF'
       },{
           name: 'Capacitación',
           data: [83, 78, 98,20],
           visible: true,
           stack:'MF'
       }, {
           name: 'Formación',
           data: [48, 38, 39,30],
           visible: true,
           stack:'MNF'
       },{
           name: 'Actualización',
           data: [83, 78, 98,20],
           visible: true,
           stack:'MNF'
       }, {
           name: 'Capacitación',
           data: [48, 38, 39,30],
           visible: true,
           stack:'MNF'
       },{
           name: 'Formación',
           data: [48, 38, 39,30],
           visible: true,
           stack:'MG'
       },{
           name: 'Actualización',
           data: [48, 38, 39,30],
           visible: true,
           stack:'MG'
       },{
           name: 'Capacitación',
           data: [48, 38, 39,30],
           visible: true,
           stack:'MG'
       },{
           name: 'Formación',
           data: [48, 38, 39,30],
           visible: true,
           stack:'Enfermería'
       },{
           name: 'Actualización',
           data: [48, 38, 39,30],
           visible: true,
           stack:'Enfermería'
       },{
           name: 'Capacitación',
           data: [48, 38, 39,30],
           visible: true,
           stack:'Enfermería'
       },
     ],

   });
   Highcharts.chart('comparativa_chrt2', {
       chart: {
           type: 'column'
       },
       title: {
           text: 'Perfiles por tipo de curso '
       },
       subtitle: {
           text: ''
       },
       legend: {
          enabled: false
      },
       xAxis: {
           categories: [
               'Aprobados',
               'No accesos',
               'Inscritos',
               'ETM'
           ],
       },
       yAxis: {
           min: 0,
           title: {
               text: 'Alumnos'
           }
       },
       tooltip: {
         formatter: function () {
           //console.log(this.point);
           var columna = this.series.stackKey.replace('column','');
          return '<b>Tipo de curso: </b>' + columna + '<br/><b>' +
              this.series.name + '</b>: ' + this.y + '<br/>' +
              '<b>Total: </b>' + this.point.stackTotal;

              //
            }
       },
       plotOptions: {
           column: {
               pointPadding: 0.2,
               borderWidth: 0,
               stacking: 'normal',
           }
       },
       series: [
       {
           name: 'MF',
           data: [49, 71, 106,20],
           visible: true,
           stack: 'Actualización'
       }, {
           name: 'MNF',
           data: [83, 78, 98,20],
           visible: true,
           stack:'Actualización'
       },{
           name: 'Enfermería',
           data: [83, 78, 98,20],
           visible: true,
           stack:'Actualización'
       }, {
           name: 'MG',
           data: [48, 38, 39,30],
           visible: true,
           stack:'Actualización'
       },{
           name: 'MF',
           data: [49, 71, 106,20],
           visible: true,
           stack: 'Formación'
       }, {
           name: 'MNF',
           data: [83, 78, 98,20],
           visible: true,
           stack:'Formación'
       },{
           name: 'Enfermería',
           data: [83, 78, 98,20],
           visible: true,
           stack:'Formación'
       }, {
           name: 'MG',
           data: [48, 38, 39,30],
           visible: true,
           stack:'Formación'
       },{
           name: 'MF',
           data: [49, 71, 106,20],
           visible: true,
           stack: 'Capacitación'
       }, {
           name: 'MNF',
           data: [83, 78, 98,20],
           visible: true,
           stack:'Capacitación'
       },{
           name: 'Enfermería',
           data: [83, 78, 98,20],
           visible: true,
           stack:'Capacitación'
       }, {
           name: 'MG',
           data: [48, 38, 39,30],
           visible: true,
           stack:'Capacitación'
       }

     ],

   });
//tree
var SOURCE = [
   {title: "Tipo de curso", selected: true, tooltip: "Tipo de curso" },
   {title: "Perfil", selected: true,tooltip: "Perfil" },
 ];
 var CFG = {
      checkbox: true,
      selectMode: 3,
      source: SOURCE,
      lazyLoad: function(event, ctx) {
        ctx.result = {url: "ajax-sub2.json", debugDelay: 1000};
      },
      loadChildren: function(event, ctx) {
        ctx.node.fixSelection3AfterClick();
      },
      select: function(event, data) {
        // Get a list of all selected nodes, and convert to a key array:
        var selKeys = $.map(data.tree.getSelectedNodes(), function(node){
          return node.key;
        });
        $("#echoSelection3").text(selKeys.join(", "));

        // Get a list of all selected TOP nodes
        var selRootNodes = data.tree.getSelectedNodes(true);
        // ... and convert to a key array:
        var selRootKeys = $.map(selRootNodes, function(node){
          return node.key;
        });
        $("#echoSelectionRootKeys3").text(selRootKeys.join(", "));
        $("#echoSelectionRoots3").text(selRootNodes.join(", "));
      },
      dblclick: function(event, data) {
        data.node.toggleSelected();
      },
      keydown: function(event, data) {
        if( event.which === 32 ) {
          data.node.toggleSelected();
          return false;
        }
      },
      // The following options are only required, if we have more than one tree on one page:
//        initId: "SOURCE",
      cookieId: "fancytree-Cb3",
      idPrefix: "fancytree-Cb3-"
    };
    $("#reporte_tree").fancytree(CFG);

    var SOURCE = [
       {title: "Noroccidente", selected: true, tooltip: "Noroccidente" },
       {title: "Noreste", selected: true,tooltip: "Noreste" },
       {title: "Centro", selected: true,tooltip: "Centro" },
       {title: "Centro sur", selected: true,tooltip: "Centro sur" },
     ];
     var CFG = {
          checkbox: true,
          selectMode: 3,
          source: SOURCE,
          lazyLoad: function(event, ctx) {
            ctx.result = {url: "ajax-sub2.json", debugDelay: 1000};
          },
          loadChildren: function(event, ctx) {
            ctx.node.fixSelection3AfterClick();
          },
          select: function(event, data) {
            // Get a list of all selected nodes, and convert to a key array:
            var selKeys = $.map(data.tree.getSelectedNodes(), function(node){
              return node.key;
            });
            $("#echoSelection3").text(selKeys.join(", "));

            // Get a list of all selected TOP nodes
            var selRootNodes = data.tree.getSelectedNodes(true);
            // ... and convert to a key array:
            var selRootKeys = $.map(selRootNodes, function(node){
              return node.key;
            });
            $("#echoSelectionRootKeys3").text(selRootKeys.join(", "));
            $("#echoSelectionRoots3").text(selRootNodes.join(", "));
          },
          dblclick: function(event, data) {
            data.node.toggleSelected();
          },
          keydown: function(event, data) {
            if( event.which === 32 ) {
              data.node.toggleSelected();
              return false;
            }
          },
          // The following options are only required, if we have more than one tree on one page:
    //        initId: "SOURCE",
          cookieId: "fancytree-Cb3",
          idPrefix: "fancytree-Cb3-"
        };
        $("#regiones_tree").fancytree(CFG);

 });
</script>
